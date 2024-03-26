<?php

namespace Models\Tache;

class Tache
{
    private $id;
    private $name;
    private $priorite;
    private $id_categorie;
    private $nameCategorie;

    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        };
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id_categorie
     */
    public function getId_categorie()
    {
        return $this->id_categorie;
    }

    /**
     * Set the value of id_categorie
     *
     * @return  self
     */
    public function setId_categorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nameCategorie
     */
    public function getNameCategorie()
    {
        return $this->nameCategorie;
    }

    /**
     * Set the value of nameCategorie
     *
     * @return  self
     */
    public function setNameCategorie($nameCategorie)
    {
        $this->nameCategorie = $nameCategorie;

        return $this;
    }

    /**
     * Get the value of priorite
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set the value of priorite
     */
    public function setPriorite($priorite): self
    {
        $this->priorite = $priorite;

        return $this;
    }
}
