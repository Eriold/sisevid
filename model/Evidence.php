<?php class Evidence
{
    private string $nameEvidence;
    private string $idArticle;
    private string $idEvidencias;

    public function __construct(
        string $NameEvidence,
        string $IdArticle,
        string $IdEvidencias
    ) {
        $this->nameEvidence = $NameEvidence;
        $this->idArticle = $IdArticle;
        $this->idEvidencias = $IdEvidencias;
    }
    /**
     * Get the value of nameEvidence
     */
    public function getNameEvidence()
    {
        return $this->nameEvidence;
    }

    /**
     * Set the value of nameEvidence
     *
     * @return  self
     */
    public function setNameEvidence($nameEvidence)
    {
        $this->nameEvidence = $nameEvidence;

        return $this;
    }

    /**
     * Get the value of idArticle
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set the value of idArticle
     *
     * @return  self
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Set the value of idEvidencias
     *
     * @return  self
     */
    public function setIdEvidencias($idEvidencias)
    {
        $this->idEvidencias = $idEvidencias;

        return $this;
    }

     /**
     * Get the value of idEvidencias
     */
    public function getIdEvidencias()
    {
        return $this->idEvidencias;
    }
}
