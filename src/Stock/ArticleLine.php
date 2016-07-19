<?php

namespace DdD\\Stock;

class ArticleLine
{

    /**
     * @var float $CostpriceEach
     */
    protected $CostpriceEach = null;

    /**
     * @var int $Ean
     */
    protected $Ean = null;

    /**
     * @var int $EdbNumber
     */
    protected $EdbNumber = null;

    /**
     * @var int $ItemGroup
     */
    protected $ItemGroup = null;

    /**
     * @var string $ItemGroupName
     */
    protected $ItemGroupName = null;

    /**
     * @var int $KatalogNumber
     */
    protected $KatalogNumber = null;

    /**
     * @var string $Kparam1
     */
    protected $Kparam1 = null;

    /**
     * @var string $Kparam2
     */
    protected $Kparam2 = null;

    /**
     * @var string $Kparam3
     */
    protected $Kparam3 = null;

    /**
     * @var string $Kparam4
     */
    protected $Kparam4 = null;

    /**
     * @var string $Kparam5
     */
    protected $Kparam5 = null;

    /**
     * @var int $Qty
     */
    protected $Qty = null;

    /**
     * @var float $SalesPriceEach
     */
    protected $SalesPriceEach = null;

    /**
     * @var int $Supplier
     */
    protected $Supplier = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var string $Vparam1
     */
    protected $Vparam1 = null;

    /**
     * @var string $Vparam2
     */
    protected $Vparam2 = null;

    /**
     * @var string $Vparam3
     */
    protected $Vparam3 = null;

    /**
     * @var string $Vparam4
     */
    protected $Vparam4 = null;

    /**
     * @var string $Vparam5
     */
    protected $Vparam5 = null;

    /**
     * @var string $WebshopDescription
     */
    protected $WebshopDescription = null;

    /**
     * @var float $WholeSaleCostpriceEach
     */
    protected $WholeSaleCostpriceEach = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getCostpriceEach()
    {
      return $this->CostpriceEach;
    }

    /**
     * @param float $CostpriceEach
     * @return \DdD\\Stock\ArticleLine
     */
    public function setCostpriceEach($CostpriceEach)
    {
      $this->CostpriceEach = $CostpriceEach;
      return $this;
    }

    /**
     * @return int
     */
    public function getEan()
    {
      return $this->Ean;
    }

    /**
     * @param int $Ean
     * @return \DdD\\Stock\ArticleLine
     */
    public function setEan($Ean)
    {
      $this->Ean = $Ean;
      return $this;
    }

    /**
     * @return int
     */
    public function getEdbNumber()
    {
      return $this->EdbNumber;
    }

