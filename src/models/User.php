<?php


class User {
    private $email;
    private $password;
    private $nickname;
    private $name;
    private $surname;
    private $phoneNumber;
    private $accountType;

    public function __construct($email, $password, $name = "", $surname = "", $phoneNumber = "", $accountType = "user") {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->phoneNumber = $phoneNumber;
        $this->accountType = $accountType;
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

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setSurname(string $surname) {
        $this->surname = $surname;
        $this->nickname = "$this->name" . "$this->surname"; // Zaktualizowanie nickname
    }

    public function setName(string $name) {
        $this->name = $name;
        $this->nickname = "$this->name" . "$this->surname"; // Zaktualizowanie nickname
    }

    public function setPhoneNumber(string $phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function setAccountType(string $accountType) {
        $this->accountType = $accountType;
    }

}
