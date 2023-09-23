<?php
trait Connection
{
    public function connect($data)
    {
        if (!is_array($data)) {
            return false;
        }

        $host = $data['host'];
        $email = $data['email'];
        $pass = $data['password'];
        $port = $data['port'];
        $encription = $data['encription'];

        if ($encription == 'ssl') {
            $connectionAddr = '{' . $host . ':' . $port . '/imap/ssl/novalidate-cert}INBOX';
        } else {
            $connectionAddr = '{' . $host . ':' . $port . '/imap/novalidate-cert}INBOX';
        }

        // now connect via imap
        $connection = imap_open($connectionAddr, $email, $pass);
        if (!$connection) {
            return false;
        }
        return $connection;
    }
}