    /**
     * @param int $EdbNumber
     * @return \DdD\\Stock\ArticleLine
     */
    public function setEdbNumber($EdbNumber)
    {
      $this->EdbNumber = $EdbNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemGroup()
    {
      return $this->ItemGroup;
    }

    /**
     * @param int $ItemGroup
     * @return \DdD\\Stock\ArticleLine
     */
    public function setItemGroup($ItemGroup)
    {
      $this->ItemGroup = $ItemGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemGroupName()
    {
      return $this->ItemGroupName;
    }

    /**
     * @param string $ItemGroupName
     * @return \DdD\\Stock\ArticleLine
     */
    public function setItemGroupName($ItemGroupName)
    {
      $this->ItemGroupName = $ItemGroupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getKatalogNumber()
    {
      return $this->KatalogNumber;
    }

    /**
     * @param int $KatalogNumber
     * @return \DdD\\Stock\ArticleLine
     */
    public function setKatalogNumber($KatalogNumber)
    {
      $this->KatalogNumber = $KatalogNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getKparam1()
    {
      return $this->Kparam1;
    }

    /**
     * @param string $Kparam1
     * @return \DdD\\Stock\ArticleLine
     */
    public function setKparam1($Kparam1)
    {
      $this->Kparam1 = $Kparam1;
      return $this;
    }

    /**
     * @return string
     */
    public function getKparam2()
    {
      return $this->Kparam2;
    }

    /**
     * @param string $Kparam2
     * @return \DdD\\Stock\ArticleLine
     */
    public function setKparam2($Kparam2)
    {
      $this->Kparam2 = $Kparam2;
      return $this;
    }

    /**
     * @return string
     */
    public function getKparam3()
    {
      return $this->Kparam3;
    }

    /**
     * @param string $Kparam3
     * @return \DdD\\Stock\ArticleLine
     */
    public function setKparam3($Kparam3)
    {
      $this->Kparam3 = $Kparam3;
      return $this;
    }

    /**
     * @return string
     */
    public function getKparam4()
    {
      return $this->Kparam4;
    }

    /**
     * @param string $Kparam4
     * @return \DdD\\Stock\ArticleLine
     */
    public function setKparam4($Kparam4)
    {
      $this->Kparam4 = $Kparam4;
      return $this;
    }

    /**
     * @return string
     */
    public function getKparam5()
    {
      return $this->Kparam5;
    }

    /**
     * @param string $Kparam5
     * @return \DdD\\Stock\ArticleLine
     */
    public function setKparam5($Kparam5)
    {
      $this->Kparam5 = $Kparam5;
      return $this;
    }

    /**
     * @return int
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param int $Qty
     * @return \DdD\\Stock\ArticleLine
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPriceEach()
    {
      return $this->SalesPriceEach;
    }

    /**
     * @param float $SalesPriceEach
     * @return \DdD\\Stock\ArticleLine
     */
    public function setSalesPriceEach($SalesPriceEach)
    {
      $this->SalesPriceEach = $SalesPriceEach;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param int $Supplier
     * @return \DdD\\Stock\ArticleLine
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return \DdD\\Stock\ArticleLine
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVparam1()
    {
      return $this->Vparam1;
    }

    /**
     * @param string $Vparam1
     * @return \DdD\\Stock\ArticleLine
     */
    public function setVparam1($Vparam1)
    {
      $this->Vparam1 = $Vparam1;
      return $this;
    }

    /**
     * @return string
     */
    public function getVparam2()
    {
      return $this->Vparam2;
    }

    /**
     * @param string $Vparam2
     * @return \DdD\\Stock\ArticleLine
     */
    public function setVparam2($Vparam2)
    {
      $this->Vparam2 = $Vparam2;
      return $this;
    }

    /**
     * @return string
     */
    public function getVparam3()
    {
      return $this->Vparam3;
    }

    /**
     * @param string $Vparam3
     * @return \DdD\\Stock\ArticleLine
     */
    public function setVparam3($Vparam3)
    {
      $this->Vparam3 = $Vparam3;
      return $this;
    }

    /**
     * @return string
     */
    public function getVparam4()
    {
      return $this->Vparam4;
    }

    /**
     * @param string $Vparam4
     * @return \DdD\\Stock\ArticleLine
     */
    public function setVparam4($Vparam4)
    {
      $this->Vparam4 = $Vparam4;
      return $this;
    }

    /**
     * @return string
     */
    public function getVparam5()
    {
      return $this->Vparam5;
    }

    /**
     * @param string $Vparam5
     * @return \DdD\\Stock\ArticleLine
     */
    public function setVparam5($Vparam5)
    {
      $this->Vparam5 = $Vparam5;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebshopDescription()
    {
      return $this->WebshopDescription;
    }

    /**
     * @param string $WebshopDescription
     * @return \DdD\\Stock\ArticleLine
     */
    public function setWebshopDescription($WebshopDescription)
    {
      $this->WebshopDescription = $WebshopDescription;
      return $this;
    }

    /**
     * @return float
     */
    public function getWholeSaleCostpriceEach()
    {
      return $this->WholeSaleCostpriceEach;
    }

    /**
     * @param float $WholeSaleCostpriceEach
     * @return \DdD\\Stock\ArticleLine
     */
    public function setWholeSaleCostpriceEach($WholeSaleCostpriceEach)
    {
      $this->WholeSaleCostpriceEach = $WholeSaleCostpriceEach;
      return $this;
    }

}
