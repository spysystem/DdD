<?php

namespace DdD\Sale;

class SaleSum
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var \DateTime $LastSaleChanged
     */
    protected $LastSaleChanged = null;

    /**
     * @var ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 $Sales
     */
    protected $Sales = null;

    /**
     * @var boolean $SumChanged
     */
    protected $SumChanged = null;

    /**
     * @var float $SumTurnover
     */
    protected $SumTurnover = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \DdD\Sale\SaleSum
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastSaleChanged()
    {
      if ($this->LastSaleChanged == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastSaleChanged);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastSaleChanged
     * @return \DdD\Sale\SaleSum
     */
    public function setLastSaleChanged(\DateTime $LastSaleChanged = null)
    {
      if ($LastSaleChanged == null) {
       $this->LastSaleChanged = null;
      } else {
        $this->LastSaleChanged = $LastSaleChanged->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     */
    public function getSales()
    {
      return $this->Sales;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 $Sales
     * @return \DdD\Sale\SaleSum
     */
    public function setSales($Sales)
    {
      $this->Sales = $Sales;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSumChanged()
    {
      return $this->SumChanged;
    }

    /**
     * @param boolean $SumChanged
     * @return \DdD\Sale\SaleSum
     */
    public function setSumChanged($SumChanged)
    {
      $this->SumChanged = $SumChanged;
      return $this;
    }

    /**
     * @return float
     */
    public function getSumTurnover()
    {
      return $this->SumTurnover;
    }

    /**
     * @param float $SumTurnover
     * @return \DdD\Sale\SaleSum
     */
    public function setSumTurnover($SumTurnover)
    {
      $this->SumTurnover = $SumTurnover;
      return $this;
    }

}
