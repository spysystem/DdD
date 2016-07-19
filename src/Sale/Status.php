<?php

namespace DdD\Sale;

class Status
{

    /**
     * @var int $LastSavedSale
     */
    protected $LastSavedSale = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var boolean $SaleExists
     */
    protected $SaleExists = null;

    /**
     * @var boolean $Saved
     */
    protected $Saved = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getLastSavedSale()
    {
      return $this->LastSavedSale;
    }

    /**
     * @param int $LastSavedSale
     * @return \DdD\Sale\Status
     */
    public function setLastSavedSale($LastSavedSale)
    {
      $this->LastSavedSale = $LastSavedSale;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \DdD\Sale\Status
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaleExists()
    {
      return $this->SaleExists;
    }

    /**
     * @param boolean $SaleExists
     * @return \DdD\Sale\Status
     */
    public function setSaleExists($SaleExists)
    {
      $this->SaleExists = $SaleExists;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaved()
    {
      return $this->Saved;
    }

    /**
     * @param boolean $Saved
     * @return \DdD\Sale\Status
     */
    public function setSaved($Saved)
    {
      $this->Saved = $Saved;
      return $this;
    }

}
