<?php

namespace DdD\Stock;

class GetWebshopArticlesFilterByShopId
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var int $shopid
     */
    protected $shopid = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param int $shopid
     * @param string $psk
     */
    public function __construct($clientid, $shopid, $psk)
    {
      $this->clientid = $clientid;
      $this->shopid = $shopid;
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
     * @return \DdD\Stock\GetWebshopArticlesFilterByShopId
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
      return $this;
    }

    /**
     * @return int
     */
    public function getShopid()
    {
      return $this->shopid;
    }

    /**
     * @param int $shopid
     * @return \DdD\Stock\GetWebshopArticlesFilterByShopId
     */
    public function setShopid($shopid)
    {
      $this->shopid = $shopid;
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
     * @return \DdD\Stock\GetWebshopArticlesFilterByShopId
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
