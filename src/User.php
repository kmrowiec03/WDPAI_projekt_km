<?php


class User {
    private $email;
    private $password;
    private$nickname;
    private $name;
    private $surname;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
        $this->name = "";
        $this->surname = "";
        $this->nickname = "$this->name" . "$this->surname";
    }

    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }
    public function getNickname() {
    return $this->nickname;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
        $this->nickname = "$this->name" . "$this->surname";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
        $this->nickname = "$this->name" . "$this->surname";

    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

}
?>