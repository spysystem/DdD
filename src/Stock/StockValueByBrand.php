<?php

namespace DdD\\Stock;

class StockValueByBrand
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var int $brandOrSupplier
     */
    protected $brandOrSupplier = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param \DateTime $date
     * @param int $brandOrSupplier
     * @param string $psk
     */
    public function __construct($clientid, \DateTime $date, $brandOrSupplier, $psk)
    {
      $this->clientid = $clientid;
      $this->date = $date->format(\DateTime::ATOM);
      $this->brandOrSupplier = $brandOrSupplier;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClientid()
    {
      return $this->clientid;
    }

    /**
     * @param int $clientid
     * @return \DdD\\Stock\StockValueByBrand
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
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
     * @return \DdD\\Stock\StockValueByBrand
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandOrSupplier()
    {
      return $this->brandOrSupplier;
    }

    /**
     * @param int $brandOrSupplier
     * @return \DdD\\Stock\StockValueByBrand
     */
    public function setBrandOrSupplier($brandOrSupplier)
    {
      $this->brandOrSupplier = $brandOrSupplier;
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
     * @return \DdD\\Stock\StockValueByBrand
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
