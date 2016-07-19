<?php

namespace DdD\Sale;

class KeyFigures
{

    /**
     * @var float $CashDifference
     */
    protected $CashDifference = null;

    /**
     * @var float $Discounts
     */
    protected $Discounts = null;

    /**
     * @var float $GrossProfit
     */
    protected $GrossProfit = null;

    /**
     * @var float $GrossTurnover
     */
    protected $GrossTurnover = null;

    /**
     * @var int $NumberOfCustomers
     */
    protected $NumberOfCustomers = null;

    /**
     * @var int $NumberOfGoodsSold
     */
    protected $NumberOfGoodsSold = null;

    /**
     * @var int $NumberOfPeople
     */
    protected $NumberOfPeople = null;

    /**
     * @var float $Returned
     */
    protected $Returned = null;

    /**
     * @var int $TerminalNumber
     */
    protected $TerminalNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getCashDifference()
    {
      return $this->CashDifference;
    }

    /**
     * @param float $CashDifference
     * @return \DdD\Sale\KeyFigures
     */
    public function setCashDifference($CashDifference)
    {
      $this->CashDifference = $CashDifference;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscounts()
    {
      return $this->Discounts;
    }

    /**
     * @param float $Discounts
     * @return \DdD\Sale\KeyFigures
     */
    public function setDiscounts($Discounts)
    {
      $this->Discounts = $Discounts;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossProfit()
    {
      return $this->GrossProfit;
    }

    /**
     * @param float $GrossProfit
     * @return \DdD\Sale\KeyFigures
     */
    public function setGrossProfit($GrossProfit)
    {
      $this->GrossProfit = $GrossProfit;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossTurnover()
    {
      return $this->GrossTurnover;
    }

    /**
     * @param float $GrossTurnover
     * @return \DdD\Sale\KeyFigures
     */
    public function setGrossTurnover($GrossTurnover)
    {
      $this->GrossTurnover = $GrossTurnover;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCustomers()
    {
      return $this->NumberOfCustomers;
    }

    /**
     * @param int $NumberOfCustomers
     * @return \DdD\Sale\KeyFigures
     */
    public function setNumberOfCustomers($NumberOfCustomers)
    {
      $this->NumberOfCustomers = $NumberOfCustomers;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfGoodsSold()
    {
      return $this->NumberOfGoodsSold;
    }

    /**
     * @param int $NumberOfGoodsSold
     * @return \DdD\Sale\KeyFigures
     */
    public function setNumberOfGoodsSold($NumberOfGoodsSold)
    {
      $this->NumberOfGoodsSold = $NumberOfGoodsSold;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPeople()
    {
      return $this->NumberOfPeople;
    }

    /**
     * @param int $NumberOfPeople
     * @return \DdD\Sale\KeyFigures
     */
    public function setNumberOfPeople($NumberOfPeople)
    {
      $this->NumberOfPeople = $NumberOfPeople;
      return $this;
    }

    /**
     * @return float
     */
    public function getReturned()
    {
      return $this->Returned;
    }

    /**
     * @param float $Returned
     * @return \DdD\Sale\KeyFigures
     */
    public function setReturned($Returned)
    {
      $this->Returned = $Returned;
      return $this;
    }

    /**
     * @return int
     */
    public function getTerminalNumber()
    {
      return $this->TerminalNumber;
    }

    /**
     * @param int $TerminalNumber
     * @return \DdD\Sale\KeyFigures
     */
    public function setTerminalNumber($TerminalNumber)
    {
      $this->TerminalNumber = $TerminalNumber;
      return $this;
    }

}
