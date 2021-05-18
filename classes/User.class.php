<?php

class User
{
    protected $firstName, $lastName, $email, $password, $phoneNumber;

    public function __construct($newFirstName, $newLastName, $newEmail, $newPassword, $newPhoneNumber)
    {
        $this->setFirstName($newFirstName);
        $this->setLastName($newLastName);
        $this->setEmail($newEmail);
        $this->setPassword($newPassword);
        $this->setPhoneNumber($newPhoneNumber);
    }

    // /**
    //  * Undocumented variable
    //  *
    //  * @var String
    //  */
    // protected $firstName;

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get the value of phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phoneNumber
     *
     * @return  self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function identify()
    {
        echo " Je m'appelle {$this->getFullName()}, mon email est {$this->getEmail()} et mon numéro de téléphone est le {$this->getPhoneNumber()}";
    }
}
