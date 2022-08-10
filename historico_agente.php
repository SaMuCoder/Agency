<?php

require_once('Databaseable.php');
require_once('MyConnect.php');

class historico_agente implements Databaseable
{
    use WithDatabaseable;

    protected $idAgente;
    protected $dataInicio;
    protected $dataFim;
    protected $motivo;

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
     * Get the value of idAgente
     */
    public function getId()
    {
        return $this->idAgente;
    }

    /**
     * Set the value of idAgente
     */
    public function setId($idAgente): self
    {
        $this->idAgente = $idAgente;

        return $this;
    }

    /**
     * Get the value of dataInicio
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set the value of dataInicio
     */
    public function setDataInicio($dataInicio): self
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get the value of dataFim
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set the value of dataFim
     */
    public function setDataFim($dataFim): self
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Get the value of motivo
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set the value of motivo
     */
    public function setMotivo($motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }
}
