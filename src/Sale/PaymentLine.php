<?php

namespace DdD\Sale;

class PaymentLine
{

    /**
     * @var int $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var int $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $GiftCertificate
     */
    protected $GiftCertificate = null;

    /**
     * @var float $LineAmount
     */
    protected $LineAmount = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var PaymentLineType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param int $CardNumber
     * @return \DdD\Sale\PaymentLine
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param int $CurrencyCode
     * @return \DdD\Sale\PaymentLine
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \DdD\Sale\PaymentLine
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
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
     * @return \DdD\Sale\PaymentLine
     */
    public function setGiftCertificate($GiftCertificate)
    {
      $this->GiftCertificate = $GiftCertificate;
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
     * @return \DdD\Sale\PaymentLine
     */
    public function setLineAmount($LineAmount)
    {
      $this->LineAmount = $LineAmount;
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
     * @return \DdD\Sale\PaymentLine
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
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
     * @return \DdD\Sale\PaymentLine
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
     * @return PaymentLineType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PaymentLineType $Type
     * @return \DdD\Sale\PaymentLine
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
