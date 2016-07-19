<?php

namespace DdD\\Sale;

class WebOrder
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var int $Direction
     */
    protected $Direction = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var int $Ean
     */
    protected $Ean = null;

    /**
     * @var boolean $IsPaid
     */
    protected $IsPaid = null;

    /**
     * @var \DateTime $LastPickupDate
     */
    protected $LastPickupDate = null;

    /**
     * @var \DateTime $OrderDate
     */
    protected $OrderDate = null;

    /**
     * @var string $OrderReferenceId
     */
    protected $OrderReferenceId = null;

    /**
     * @var int $Qty
     */
    protected $Qty = null;

    /**
     * @var int $QtyDelivered
     */
    protected $QtyDelivered = null;

    /**
     * @var int $Reserved
     */
    protected $Reserved = null;

    /**
     * @var float $Salesprice
     */
    protected $Salesprice = null;

    /**
     * @var int $ShopId
     */
    protected $ShopId = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \DdD\\Sale\WebOrder
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return \DdD\\Sale\WebOrder
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return \DdD\\Sale\WebOrder
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param int $Direction
     * @return \DdD\\Sale\WebOrder
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
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
     * @return \DdD\\Sale\WebOrder
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
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
     * @return \DdD\\Sale\WebOrder
     */
    public function setEan($Ean)
    {
      $this->Ean = $Ean;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPaid()
    {
      return $this->IsPaid;
    }

    /**
     * @param boolean $IsPaid
     * @return \DdD\\Sale\WebOrder
     */
    public function setIsPaid($IsPaid)
    {
      $this->IsPaid = $IsPaid;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPickupDate()
    {
      if ($this->LastPickupDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPickupDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPickupDate
     * @return \DdD\\Sale\WebOrder
     */
    public function setLastPickupDate(\DateTime $LastPickupDate = null)
    {
      if ($LastPickupDate == null) {
       $this->LastPickupDate = null;
      } else {
        $this->LastPickupDate = $LastPickupDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
      if ($this->OrderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderDate
     * @return \DdD\\Sale\WebOrder
     */
    public function setOrderDate(\DateTime $OrderDate = null)
    {
      if ($OrderDate == null) {
       $this->OrderDate = null;
      } else {
        $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderReferenceId()
    {
      return $this->OrderReferenceId;
    }

    /**
     * @param string $OrderReferenceId
     * @return \DdD\\Sale\WebOrder
     */
    public function setOrderReferenceId($OrderReferenceId)
    {
      $this->OrderReferenceId = $OrderReferenceId;
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
     * @return \DdD\\Sale\WebOrder
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
    }

    /**
     * @return int
     */
    public function getQtyDelivered()
    {
      return $this->QtyDelivered;
    }

    /**
     * @param int $QtyDelivered
     * @return \DdD\\Sale\WebOrder
     */
    public function setQtyDelivered($QtyDelivered)
    {
      $this->QtyDelivered = $QtyDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getReserved()
    {
      return $this->Reserved;
    }

    /**
     * @param int $Reserved
     * @return \DdD\\Sale\WebOrder
     */
    public function setReserved($Reserved)
    {
      $this->Reserved = $Reserved;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesprice()
    {
      return $this->Salesprice;
    }

    /**
     * @param float $Salesprice
     * @return \DdD\\Sale\WebOrder
     */
    public function setSalesprice($Salesprice)
    {
      $this->Salesprice = $Salesprice;
      return $this;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
      return $this->ShopId;
    }

    /**
     * @param int $ShopId
     * @return \DdD\\Sale\WebOrder
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \DdD\\Sale\WebOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
