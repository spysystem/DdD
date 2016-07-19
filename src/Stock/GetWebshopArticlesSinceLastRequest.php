<?php

namespace DdD\\Stock;

class GetWebshopArticlesSinceLastRequest
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
     * @var boolean $deleteChanges
     */
    protected $deleteChanges = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param int $shopid
     * @param boolean $deleteChanges
     * @param string $psk
     */
    public function __construct($clientid, $shopid, $deleteChanges, $psk)
    {
      $this->clientid = $clientid;
      $this->shopid = $shopid;
      $this->deleteChanges = $deleteChanges;
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
     * @return \DdD\\Stock\GetWebshopArticlesSinceLastRequest
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
     * @return \DdD\\Stock\GetWebshopArticlesSinceLastRequest
     */
    public function setShopid($shopid)
    {
      $this->shopid = $shopid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteChanges()
    {
      return $this->deleteChanges;
    }

    /**
     * @param boolean $deleteChanges
     * @return \DdD\\Stock\GetWebshopArticlesSinceLastRequest
     */
    public function setDeleteChanges($deleteChanges)
    {
      $this->deleteChanges = $deleteChanges;
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
     * @return \DdD\\Stock\GetWebshopArticlesSinceLastRequest
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
