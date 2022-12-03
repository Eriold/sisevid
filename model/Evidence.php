<?php class Evidence
{
    private string $nameEvidence;
    private string $idArticle;
    private string $idEvidencias;
    private string $dateEvidence;
    private string $dateModificationEvidence;
    private string $observationEvidence;
    private string $descriptionEvidence;

    public function __construct(
        string $NameEvidence,
        string $IdArticle,
        string $IdEvidencias,
        string $DateEvidence,
        string $DateModificationEvidence,
        string $ObservatioEvidence,
        string $DescriptionEvidence
    ) {
        $this->nameEvidence = $NameEvidence;
        $this->idArticle = $IdArticle;
        $this->idEvidencias = $IdEvidencias;
        $this->dateEvidence = $DateEvidence;
        $this->dateModificationEvidence = $DateModificationEvidence;
        $this->observationEvidence = $ObservatioEvidence;
        $this->descriptionEvidence = $DescriptionEvidence;

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

    /**
     * Get the value of dateEvidence
     */
    public function getDateEvidence()
    {
        return $this->dateEvidence;
    }

    /**
     * Set the value of dateEvidence
     *
     * @return  self
     */
    public function setDateEvidence($dateEvidence)
    {
        $this->dateEvidence = $dateEvidence;

        return $this;
    }

    /**
     * Get the value of nameEvidence
     */
    public function getObservationEvidence()
    {
        return $this->observationEvidence;
    }

    /**
     * Set the value of nameEvidence
     *
     * @return  self
     */
    public function setObservationEvidence($observationEvidence)
    {
        $this->observationEvidence = $observationEvidence;

        return $this;
    }

    /**
     * Get the value of nameEvidence
     */
    public function getDescriptionEvidence()
    {
        return $this->descriptionEvidence;
    }

    /**
     * Set the value of nameEvidence
     *
     * @return  self
     */
    public function setDescriptionEvidence($descriptionEvidence)
    {
        $this->descriptionEvidence = $descriptionEvidence;

        return $this;
    }

    /**
     * Get the value of dateModificationEvidence
     */
    public function getDateModificationEvidence()
    {
        return $this->dateModificationEvidence;
    }

    /**
     * Set the value of dateModificationEvidence
     *
     * @return  self
     */
    public function setDateModificationEvidence($dateModificationEvidence)
    {
        $this->dateModificationEvidence = $dateModificationEvidence;

        return $this;
    }


}
