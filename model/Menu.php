<?php
class Menu
{
    private string $menuCode;
    private string $menuName;
    private string $menuDescription;

    function __construct(
        string $MenuCode,
        string $MenuName,
        string $MenuDescription
    ) {
        $this->menuCode = $MenuCode;
        $this->menuName = $MenuName;
        $this->menuDescription = $MenuDescription;
    }

    /**
     * Get the value of menuCode
     */
    public function getMenuCode()
    {
        return $this->menuCode;
    }

    /**
     * Set the value of menuCode
     *
     * @return  self
     */
    public function setMenuCode($menuCode)
    {
        $this->menuCode = $menuCode;

        return $this;
    }

    /**
     * Get the value of MenuName
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set the value of schoolName
     *
     * @return  self
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;

        return $this;
    }

    /**
     * Get the value of menuDescription
     */
    public function getMenuDescription()
    {
        return $this->menuDescription;
    }

    /**
     * Set the value of schoolDean
     *
     * @return  self
     */
    public function setMenuDescription($menuDescription)
    {
        $this->menuDescription = $menuDescription;

        return $this;
    }
}
