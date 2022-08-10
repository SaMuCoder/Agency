<?php

require_once('Databaseable.php');
require_once('MyConnect.php');

class Fotografia implements Databaseable
{
    use WithDatabaseable;

    protected $idfotografia;
    protected $nome;
    protected $resolucao;
    protected $cores;
    protected $tipofoto;
    protected $localizacao;
    protected $idfotografo;

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
    public function getId()
    {
        return $this->idfotografia;
    }

    /**
     * Set the value of idFotografia
     */
    public function setId($idfotografia): self
    {
        $this->idfotografia = $idfotografia;

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
     * Get the value of resolucao
     */
    public function getResolucao()
    {
        return $this->resolucao;
    }

    /**
     * Set the value of resolucao
     */
    public function setResolucao($resolucao): self
    {
        $this->resolucao = $resolucao;

        return $this;
    }

    /**
     * Get the value of cores
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * Set the value of cores
     */
    public function setCores($cores): self
    {
        $this->cores = $cores;

        return $this;
    }

    /**
     * Get the value of tipoFoto
     */
    public function getTipoFoto()
    {
        return $this->tipofoto;
    }

    /**
     * Set the value of tipoFoto
     */
    public function setTipoFoto($tipofoto): self
    {
        $this->tipofoto = $tipofoto;

        return $this;
    }

    /**
     * Get the value of localizacao
     */
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * Set the value of localizacao
     */
    public function setLocalizacao($localizacao): self
    {
        $this->localizacao = $localizacao;

        return $this;
    }

    /**
     * Get the value of idFotografo
     */
    public function getIdFotografo()
    {
        return $this->idfotografo;
    }

    /**
     * Set the value of idFotografo
     */
    public function setIdFotografo($idfotografo): self
    {
        $this->idfotografo = $idfotografo;

        return $this;
    }
}
