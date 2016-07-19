<?php

namespace DdD\\Sale;

class TransactionRow
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
     * @var int $ClerkOrUser
     */
    protected $ClerkOrUser = null;

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var float $CostPrice
     */
    protected $CostPrice = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var int $CustomersClubNo
     */
    protected $CustomersClubNo = null;

    /**
     * @var int $DebtorNo
     */
    protected $DebtorNo = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var int $DiscountCode
     */
    protected $DiscountCode = null;

    /**
     * @var int $Ean
     */
    protected $Ean = null;

    /**
     * @var float $ExchangeRateToEuro
     */
    protected $ExchangeRateToEuro = null;

    /**
     * @var float $ExchangeRateToOwnCurrency
     */
    protected $ExchangeRateToOwnCurrency = null;

    /**
     * @var int $GiftVoucherAlternativeNo
     */
    protected $GiftVoucherAlternativeNo = null;

    /**
     * @var string $GiftVoucherAutoNo
     */
    protected $GiftVoucherAutoNo = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var string $ItemGroupDescription
     */
    protected $ItemGroupDescription = null;

    /**
     * @var int $ItemGroupNo
     */
    protected $ItemGroupNo = null;

    /**
     * @var int $MachineOrCashRegister
     */
    protected $MachineOrCashRegister = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $ReceiptNo
     */
    protected $ReceiptNo = null;

    /**
     * @var int $ReceivingClientNoItemTransfer
     */
    protected $ReceivingClientNoItemTransfer = null;

    /**
     * @var int $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var TransactionRowType $RowType
     */
    protected $RowType = null;

    /**
     * @var int $RowTypeAsInt
     */
    protected $RowTypeAsInt = null;

    /**
     * @var float $SalesPrice
     */
    protected $SalesPrice = null;

    /**
     * @var string $SupplierAccountNo
     */
    protected $SupplierAccountNo = null;

    /**
     * @var string $SupplierDescription
     */
    protected $SupplierDescription = null;

    /**
     * @var int $SupplierNo
     */
    protected $SupplierNo = null;

    /**
     * @var string $SupplierOrderNo
     */
    protected $SupplierOrderNo = null;

    /**
     * @var duration $Time
     */
    protected $Time = null;

    /**
     * @var int $TransactionNo
     */
    protected $TransactionNo = null;

    /**
     * @var int $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var int $UniqueItemNo
     */
    protected $UniqueItemNo = null;

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
     * @var float $Vat
     */
    protected $Vat = null;

    /**
     * @var int $VirtualItemNo
     */
    protected $VirtualItemNo = null;

    /**
     * @var float $WholeSalePrice
     */
    protected $WholeSalePrice = null;

    
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
     */
    public function setCatalogueParameter5($CatalogueParameter5)
    {
      $this->CatalogueParameter5 = $CatalogueParameter5;
      return $this;
    }

    /**
     * @return int
     */
    public function getClerkOrUser()
    {
      return $this->ClerkOrUser;
    }

    /**
     * @param int $ClerkOrUser
     * @return \DdD\\Sale\TransactionRow
     */
    public function setClerkOrUser($ClerkOrUser)
    {
      $this->ClerkOrUser = $ClerkOrUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \DdD\\Sale\TransactionRow
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPrice()
    {
      return $this->CostPrice;
    }

    /**
     * @param float $CostPrice
     * @return \DdD\\Sale\TransactionRow
     */
    public function setCostPrice($CostPrice)
    {
      $this->CostPrice = $CostPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \DdD\\Sale\TransactionRow
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomersClubNo()
    {
      return $this->CustomersClubNo;
    }

    /**
     * @param int $CustomersClubNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setCustomersClubNo($CustomersClubNo)
    {
      $this->CustomersClubNo = $CustomersClubNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getDebtorNo()
    {
      return $this->DebtorNo;
    }

    /**
     * @param int $DebtorNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setDebtorNo($DebtorNo)
    {
      $this->DebtorNo = $DebtorNo;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return \DdD\\Sale\TransactionRow
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDiscountCode()
    {
      return $this->DiscountCode;
    }

    /**
     * @param int $DiscountCode
     * @return \DdD\\Sale\TransactionRow
     */
    public function setDiscountCode($DiscountCode)
    {
      $this->DiscountCode = $DiscountCode;
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
     * @return \DdD\\Sale\TransactionRow
     */
    public function setEan($Ean)
    {
      $this->Ean = $Ean;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRateToEuro()
    {
      return $this->ExchangeRateToEuro;
    }

    /**
     * @param float $ExchangeRateToEuro
     * @return \DdD\\Sale\TransactionRow
     */
    public function setExchangeRateToEuro($ExchangeRateToEuro)
    {
      $this->ExchangeRateToEuro = $ExchangeRateToEuro;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRateToOwnCurrency()
    {
      return $this->ExchangeRateToOwnCurrency;
    }

    /**
     * @param float $ExchangeRateToOwnCurrency
     * @return \DdD\\Sale\TransactionRow
     */
    public function setExchangeRateToOwnCurrency($ExchangeRateToOwnCurrency)
    {
      $this->ExchangeRateToOwnCurrency = $ExchangeRateToOwnCurrency;
      return $this;
    }

    /**
     * @return int
     */
    public function getGiftVoucherAlternativeNo()
    {
      return $this->GiftVoucherAlternativeNo;
    }

    /**
     * @param int $GiftVoucherAlternativeNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setGiftVoucherAlternativeNo($GiftVoucherAlternativeNo)
    {
      $this->GiftVoucherAlternativeNo = $GiftVoucherAlternativeNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftVoucherAutoNo()
    {
      return $this->GiftVoucherAutoNo;
    }

    /**
     * @param string $GiftVoucherAutoNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setGiftVoucherAutoNo($GiftVoucherAutoNo)
    {
      $this->GiftVoucherAutoNo = $GiftVoucherAutoNo;
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
     * @return \DdD\\Sale\TransactionRow
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemGroupDescription()
    {
      return $this->ItemGroupDescription;
    }

    /**
     * @param string $ItemGroupDescription
     * @return \DdD\\Sale\TransactionRow
     */
    public function setItemGroupDescription($ItemGroupDescription)
    {
      $this->ItemGroupDescription = $ItemGroupDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemGroupNo()
    {
      return $this->ItemGroupNo;
    }

    /**
     * @param int $ItemGroupNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setItemGroupNo($ItemGroupNo)
    {
      $this->ItemGroupNo = $ItemGroupNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getMachineOrCashRegister()
    {
      return $this->MachineOrCashRegister;
    }

    /**
     * @param int $MachineOrCashRegister
     * @return \DdD\\Sale\TransactionRow
     */
    public function setMachineOrCashRegister($MachineOrCashRegister)
    {
      $this->MachineOrCashRegister = $MachineOrCashRegister;
      return $this;
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
     * @return \DdD\\Sale\TransactionRow
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceiptNo()
    {
      return $this->ReceiptNo;
    }

    /**
     * @param int $ReceiptNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setReceiptNo($ReceiptNo)
    {
      $this->ReceiptNo = $ReceiptNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceivingClientNoItemTransfer()
    {
      return $this->ReceivingClientNoItemTransfer;
    }

    /**
     * @param int $ReceivingClientNoItemTransfer
     * @return \DdD\\Sale\TransactionRow
     */
    public function setReceivingClientNoItemTransfer($ReceivingClientNoItemTransfer)
    {
      $this->ReceivingClientNoItemTransfer = $ReceivingClientNoItemTransfer;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnCode()
    {
      return $this->ReturnCode;
    }

    /**
     * @param int $ReturnCode
     * @return \DdD\\Sale\TransactionRow
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return TransactionRowType
     */
    public function getRowType()
    {
      return $this->RowType;
    }

    /**
     * @param TransactionRowType $RowType
     * @return \DdD\\Sale\TransactionRow
     */
    public function setRowType($RowType)
    {
      $this->RowType = $RowType;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowTypeAsInt()
    {
      return $this->RowTypeAsInt;
    }

    /**
     * @param int $RowTypeAsInt
     * @return \DdD\\Sale\TransactionRow
     */
    public function setRowTypeAsInt($RowTypeAsInt)
    {
      $this->RowTypeAsInt = $RowTypeAsInt;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPrice()
    {
      return $this->SalesPrice;
    }

    /**
     * @param float $SalesPrice
     * @return \DdD\\Sale\TransactionRow
     */
    public function setSalesPrice($SalesPrice)
    {
      $this->SalesPrice = $SalesPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierAccountNo()
    {
      return $this->SupplierAccountNo;
    }

    /**
     * @param string $SupplierAccountNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setSupplierAccountNo($SupplierAccountNo)
    {
      $this->SupplierAccountNo = $SupplierAccountNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierDescription()
    {
      return $this->SupplierDescription;
    }

    /**
     * @param string $SupplierDescription
     * @return \DdD\\Sale\TransactionRow
     */
    public function setSupplierDescription($SupplierDescription)
    {
      $this->SupplierDescription = $SupplierDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierNo()
    {
      return $this->SupplierNo;
    }

    /**
     * @param int $SupplierNo
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
     */
    public function setSupplierOrderNo($SupplierOrderNo)
    {
      $this->SupplierOrderNo = $SupplierOrderNo;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param duration $Time
     * @return \DdD\\Sale\TransactionRow
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionNo()
    {
      return $this->TransactionNo;
    }

    /**
     * @param int $TransactionNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setTransactionNo($TransactionNo)
    {
      $this->TransactionNo = $TransactionNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param int $TransactionType
     * @return \DdD\\Sale\TransactionRow
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueItemNo()
    {
      return $this->UniqueItemNo;
    }

    /**
     * @param int $UniqueItemNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setUniqueItemNo($UniqueItemNo)
    {
      $this->UniqueItemNo = $UniqueItemNo;
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
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
     * @return \DdD\\Sale\TransactionRow
     */
    public function setVariantParameter5($VariantParameter5)
    {
      $this->VariantParameter5 = $VariantParameter5;
      return $this;
    }

    /**
     * @return float
     */
    public function getVat()
    {
      return $this->Vat;
    }

    /**
     * @param float $Vat
     * @return \DdD\\Sale\TransactionRow
     */
    public function setVat($Vat)
    {
      $this->Vat = $Vat;
      return $this;
    }

    /**
     * @return int
     */
    public function getVirtualItemNo()
    {
      return $this->VirtualItemNo;
    }

    /**
     * @param int $VirtualItemNo
     * @return \DdD\\Sale\TransactionRow
     */
    public function setVirtualItemNo($VirtualItemNo)
    {
      $this->VirtualItemNo = $VirtualItemNo;
      return $this;
    }

    /**
     * @return float
     */
    public function getWholeSalePrice()
    {
      return $this->WholeSalePrice;
    }

    /**
     * @param float $WholeSalePrice
     * @return \DdD\\Sale\TransactionRow
     */
    public function setWholeSalePrice($WholeSalePrice)
    {
      $this->WholeSalePrice = $WholeSalePrice;
      return $this;
    }

}
