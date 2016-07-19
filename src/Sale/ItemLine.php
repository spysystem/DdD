<?php

namespace DdD\Sale;

class ItemLine
{

    /**
     * @var int $BarcodeUsed
     */
    protected $BarcodeUsed = null;

    /**
     * @var float $CostPrice
     */
    protected $CostPrice = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var int $DiscountCode
     */
    protected $DiscountCode = null;

    /**
     * @var int $EDBNumber
     */
    protected $EDBNumber = null;

    /**
     * @var string $GiftCertificate
     */
    protected $GiftCertificate = null;

    /**
     * @var int $ItemGroup
     */
    protected $ItemGroup = null;

    /**
     * @var float $LineAmount
     */
    protected $LineAmount = null;

    /**
     * @var float $LoyaltyMoneyUsed
     */
    protected $LoyaltyMoneyUsed = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var int $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var int $Supplier
     */
    protected $Supplier = null;

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var string $TransferToStore
     */
    protected $TransferToStore = null;

    /**
     * @var ItemLineType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBarcodeUsed()
    {
      return $this->BarcodeUsed;
    }

    /**
     * @param int $BarcodeUsed
     * @return \DdD\Sale\ItemLine
     */
    public function setBarcodeUsed($BarcodeUsed)
    {
      $this->BarcodeUsed = $BarcodeUsed;
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
     * @return \DdD\Sale\ItemLine
     */
    public function setCostPrice($CostPrice)
    {
      $this->CostPrice = $CostPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \DdD\Sale\ItemLine
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountAmount
     * @return \DdD\Sale\ItemLine
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
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
     * @return \DdD\Sale\ItemLine
     */
    public function setDiscountCode($DiscountCode)
    {
      $this->DiscountCode = $DiscountCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getEDBNumber()
    {
      return $this->EDBNumber;
    }

    /**
     * @param int $EDBNumber
     * @return \DdD\Sale\ItemLine
     */
    public function setEDBNumber($EDBNumber)
    {
      $this->EDBNumber = $EDBNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertificate()
    {
      return $this->GiftCertificate;
    }

    /**
     * @param string $GiftCertificate
     * @return \DdD\Sale\ItemLine
     */
    public function setGiftCertificate($GiftCertificate)
    {
      $this->GiftCertificate = $GiftCertificate;
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
     * @return \DdD\Sale\ItemLine
     */
    public function setItemGroup($ItemGroup)
    {
      $this->ItemGroup = $ItemGroup;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineAmount()
    {
      return $this->LineAmount;
    }

    /**
     * @param float $LineAmount
     * @return \DdD\Sale\ItemLine
     */
    public function setLineAmount($LineAmount)
    {
      $this->LineAmount = $LineAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoyaltyMoneyUsed()
    {
      return $this->LoyaltyMoneyUsed;
    }

    /**
     * @param float $LoyaltyMoneyUsed
     * @return \DdD\Sale\ItemLine
     */
    public function setLoyaltyMoneyUsed($LoyaltyMoneyUsed)
    {
      $this->LoyaltyMoneyUsed = $LoyaltyMoneyUsed;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param float $Qty
     * @return \DdD\Sale\ItemLine
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
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
     * @return \DdD\Sale\ItemLine
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
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
     * @return \DdD\Sale\ItemLine
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
      if ($this->Time == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Time);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Time
     * @return \DdD\Sale\ItemLine
     */
    public function setTime(\DateTime $Time = null)
    {
      if ($Time == null) {
       $this->Time = null;
      } else {
        $this->Time = $Time->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferToStore()
    {
      return $this->TransferToStore;
    }

    /**
     * @param string $TransferToStore
     * @return \DdD\Sale\ItemLine
     */
    public function setTransferToStore($TransferToStore)
    {
      $this->TransferToStore = $TransferToStore;
      return $this;
    }

    /**
     * @return ItemLineType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ItemLineType $Type
     * @return \DdD\Sale\ItemLine
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
