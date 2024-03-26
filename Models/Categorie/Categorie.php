<?php


namespace Models\Categorie;

class Categorie
{
    private $id;
    private $nameCategorie;



    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        };
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
}
