<?php 
class Program{
    private string $programCode;
    private string $programName;
    private string $programHighQuality;
    private int $programCodeSchool;

    function __construct(string $ProgramCode,
    string $ProgramName,
    string $ProgramHighQuality, 
    int $ProgramCodeSchool)
    {
        $this->programCode = $ProgramCode;
        $this->programName = $ProgramName;
        $this->programHighQuality = $ProgramHighQuality;
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