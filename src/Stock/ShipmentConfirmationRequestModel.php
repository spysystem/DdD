<?php

namespace DdD\\Stock;

class ShipmentConfirmationRequestModel
{

    /**
     * @var \DateTime $ConfirmationStart
     */
    protected $ConfirmationStart = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var int $StoreNo
     */
    protected $StoreNo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getConfirmationStart()
    {
      if ($this->ConfirmationStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ConfirmationStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ConfirmationStart
     * @return \DdD\\Stock\ShipmentConfirmationRequestModel
     */
    public function setConfirmationStart(\DateTime $ConfirmationStart = null)
    {
      if ($ConfirmationStart == null) {
       $this->ConfirmationStart = null;
      } else {
        $this->ConfirmationStart = $ConfirmationStart->format(\DateTime::ATOM);
      }
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
     * @return \DdD\\Stock\ShipmentConfirmationRequestModel
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreNo()
    {
      return $this->StoreNo;
    }

    /**
     * @param int $StoreNo
     * @return \DdD\\Stock\ShipmentConfirmationRequestModel
     */
    public function setStoreNo($StoreNo)
    {
      $this->StoreNo = $StoreNo;
      return $this;
    }

}
