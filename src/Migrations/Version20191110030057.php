<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191110030057 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nox_rankme_map_stats (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, server_id INT DEFAULT NULL, name VARCHAR(32) NOT NULL, played INT DEFAULT 0 NOT NULL, won INT DEFAULT 0 NOT NULL, INDEX IDX_A030D80999E6F5DF (player_id), INDEX IDX_A030D8091844E6B7 (server_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nox_rankme_map_stats ADD CONSTRAINT FK_A030D80999E6F5DF FOREIGN KEY (player_id) REFERENCES `nox_rankme_players` (id)');
        $this->addSql('ALTER TABLE nox_rankme_map_stats ADD CONSTRAINT FK_A030D8091844E6B7 FOREIGN KEY (server_id) REFERENCES nox_rankme_servers (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE nox_rankme_map_stats');
    }
}
