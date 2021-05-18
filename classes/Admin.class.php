<?php

class Admin extends User
{
    /**
     * Nickname for Admin
     *
     * @var String
     */
    private $nickname;

    public function __construct($newFirstName, $newLastName, $newEmail, $newPassword, $newPhoneNumber, $newNickname)
    {
        // parent::__construct($newFirstName, $newLastName, $newEmail, $newPassword, $newPhoneNumber);
        $this->setFirstName($newFirstName);
        $this->setLastName($newLastName);
        $this->setEmail($newEmail);
        $this->setPassword($newPassword);
        $this->setPhoneNumber($newPhoneNumber);
        $this->setNickname($newNickname);
    }


    /**
     * Get nickname for Admin
     *
     * @return  String
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set nickname for Admin
     *
     * @param  String  $nickname  Nickname for Admin
     *
     * @return  self
     */
    public function setNickname(String $nickname)
    {
        $this->nickname = $nickname;
    }

    public function identify()
    {
        echo " Je m'appelle {$this->getFullName()}, mon email est {$this->getEmail()} et mon numéro de téléphone est le {$this->getPhoneNumber()}";
        // parent::identify();
        echo " Nous sommes admin sur ce site. Nous sommes anonymous, nous sommes légion.";
    }
}
