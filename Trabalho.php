<?php

require_once('Databaseable.php');
require_once('MyConnect.php');
class Trabalho implements Databaseable{
    use WithDatabaseable;

    protected $idtrabalho;
    protected $idmodelo;
    protected $datainicio;
    protected $datafim;

    public function __construct($parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter;
            }
        }
    }





    /**
     * Get the value of idTrabalho
     */
    public function getId()
    {
        return $this->idtrabalho;
    }

    /**
     * Set the value of idTrabalho
     */
    public function setId($idtrabalho): self
    {
        $this->idtrabalho = $idtrabalho;

        return $this;
    }

    /**
     * Get the value of idModelo
     */
    public function getIdModelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set the value of idModelo
     */
    public function setIdModelo($idmodelo): self
    {
        $this->idmodelo = $idmodelo;

        return $this;
    }

    /**
     * Get the value of dataInicio
     */
    public function getDataInicio()
    {
        return $this->datainicio;
    }

    /**
     * Set the value of dataInicio
     */
    public function setDataInicio($datainicio): self
    {
        $this->datainicio = $datainicio;

        return $this;
    }

    /**
     * Get the value of dataFim
     */
    public function getDataFim()
    {
        return $this->datafim;
    }

    /**
     * Set the value of dataFim
     */
    public function setDataFim($datafim): self
    {
        $this->datafim = $datafim;

        return $this;
    }
}