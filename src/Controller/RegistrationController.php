<?php

namespace App\Controller;

use App\Entity\Registration;
use App\Entity\VikaEvent;
use App\Form\PreregistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;
use App\Entity\UserConnected;
use App\Entity\Adress;
use App\Entity\City;
use App\Entity\Phone;
use App\Entity\PersonOfContact;
use App\Entity\ContactList;
use App\Entity\Paiement;
use App\Form\AddUserType;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\PhoneType;
use App\Form\PersonOfContactType;
use App\Form\ContactListType;
use App\Form\PaiementType;
use App\Entity\AttachedFile;

use App\Repository\UserRepository;
use App\Repository\RegistrationRepository;
use App\Repository\PaiementRepository;
use App\Form\DocumentType;


class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function index()
    {
        return $this->render('registration/showContent.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-user-family-{id}", name="registration_view_family", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function indexFamily(UserConnected $userConnected)
    {
        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [

            'users' => $users,
            'userConnected' => $userConnected
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-user-family-{id}-{idevent}", name="registration_member_lesson", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function lessonsMember(UserConnected $userConnected, $idevent)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Registration::class);
        $event = $entityManager->getRepository(VikaEvent::class)->find($idevent);

        $prereg = new Registration();
        $preregs = $repository->findBy(
            ['vikaEvent' => $idevent]
        );



        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [

            'users' => $users,
            'userConnected' => $userConnected,
            'idevent' => $event,
            'preregs' => $preregs,
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/condition-user-family-{id}-{idevent}", name="condition_view_family", requirements={"id"="\d+"})
     */
    public function conditions( User $user, $idevent, Request $request, ObjectManager $manager)
    {
        $userConnected = $this->getUser($user);
        $entityManager = $this->getDoctrine()->getManager();
        $event = $entityManager->getRepository(VikaEvent::class)->find($idevent);
        $prereg = new Registration();
        $form = $this->createForm(PreregistrationType::class, $prereg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $prereg->setVikaEvent($event);
            $prereg->setUser($user);
            $prereg->setRegistrationDate(new \DateTime('now'));
            $manager->persist($prereg);

            $manager->flush();
            return $this->redirectToRoute('registration_view_family',['id' => $userConnected->getId()]);
        }


        return $this->render('registration/conditions.html.twig', [
            'user' => $user,
//            'userConnected' => $userConnected,
            'idevent' => $event,
            'form' => $form->createView()
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-list", name="registration_view")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listRegistration(RegistrationRepository $repo)
    {

        $registration = $repo->findAll();
        return $this->render('registration/showContent.html.twig', [
            'controller_name' => 'Liste des dossiers de préinscription',
            'registrations' => $registration,
        ]);
    }


    /**
     * @Route("/dossier-inscription-{id}", name="dossier_inscription", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function viewRegistration(AttachedFile $attachedFile = null, PaiementRepository $repo, Registration $registration, Request $request, ObjectManager $manager)
    {
        //Obtenir la liste des paiements associés:
        $paiementNombre = $repo->findBy(
            ['registration' => $registration]
        );

        //Ajouter des nouveaux paiements:
        $paiement = new Paiement();
        $formPaiement = $this->createForm(PaiementType::class, $paiement);
        $formPaiement->handleRequest($request);

        if ($formPaiement->isSubmitted() && $formPaiement->isValid()) {
            $manager->persist($paiement);
            // si changement de grade, on l'ajoute à l'historique du user
            $this->addPaiementRegistration($registration, $paiement, $manager);
            $manager->flush();

            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);
        }


        
        //Informations de l'USER:
        $user = $registration->getUser();
        //Informations sur l'adresse du USER:
        $adress = $user->getAdress();

        //Ajouter le document 1:
        if (!$attachedFile) {
            $attachedFile = new AttachedFile();
        }
        $formAttachedFile_1 = $this->createForm(DocumentType::class, $attachedFile);
        $formAttachedFile_1->handleRequest($request);

        if ($formAttachedFile_1->isSubmitted() && $formAttachedFile_1->isValid()) {

            if (!$attachedFile->getId()){
                $attachedFile->setDatecreat(new \DateTime());
            }
            $attachedFile->setRegistration($registration);
            $manager->persist($attachedFile);
            //Obtenir l'ID de l'attached file:
            $id = $attachedFile->getId();
            //Insérer l'ID du certificat medical dans registration:
            $registration->setMedicalCertificate($id);
            $manager->persist($registration);
            $manager->flush();

            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);

        }
        
        return $this->render('registration/fileRegistration.html.twig', [
            'formPaiement' => $formPaiement->createView(),
            'formAttachedFile_1' => $formAttachedFile_1->createView(),
            'registration' => $registration,
            'user' => $user,
            'adress' => $adress,
            'paiements' => $paiementNombre,
        ]);
    }


    /**
     * AJOUTE NOUVEAU MODALITÉ + ASSOCIATION AVEC LE REGISTRATION
     */
    public function addPaiementRegistration(Registration $registration, Paiement $paiement, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()->getRepository(Paiement::class);
        $paiementTest = $repo->findOneBy([
            'modality' => $paiement->getModality(),
            'amount' => $paiement->getAmount()
        ]);
        if (!$paiementTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($paiement);
            $registration->addPaiement($paiement);
            $manager->flush();
        } else {
            // associe le n° existant à cet user
            $registration->addPaiement($paiementTest);
            $manager->flush();
        }
    }

    /**
     * @Route("/paiement-id={id}-edit", name="paiement_edit", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function paiementEdit(Paiement $paiement, Request $request, ObjectManager $manager)
    {
//        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        //      * @Security("has_role('ROLE_ADMIN') or user.getUserConnected().getId() == contactList.getUser().getId()")
        $formPaiement = $this->createForm(PaiementType::class, $paiement);
        $formPaiement->handleRequest($request);
        $registration = $paiement->getRegistration();

        if ($formPaiement->isSubmitted() && $formPaiement->isValid()) {
            $manager->persist($paiement);
            $this->addPaiementRegistration($registration, $paiement, $manager);
            $manager->flush();
            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);
        }

        return $this->render('registration/editPaiement.html.twig', [
            'formPaiement' => $formPaiement->createView(),
        ]);
    }


    /**
     * Supprimer la modalité de payement
     * @Route("/paiement-remove={id}", name="paiement_remove", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removePaiement(Paiement $paiement)
    {
        $registration = $paiement->getRegistration();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($paiement);
        $entityManager->flush();
        return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);

    }
}
