<?php

namespace DdD\\Stock;

class Confirmation
{

    /**
     * @var ArrayOfConfirmationItem $ConfirmationItems
     */
    protected $ConfirmationItems = null;

    /**
     * @var \DateTime $GoodsReceptionEnd
     */
    protected $GoodsReceptionEnd = null;

    /**
     * @var \DateTime $GoodsReceptionStart
     */
    protected $GoodsReceptionStart = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var ConfirmationStatus $StatusType
     */
    protected $StatusType = null;

    /**
     * @var int $StoreNo
     */
    protected $StoreNo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfConfirmationItem
     */
    public function getConfirmationItems()
    {
      return $this->ConfirmationItems;
    }

    /**
     * @param ArrayOfConfirmationItem $ConfirmationItems
     * @return \DdD\\Stock\Confirmation
     */
    public function setConfirmationItems($ConfirmationItems)
    {
      $this->ConfirmationItems = $ConfirmationItems;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGoodsReceptionEnd()
    {
      if ($this->GoodsReceptionEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GoodsReceptionEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GoodsReceptionEnd
     * @return \DdD\\Stock\Confirmation
     */
    public function setGoodsReceptionEnd(\DateTime $GoodsReceptionEnd = null)
    {
      if ($GoodsReceptionEnd == null) {
       $this->GoodsReceptionEnd = null;
      } else {
        $this->GoodsReceptionEnd = $GoodsReceptionEnd->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGoodsReceptionStart()
    {
      if ($this->GoodsReceptionStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GoodsReceptionStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GoodsReceptionStart
     * @return \DdD\\Stock\Confirmation
     */
    public function setGoodsReceptionStart(\DateTime $GoodsReceptionStart = null)
    {
      if ($GoodsReceptionStart == null) {
       $this->GoodsReceptionStart = null;
      } else {
        $this->GoodsReceptionStart = $GoodsReceptionStart->format(\DateTime::ATOM);
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
     * @return \DdD\\Stock\Confirmation
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \DdD\\Stock\Confirmation
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return ConfirmationStatus
     */
    public function getStatusType()
    {
      return $this->StatusType;
    }

    /**
     * @param ConfirmationStatus $StatusType
     * @return \DdD\\Stock\Confirmation
     */
    public function setStatusType($StatusType)
    {
      $this->StatusType = $StatusType;
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
     * @return \DdD\\Stock\Confirmation
     */
    public function setStoreNo($StoreNo)
    {
      $this->StoreNo = $StoreNo;
      return $this;
    }

}
