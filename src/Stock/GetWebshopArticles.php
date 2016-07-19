<?php

namespace DdD\\Stock;

class GetWebshopArticles
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param string $psk
     */
    public function __construct($clientid, $psk)
    {
      $this->clientid = $clientid;
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
     * @return \DdD\\Stock\GetWebshopArticles
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
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
     * @return \DdD\\Stock\GetWebshopArticles
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
