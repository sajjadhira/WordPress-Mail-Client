<?php
trait Database
{
    public $tables;

    public function __construct()
    {
        $this->tables = [
            'clients' => [
                'id' => 'bigint NOT NULL AUTO_INCREMENT',
                'email' => 'varchar(255) NOT NULL',
                'password' => 'varchar(255) NOT NULL',
                'host' => 'varchar(255) NOT NULL',
                'port' => 'varchar(255) NOT NULL',
                'encription' => 'varchar(255) NULL',
                'user_id' => 'bigint NULL',
                'PRIMARY KEY' => '(id)'
            ]
        ];
    }
}
