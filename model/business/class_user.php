<?php

require_once("controller/function_AutoLoad.php");

class user {

    private $id;
    private $username;
    private $password;

    function __construct($username, $password) {
        $this->setId(null);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    public function showMe() {
        printSomething($this->getId(), $this->getUsername());
    }

}

?>