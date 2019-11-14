<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191110025923 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nox_rankme_servers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(128) NOT NULL, ip_address VARCHAR(255) DEFAULT NULL, port INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `nox_rankme_players` (id INT AUTO_INCREMENT NOT NULL, auth_data VARCHAR(64) NOT NULL, player_name VARCHAR(48) NOT NULL, connected INT DEFAULT 0 NOT NULL, lastconnect INT DEFAULT 0 NOT NULL, lastip VARCHAR(48) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nox_rankme_stats (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, server_id INT DEFAULT NULL, player_rank INT DEFAULT 0 NOT NULL, score INT DEFAULT 0 NOT NULL, kills INT DEFAULT 0 NOT NULL, deaths INT DEFAULT 0 NOT NULL, assists INT DEFAULT 0 NOT NULL, suicides INT DEFAULT 0 NOT NULL, tk INT DEFAULT 0 NOT NULL, shots INT DEFAULT 0 NOT NULL, hits INT DEFAULT 0 NOT NULL, headshots INT DEFAULT 0 NOT NULL, rounds_tr INT DEFAULT 0 NOT NULL, rounds_ct INT DEFAULT 0 NOT NULL, knife INT DEFAULT 0 NOT NULL, glock INT DEFAULT 0 NOT NULL, hkp2000 INT DEFAULT 0 NOT NULL, usp_silencer INT DEFAULT 0 NOT NULL, p250 INT DEFAULT 0 NOT NULL, deagle INT DEFAULT 0 NOT NULL, elite INT DEFAULT 0 NOT NULL, fiveseven INT DEFAULT 0 NOT NULL, tec9 INT DEFAULT 0 NOT NULL, cz75a INT DEFAULT 0 NOT NULL, revolver INT DEFAULT 0 NOT NULL, nova INT DEFAULT 0 NOT NULL, xm1014 INT DEFAULT 0 NOT NULL, mag7 INT DEFAULT 0 NOT NULL, sawedoff INT DEFAULT 0 NOT NULL, bizon INT DEFAULT 0 NOT NULL, mac10 INT DEFAULT 0 NOT NULL, mp9 INT DEFAULT 0 NOT NULL, mp7 INT DEFAULT 0 NOT NULL, ump45 INT DEFAULT 0 NOT NULL, p90 INT DEFAULT 0 NOT NULL, galilar INT DEFAULT 0 NOT NULL, ak47 INT DEFAULT 0 NOT NULL, scar20 INT DEFAULT 0 NOT NULL, famas INT DEFAULT 0 NOT NULL, m4a1 INT DEFAULT 0 NOT NULL, m4a1_silencer INT DEFAULT 0 NOT NULL, aug INT DEFAULT 0 NOT NULL, ssg08 INT DEFAULT 0 NOT NULL, ssg556 INT DEFAULT 0 NOT NULL, awp INT DEFAULT 0 NOT NULL, g3sg1 INT DEFAULT 0 NOT NULL, m249 INT DEFAULT 0 NOT NULL, negev INT DEFAULT 0 NOT NULL, hegrenade INT DEFAULT 0 NOT NULL, flashbang INT DEFAULT 0 NOT NULL, smokegrenade INT DEFAULT 0 NOT NULL, inferno INT DEFAULT 0 NOT NULL, decoy INT DEFAULT 0 NOT NULL, taser INT DEFAULT 0 NOT NULL, mp5sd INT DEFAULT 0 NOT NULL, head INT DEFAULT 0 NOT NULL, chest INT DEFAULT 0 NOT NULL, stomach INT DEFAULT 0 NOT NULL, left_arm INT DEFAULT 0 NOT NULL, right_arm INT DEFAULT 0 NOT NULL, left_leg INT DEFAULT 0 NOT NULL, right_leg INT DEFAULT 0 NOT NULL, c4_planted INT DEFAULT 0 NOT NULL, c4_exploded INT DEFAULT 0 NOT NULL, c4_defused INT DEFAULT 0 NOT NULL, ct_win INT DEFAULT 0 NOT NULL, tr_win INT DEFAULT 0 NOT NULL, mvp INT DEFAULT 0 NOT NULL, damage INT DEFAULT 0 NOT NULL, match_win INT DEFAULT 0 NOT NULL, match_draw INT DEFAULT 0 NOT NULL, match_lose INT DEFAULT 0 NOT NULL, first_blood INT DEFAULT 0 NOT NULL, no_scope INT DEFAULT 0 NOT NULL, no_scope_dis INT DEFAULT 0 NOT NULL, INDEX IDX_A2EC78A499E6F5DF (player_id), INDEX IDX_A2EC78A41844E6B7 (server_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nox_rankme_stats ADD CONSTRAINT FK_A2EC78A499E6F5DF FOREIGN KEY (player_id) REFERENCES `nox_rankme_players` (id)');
        $this->addSql('ALTER TABLE nox_rankme_stats ADD CONSTRAINT FK_A2EC78A41844E6B7 FOREIGN KEY (server_id) REFERENCES nox_rankme_servers (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nox_rankme_stats DROP FOREIGN KEY FK_A2EC78A41844E6B7');
        $this->addSql('ALTER TABLE nox_rankme_stats DROP FOREIGN KEY FK_A2EC78A499E6F5DF');
        $this->addSql('DROP TABLE nox_rankme_servers');
        $this->addSql('DROP TABLE `nox_rankme_players`');
        $this->addSql('DROP TABLE nox_rankme_stats');
    }
}
