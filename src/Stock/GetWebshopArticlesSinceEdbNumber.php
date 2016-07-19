<?php

namespace DdD\Stock;

class GetWebshopArticlesSinceEdbNumber
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var int $shopId
     */
    protected $shopId = null;

    /**
     * @var int $edbnumber
     */
    protected $edbnumber = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param int $shopId
     * @param int $edbnumber
     * @param string $psk
     */
    public function __construct($clientid, $shopId, $edbnumber, $psk)
    {
      $this->clientid = $clientid;
      $this->shopId = $shopId;
      $this->edbnumber = $edbnumber;
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
     * @return \DdD\Stock\GetWebshopArticlesSinceEdbNumber
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
      return $this;
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
     * @return \DdD\Stock\GetWebshopArticlesSinceEdbNumber
     */
    public function setShopId($shopId)
    {
      $this->shopId = $shopId;
      return $this;
    }

    /**
     * @return int
     */
    public function getEdbnumber()
    {
      return $this->edbnumber;
    }

    /**
     * @param int $edbnumber
     * @return \DdD\Stock\GetWebshopArticlesSinceEdbNumber
     */
    public function setEdbnumber($edbnumber)
    {
      $this->edbnumber = $edbnumber;
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
     * @return \DdD\Stock\GetWebshopArticlesSinceEdbNumber
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
