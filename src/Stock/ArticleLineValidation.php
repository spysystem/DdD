<?php

namespace DdD\Stock;

class ArticleLineValidation
{

    /**
     * @var string $CatalogueParameter1
     */
    protected $CatalogueParameter1 = null;

    /**
     * @var string $CatalogueParameter2
     */
    protected $CatalogueParameter2 = null;

    /**
     * @var string $CatalogueParameter3
     */
    protected $CatalogueParameter3 = null;

    /**
     * @var string $CatalogueParameter4
     */
    protected $CatalogueParameter4 = null;

    /**
     * @var string $CatalogueParameter5
     */
    protected $CatalogueParameter5 = null;

    /**
     * @var string $ClientNoRecipient
     */
    protected $ClientNoRecipient = null;

    /**
     * @var string $CostpriceEach
     */
    protected $CostpriceEach = null;

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $Ean
     */
    protected $Ean = null;

    /**
     * @var ArrayOfstring $ErrorDescriptionsCurrentLine
     */
    protected $ErrorDescriptionsCurrentLine = null;

    /**
     * @var boolean $ErrorsInLine
     */
    protected $ErrorsInLine = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var string $ItemgroupDescription
     */
    protected $ItemgroupDescription = null;

    /**
     * @var string $ItemgroupNo
     */
    protected $ItemgroupNo = null;

    /**
     * @var int $LineCount
     */
    protected $LineCount = null;

    /**
     * @var string $OriginalLine
     */
    protected $OriginalLine = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $SalespriceEach
     */
    protected $SalespriceEach = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var string $SupplierNo
     */
    protected $SupplierNo = null;

    /**
     * @var string $SupplierOrderNo
     */
    protected $SupplierOrderNo = null;

    /**
     * @var string $SupplierTelephone
     */
    protected $SupplierTelephone = null;

    /**
     * @var string $VariantParameter1
     */
    protected $VariantParameter1 = null;

    /**
     * @var string $VariantParameter2
     */
    protected $VariantParameter2 = null;

    /**
     * @var string $VariantParameter3
     */
    protected $VariantParameter3 = null;

    /**
     * @var string $VariantParameter4
     */
    protected $VariantParameter4 = null;

    /**
     * @var string $VariantParameter5
     */
    protected $VariantParameter5 = null;

    /**
     * @var ArrayOfstring $WarningDescriptionsCurrentLine
     */
    protected $WarningDescriptionsCurrentLine = null;

    /**
     * @var boolean $WarningsInLine
     */
    protected $WarningsInLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCatalogueParameter1()
    {
      return $this->CatalogueParameter1;
    }

