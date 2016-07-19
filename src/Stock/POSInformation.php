<?php

namespace DdD\\Stock;

class POSInformation
{

    /**
     * @var int $Identifier
     */
    protected $Identifier = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var POSInformationInformationType $TypeOfInformation
     */
    protected $TypeOfInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param int $Identifier
     * @return \DdD\\Stock\POSInformation
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \DdD\\Stock\POSInformation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \DdD\\Stock\POSInformation
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return POSInformationInformationType
     */
    public function getTypeOfInformation()
    {
      return $this->TypeOfInformation;
    }

    /**
     * @param POSInformationInformationType $TypeOfInformation
     * @return \DdD\\Stock\POSInformation
     */
    public function setTypeOfInformation($TypeOfInformation)
    {
      $this->TypeOfInformation = $TypeOfInformation;
      return $this;
    }

}
