<?php 
class Program{
    private string $programCode;
    private string $programName;
    private string $programHighQuality;
    private string $programCode_IES;
    private int $programCodeSchool;

    function __construct(string $ProgramCode,
    string $ProgramName,
    string $ProgramHighQuality,
    string $ProgramCode_IES, 
    int $ProgramCodeSchool)
    {
        $this->programCode = $ProgramCode;
        $this->programName = $ProgramName;
        $this->programHighQuality = $ProgramHighQuality;
        $this->programCode_IES = $ProgramCode_IES;
        $this->programCodeSchool = $ProgramCodeSchool;
    }

    /**
     * Get the value of programCode
     */ 
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Set the value of programCode
     *
     * @return  self
     */ 
    public function setProgramCode($programCode)
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * Get the value of programName
     */ 
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Set the value of programName
     *
     * @return  self
     */ 
    public function setProgramName($programName)
    {
        $this->programName = $programName;

        return $this;
    }

    /**
     * Get the value of programHighQuality
     */ 
    public function getProgramHighQuality()
    {
        return $this->programHighQuality;
    }

    /**
     * Set the value of programHighQuality
     *
     * @return  self
     */ 
    public function setProgramHighQuality($programHighQuality)
    {
        $this->programHighQuality = $programHighQuality;

        return $this;
    }

    /**
     * Get the value of programCode_IES
     */ 
    public function getProgramCode_IES()
    {
        return $this->programCode_IES;
    }

    /**
     * Set the value of programCode_IES
     *
     * @return  self
     */ 
    public function setProgramCode_IES($programCode_IES)
    {
        $this->programCode_IES = $programCode_IES;

        return $this;
    }

        /**
     * Get the value of programCodeSchool
     */ 
    public function getProgramCodeSchool()
    {
        return $this->programCodeSchool;
    }

    /**
     * Set the value of progprogramCodeSchoolramCode
     *
     * @return  self
     */ 
    public function setProgramCodeSchool($programCodeSchool)
    {
        $this->programCodeSchool = $programCodeSchool;

        return $this;
    }
    
}
?>