    /**
     * @param string $CatalogueParameter1
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setCatalogueParameter1($CatalogueParameter1)
    {
      $this->CatalogueParameter1 = $CatalogueParameter1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogueParameter2()
    {
      return $this->CatalogueParameter2;
    }

    /**
     * @param string $CatalogueParameter2
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setCatalogueParameter2($CatalogueParameter2)
    {
      $this->CatalogueParameter2 = $CatalogueParameter2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogueParameter3()
    {
      return $this->CatalogueParameter3;
    }

    /**
     * @param string $CatalogueParameter3
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setCatalogueParameter3($CatalogueParameter3)
    {
      $this->CatalogueParameter3 = $CatalogueParameter3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogueParameter4()
    {
      return $this->CatalogueParameter4;
    }

    /**
     * @param string $CatalogueParameter4
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setCatalogueParameter4($CatalogueParameter4)
    {
      $this->CatalogueParameter4 = $CatalogueParameter4;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogueParameter5()
    {
      return $this->CatalogueParameter5;
    }

    /**
     * @param string $CatalogueParameter5
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setCatalogueParameter5($CatalogueParameter5)
    {
      $this->CatalogueParameter5 = $CatalogueParameter5;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientNoRecipient()
    {
      return $this->ClientNoRecipient;
    }

    /**
     * @param string $ClientNoRecipient
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setClientNoRecipient($ClientNoRecipient)
    {
      $this->ClientNoRecipient = $ClientNoRecipient;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostpriceEach()
    {
      return $this->CostpriceEach;
    }

    /**
     * @param string $CostpriceEach
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setCostpriceEach($CostpriceEach)
    {
      $this->CostpriceEach = $CostpriceEach;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
      return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setDeliveryDate($DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
      return $this->Ean;
    }

    /**
     * @param string $Ean
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setEan($Ean)
    {
      $this->Ean = $Ean;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getErrorDescriptionsCurrentLine()
    {
      return $this->ErrorDescriptionsCurrentLine;
    }

    /**
     * @param ArrayOfstring $ErrorDescriptionsCurrentLine
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setErrorDescriptionsCurrentLine($ErrorDescriptionsCurrentLine)
    {
      $this->ErrorDescriptionsCurrentLine = $ErrorDescriptionsCurrentLine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getErrorsInLine()
    {
      return $this->ErrorsInLine;
    }

    /**
     * @param boolean $ErrorsInLine
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setErrorsInLine($ErrorsInLine)
    {
      $this->ErrorsInLine = $ErrorsInLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemgroupDescription()
    {
      return $this->ItemgroupDescription;
    }

    /**
     * @param string $ItemgroupDescription
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setItemgroupDescription($ItemgroupDescription)
    {
      $this->ItemgroupDescription = $ItemgroupDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemgroupNo()
    {
      return $this->ItemgroupNo;
    }

    /**
     * @param string $ItemgroupNo
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setItemgroupNo($ItemgroupNo)
    {
      $this->ItemgroupNo = $ItemgroupNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineCount()
    {
      return $this->LineCount;
    }

    /**
     * @param int $LineCount
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setLineCount($LineCount)
    {
      $this->LineCount = $LineCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalLine()
    {
      return $this->OriginalLine;
    }

    /**
     * @param string $OriginalLine
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setOriginalLine($OriginalLine)
    {
      $this->OriginalLine = $OriginalLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalespriceEach()
    {
      return $this->SalespriceEach;
    }

    /**
     * @param string $SalespriceEach
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setSalespriceEach($SalespriceEach)
    {
      $this->SalespriceEach = $SalespriceEach;
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
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierNo()
    {
      return $this->SupplierNo;
    }

    /**
     * @param string $SupplierNo
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setSupplierNo($SupplierNo)
    {
      $this->SupplierNo = $SupplierNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierOrderNo()
    {
      return $this->SupplierOrderNo;
    }

    /**
     * @param string $SupplierOrderNo
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setSupplierOrderNo($SupplierOrderNo)
    {
      $this->SupplierOrderNo = $SupplierOrderNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierTelephone()
    {
      return $this->SupplierTelephone;
    }

    /**
     * @param string $SupplierTelephone
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setSupplierTelephone($SupplierTelephone)
    {
      $this->SupplierTelephone = $SupplierTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantParameter1()
    {
      return $this->VariantParameter1;
    }

    /**
     * @param string $VariantParameter1
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setVariantParameter1($VariantParameter1)
    {
      $this->VariantParameter1 = $VariantParameter1;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantParameter2()
    {
      return $this->VariantParameter2;
    }

    /**
     * @param string $VariantParameter2
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setVariantParameter2($VariantParameter2)
    {
      $this->VariantParameter2 = $VariantParameter2;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantParameter3()
    {
      return $this->VariantParameter3;
    }

    /**
     * @param string $VariantParameter3
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setVariantParameter3($VariantParameter3)
    {
      $this->VariantParameter3 = $VariantParameter3;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantParameter4()
    {
      return $this->VariantParameter4;
    }

    /**
     * @param string $VariantParameter4
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setVariantParameter4($VariantParameter4)
    {
      $this->VariantParameter4 = $VariantParameter4;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantParameter5()
    {
      return $this->VariantParameter5;
    }

    /**
     * @param string $VariantParameter5
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setVariantParameter5($VariantParameter5)
    {
      $this->VariantParameter5 = $VariantParameter5;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getWarningDescriptionsCurrentLine()
    {
      return $this->WarningDescriptionsCurrentLine;
    }

    /**
     * @param ArrayOfstring $WarningDescriptionsCurrentLine
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setWarningDescriptionsCurrentLine($WarningDescriptionsCurrentLine)
    {
      $this->WarningDescriptionsCurrentLine = $WarningDescriptionsCurrentLine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWarningsInLine()
    {
      return $this->WarningsInLine;
    }

    /**
     * @param boolean $WarningsInLine
     * @return \DdD\Stock\ArticleLineValidation
     */
    public function setWarningsInLine($WarningsInLine)
    {
      $this->WarningsInLine = $WarningsInLine;
      return $this;
    }

}
