<?php

class m0002_add_password_column
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL;";
        $db->pdo->exec($SQL);
        echo "Migration m0002_add_password_column applied." . PHP_EOL;
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE users DROP COLUMN password;";
        $db->pdo->exec($SQL);
        echo "Migration m0002_add_password_column reverted." . PHP_EOL;
    }
}
