<?php

namespace App\Form;

use App\Entity\PersonOfContact;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonOfContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('firstName')
            ->add('num1')
            ->add('num2')
            ->add('info', TextareaType::class, [
                'attr'=>[
                    'placeholder'=>"Informations complémentaires sur la personne de contact"
                ]
            ])
            ->add('relation', TextType::class, [
                'attr'=>[
                    'placeholder'=>"Relation avec la personne de contact"
                    ]
            ])
            ->add('users',EntityType::class,[
                'class'       => User::class,
                'choice_label'=>'name',
    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PersonOfContact::class,
        ]);
    }
}
