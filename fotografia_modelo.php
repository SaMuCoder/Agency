<?php

require_once('Databaseable.php');
require_once('MyConnect.php');
class fotografia_modelo implements Databaseable
{
    use WithDatabaseable;

    protected $idFotografia;
    protected $idModelo;

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
    public function setIdFotografia($idFotografia): self
    {
        $this->idFotografia = $idFotografia;

        return $this;
    }

    /**
     * Get the value of idModelo
     */
    public function getIdModelo()
    {
        return $this->idModelo;
    }

    /**
     * Set the value of idModelo
     */
    public function setIdModelo($idModelo): self
    {
        $this->idModelo = $idModelo;

        return $this;
    }
}
