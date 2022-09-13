<?php 
class School{
    private string $schoolCode;
    private string $schoolName;
    private string $schoolDean;
    private string $schoolIES;

    function __construct(string $SchoolCode,
    string $SchoolName,
    string $SchoolDean,
    string $SchoolIES)
    {
        $this->schoolCode = $SchoolCode;
        $this->schoolName = $SchoolName;
        $this->schoolDean = $SchoolDean;
        $this->schoolIES = $SchoolIES;
    }


    /**
     * Get the value of schoolCode
     */ 
    public function getSchoolCode()
    {
        return $this->schoolCode;
    }

    /**
     * Set the value of schoolCode
     *
     * @return  self
     */ 
    public function setSchoolCode($schoolCode)
    {
        $this->schoolCode = $schoolCode;

        return $this;
    }

    /**
     * Get the value of schoolName
     */ 
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set the value of schoolName
     *
     * @return  self
     */ 
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get the value of schoolDean
     */ 
    public function getSchoolDean()
    {
        return $this->schoolDean;
    }

    /**
     * Set the value of schoolDean
     *
     * @return  self
     */ 
    public function setSchoolDean($schoolDean)
    {
        $this->schoolDean = $schoolDean;

        return $this;
    }

    /**
     * Get the value of schoolIES
     */ 
    public function getSchoolIES()
    {
        return $this->schoolIES;
    }

    /**
     * Set the value of schoolIES
     *
     * @return  self
     */ 
    public function setSchoolIES($schoolIES)
    {
        $this->schoolIES = $schoolIES;

        return $this;
    }
}

?> 