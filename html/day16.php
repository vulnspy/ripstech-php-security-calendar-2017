<?php
class FTP {
    public $sock;

    public function __construct($host, $port, $user, $pass) {
        $this->sock = fsockopen($host, $port);

        $this->login($user, $pass);
        $this->cleanInput();
        $this->mode($_REQUEST['mode']);
        $this->send($_FILES['file']);
    }

    private function cleanInput() {
        $_GET = array_map('intval', $_GET);
        $_POST = array_map('intval', $_POST);
        $_COOKIE = array_map('intval', $_COOKIE);
    }

    public function login($username, $password) {
        fwrite($this->sock, "USER " . $username . "\n");
        fwrite($this->sock, "PASS " . $password . "\n");
    }

    public function mode($mode) {
        if ($mode == 1 || $mode == 2 || $mode == 3) {
            fputs($this->sock, "MODE $mode\n");
        }
    }

    public function send($data) {
        fputs($this->sock, $data);
    }
}

new FTP('localhost', 21, 'user', 'password');
show_source(__FILE__);
