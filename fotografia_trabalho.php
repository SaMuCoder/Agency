<?php

require_once('Databaseable.php');
require_once('MyConnect.php');
class fotografia_trabalho implements Databaseable
{
    use WithDatabaseable;

    protected $idfotografia;
    protected $idtrabalho;

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
     * Get the value of idFotografia
     */
    public function getIdFotografia()
    {
        return $this->idFotografia;
    }

    /**
     * Set the value of idFotografia
     */
    public function setIdFotografia($idfotografia): self
    {
        $this->idfotografia = $idfotografia;

        return $this;
    }

    /**
     * Get the value of idTrabalho
     */
    public function getIdTrabalho()
    {
        return $this->idtrabalho;
    }

    /**
     * Set the value of idPortefolio
     */
    public function setIdPortefolio($idtrabalho): self
    {
        $this->idtrabalho = $idtrabalho;

        return $this;
    }
}
