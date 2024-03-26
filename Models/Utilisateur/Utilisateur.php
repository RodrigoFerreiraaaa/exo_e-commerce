<?php

namespace Models\Utilisateur;


class Utilisateur
{

    private $id_utilisateur;
    private $firstName_utilisateur;
    private $lastName_utilisateur;
    private $email_utilisateur;
    private $password_utilisateur;




    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }



    /**
     * Get the value of id_utilisateur
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of firstName_utilisateur
     */
    public function getFirstName_utilisateur()
    {
        return $this->firstName_utilisateur;
    }

    /**
     * Set the value of firstName_utilisateur
     *
     * @return  self
     */
    public function setFirstName_utilisateur($firstName_utilisateur)
    {
        $this->firstName_utilisateur = $firstName_utilisateur;

        return $this;
    }

    /**
     * Get the value of lastName_utilisateur
     */
    public function getLastName_utilisateur()
    {
        return $this->lastName_utilisateur;
    }

    /**
     * Set the value of lastName_utilisateur
     *
     * @return  self
     */
    public function setLastName_utilisateur($lastName_utilisateur)
    {
        $this->lastName_utilisateur = $lastName_utilisateur;

        return $this;
    }

    /**
     * Get the value of email_utilisateur
     */
    public function getEmail_utilisateur()
    {
        return $this->email_utilisateur;
    }

    /**
     * Set the value of email_utilisateur
     *
     * @return  self
     */
    public function setEmail_utilisateur($email_utilisateur)
    {
        $this->email_utilisateur = $email_utilisateur;

        return $this;
    }

    /**
     * Get the value of password_utilisateur
     */
    public function getPassword_utilisateur()
    {
        return $this->password_utilisateur;
    }

    /**
     * Set the value of password_utilisateur
     *
     * @return  self
     */
    public function setPassword_utilisateur($password_utilisateur)
    {
        $this->password_utilisateur = $password_utilisateur;

        return $this;
    }
}
