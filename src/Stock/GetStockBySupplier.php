<?php

namespace DdD\\Stock;

class GetStockBySupplier
{

    /**
     * @var int $shopId
     */
    protected $shopId = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var int $supplierId
     */
    protected $supplierId = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $shopId
     * @param \DateTime $date
     * @param int $supplierId
     * @param string $psk
     */
    public function __construct($shopId, \DateTime $date, $supplierId, $psk)
    {
      $this->shopId = $shopId;
      $this->date = $date->format(\DateTime::ATOM);
      $this->supplierId = $supplierId;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
      return $this->shopId;
    }

    /**
     * @param int $shopId
     * @return \DdD\\Stock\GetStockBySupplier
     */
    public function setShopId($shopId)
    {
      $this->shopId = $shopId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \DdD\\Stock\GetStockBySupplier
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId()
    {
      return $this->supplierId;
    }

    /**
     * @param int $supplierId
     * @return \DdD\\Stock\GetStockBySupplier
     */
    public function setSupplierId($supplierId)
    {
      $this->supplierId = $supplierId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPsk()
    {
      return $this->psk;
    }

    /**
     * @param string $psk
     * @return \DdD\\Stock\GetStockBySupplier
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
