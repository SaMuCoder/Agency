<?php

require_once('Databaseable.php');
require_once('MyConnect.php');

class Fotografo implements Databaseable
{
    use WithDatabaseable;

    protected $idfotografo;
    protected $nome;
    protected $morada;
    protected $contacto;
    protected $nif;
    protected $datainicio;

    public function __construct(array $parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter;
            }
        }
    }



    /**
     * Get the value of idfotografo
     */
    public function getId()
    {
        return $this->idfotografo;
    }

    /**
     * Set the value of idfotografo
     */
    public function setId($idfotografo): self
    {
        $this->idfotografo = $idfotografo;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of morada
     */
    public function getMorada()
    {
        return $this->morada;
    }

    /**
     * Set the value of morada
     */
    public function setMorada($morada): self
    {
        $this->morada = $morada;

        return $this;
    }

    /**
     * Get the value of contacto
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set the value of contacto
     */
    public function setContacto($contacto): self
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get the value of nif
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set the value of nif
     */
    public function setNif($nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get the value of datainicio
     */
    public function getDatainicio()
    {
        return $this->datainicio;
    }

    /**
     * Set the value of datainicio
     */
    public function setDatainicio($datainicio): self
    {
        $this->datainicio = $datainicio;

        return $this;
    }
}
