<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190428214236 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, modality_id INT NOT NULL, registration_id INT NOT NULL, amount DOUBLE PRECISION NOT NULL, INDEX IDX_B1DC7A1E2D6D889B (modality_id), INDEX IDX_B1DC7A1E833D8F43 (registration_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modality (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E2D6D889B FOREIGN KEY (modality_id) REFERENCES modality (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('ALTER TABLE registration ADD userconnected_id_id INT NOT NULL, ADD total_amount DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7C903FE1D FOREIGN KEY (userconnected_id_id) REFERENCES userConnected (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A7C903FE1D ON registration (userconnected_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E2D6D889B');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE modality');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7C903FE1D');
        $this->addSql('DROP INDEX UNIQ_62A8A7A7C903FE1D ON registration');
        $this->addSql('ALTER TABLE registration DROP userconnected_id_id, DROP total_amount');
    }
}