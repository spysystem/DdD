<?php

namespace DdD\Stock;

class SimpleShopStockInfo
{

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $StockValue
     */
    protected $StockValue = null;

    /**
     * @var int $StoreNumber
     */
    protected $StoreNumber = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var int $SupplierNumber
     */
    protected $SupplierNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \DdD\Stock\SimpleShopStockInfo
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getStockValue()
    {
      return $this->StockValue;
    }

    /**
     * @param float $StockValue
     * @return \DdD\Stock\SimpleShopStockInfo
     */
    public function setStockValue($StockValue)
    {
      $this->StockValue = $StockValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreNumber()
    {
      return $this->StoreNumber;
    }

    /**
     * @param int $StoreNumber
     * @return \DdD\Stock\SimpleShopStockInfo
     */
    public function setStoreNumber($StoreNumber)
    {
      $this->StoreNumber = $StoreNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return \DdD\Stock\SimpleShopStockInfo
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierNumber()
    {
      return $this->SupplierNumber;
    }

    /**
     * @param int $SupplierNumber
     * @return \DdD\Stock\SimpleShopStockInfo
     */
    public function setSupplierNumber($SupplierNumber)
    {
      $this->SupplierNumber = $SupplierNumber;
      return $this;
    }

}
