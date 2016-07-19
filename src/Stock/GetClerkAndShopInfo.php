<?php

namespace DdD\Stock;

class GetClerkAndShopInfo
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var boolean $onlyShopInfo
     */
    protected $onlyShopInfo = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param boolean $onlyShopInfo
     * @param string $psk
     */
    public function __construct($clientid, $onlyShopInfo, $psk)
    {
      $this->clientid = $clientid;
      $this->onlyShopInfo = $onlyShopInfo;
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
     * @return \DdD\Stock\GetClerkAndShopInfo
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyShopInfo()
    {
      return $this->onlyShopInfo;
    }

    /**
     * @param boolean $onlyShopInfo
     * @return \DdD\Stock\GetClerkAndShopInfo
     */
    public function setOnlyShopInfo($onlyShopInfo)
    {
      $this->onlyShopInfo = $onlyShopInfo;
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
     * @return \DdD\Stock\GetClerkAndShopInfo
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
