<?php

class Marque extends Model
{
    protected $id;
    protected $Nom;
    protected $AnneeCreate;
    protected $Description;
    protected $fields = ["Nom","AnneeCreate","Description"];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getAnneeCreate()
    {
        return $this->AnneeCreate;
    }

    /**
     * @param mixed $AnneeCreate
     */
    public function setAnneeCreate($AnneeCreate)
    {
        $this->AnneeCreate = $AnneeCreate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }




}