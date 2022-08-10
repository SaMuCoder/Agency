<?php

require_once('Databaseable.php');
require_once('MyConnect.php');

class historico_medidas implements Databaseable
{
    use WithDatabaseable;

    protected $idModelo;
    protected $medida1nova;
    protected $medida2nova;
    protected $medida3nova;
    protected $medida1;
    protected $medida2;
    protected $medida3;

    public function __construct(array $parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter == NULL ? NULL : $parameter;
            }
        }
    }

    /**
     * Get the value of idModelo
     */
    public function getId()
    {
        return $this->idModelo;
    }

    /**
     * Set the value of idModelo
     */
    public function setId($idModelo): self
    {
        $this->idModelo = $idModelo;

        return $this;
    }

    /**
     * Get the value of dataAlt
     */
    public function getDataAlt()
    {
        return $this->dataAlt;
    }

    /**
     * Set the value of dataAlt
     */
    public function setDataAlt($dataAlt): self
    {
        $this->dataAlt = $dataAlt;

        return $this;
    }

    /**
     * Get the value of medida1_nova
     */
    public function getMedida1Nova()
    {
        return $this->medida1_nova;
    }

    /**
     * Set the value of medida1_nova
     */
    public function setMedida1Nova($medida1_nova): self
    {
        $this->medida1_nova = $medida1_nova;

        return $this;
    }

    /**
     * Get the value of medida2_nova
     */
    public function getMedida2Nova()
    {
        return $this->medida2_nova;
    }

    /**
     * Set the value of medida2_nova
     */
    public function setMedida2Nova($medida2_nova): self
    {
        $this->medida2_nova = $medida2_nova;

        return $this;
    }

    /**
     * Get the value of medida3_nova
     */
    public function getMedida3Nova()
    {
        return $this->medida3_nova;
    }

    /**
     * Set the value of medida3_nova
     */
    public function setMedida3Nova($medida3_nova): self
    {
        $this->medida3_nova = $medida3_nova;

        return $this;
    }

    /**
     * Get the value of medida1_antiga
     */
    public function getMedida1Antiga()
    {
        return $this->medida1;
    }

    /**
     * Set the value of medida1_antiga
     */
    public function setMedida1Antiga($medida1): self
    {
        $this->medida1 = $medida1;

        return $this;
    }

    /**
     * Get the value of medida2_antiga
     */
    public function getMedida2Antiga()
    {
        return $this->medida2;
    }

    /**
     * Set the value of medida2_antiga
     */
    public function setMedida2Antiga($medida2): self
    {
        $this->medida2 = $medida2;

        return $this;
    }

    /**
     * Get the value of medida3_antiga
     */
    public function getMedida3Antiga()
    {
        return $this->medida3;
    }

    /**
     * Set the value of medida3_antiga
     */
    public function setMedida3Antiga($medida3): self
    {
        $this->medida3 = $medida3;

        return $this;
    }
}
