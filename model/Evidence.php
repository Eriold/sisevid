<?php class Evidence
{
    private string $nameEvidence;
    private string $idArticle;

    public function __construct(
        string $NameEvidence,
        string $IdArticle
    ) {
        $this->nameEvidence = $NameEvidence;
        $this->idArticle = $IdArticle;
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
}
