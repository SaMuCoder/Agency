<?php

require_once('Databaseable.php');
require_once('MyConnect.php');

class Modelo implements Databaseable
{
    use WithDatabaseable;

    protected $idmodelo;
    protected $nome;
    protected $morada;
    protected $contacto;
    protected $nif;
    protected $sexo;
    protected $nacionalidade;
    protected $altura;
    protected $medida1;
    protected $medida2;
    protected $medida3;
    protected $idagente;

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
     * Get the value of idModelo
     */
    public function getId()
    {
        return $this->idmodelo;
    }

    /**
     * Set the value of idModelo
     */
    public function setId($idmodelo): self
    {
        $this->idmodelo = $idmodelo;

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
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     */
    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     */
    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of medida1
     */
    public function getMedida1()
    {
        return $this->medida1;
    }

    /**
     * Set the value of medida1
     */
    public function setMedida1($medida1): self
    {
        $this->medida1 = $medida1;

        return $this;
    }

    /**
     * Get the value of medida2
     */
    public function getMedida2()
    {
        return $this->medida2;
    }

    /**
     * Set the value of medida2
     */
    public function setMedida2($medida2): self
    {
        $this->medida2 = $medida2;

        return $this;
    }

    /**
     * Get the value of medida3
     */
    public function getMedida3()
    {
        return $this->medida3;
    }

    /**
     * Set the value of medida3
     */
    public function setMedida3($medida3): self
    {
        $this->medida3 = $medida3;

        return $this;
    }

    /**
     * Get the value of idAgente
     */
    public function getIdAgente()
    {
        return $this->idagente;
    }

    /**
     * Set the value of idAgente
     */
    public function setIdAgente($idagente): self
    {
        $this->idagente = $idagente;

        return $this;
    }
}
