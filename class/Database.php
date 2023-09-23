<?php
trait Database
{
    public $tables;

    public function __construct()
    {
        $this->tables = [
            'mailclient' => [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                'name' => 'VARCHAR(255) NOT NULL',
                'email' => 'VARCHAR(255) NOT NULL',
                'subject' => 'VARCHAR(255) NOT NULL',
                'message' => 'TEXT NOT NULL',
                'PRIMARY KEY' => '(id)'
            ]
        ];
    }
}
