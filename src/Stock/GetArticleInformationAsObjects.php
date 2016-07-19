<?php

namespace DdD\Stock;

class GetArticleInformationAsObjects
{

    /**
     * @var ArrayOflong $eans
     */
    protected $eans = null;

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param ArrayOflong $eans
     * @param int $clientid
     * @param string $psk
     */
    public function __construct($eans, $clientid, $psk)
    {
      $this->eans = $eans;
      $this->clientid = $clientid;
      $this->psk = $psk;
    }

    /**
     * @return ArrayOflong
     */
    public function getEans()
    {
      return $this->eans;
    }

    /**
     * @param ArrayOflong $eans
     * @return \DdD\Stock\GetArticleInformationAsObjects
     */
    public function setEans($eans)
    {
      $this->eans = $eans;
      return $this;
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
     * @return \DdD\Stock\GetArticleInformationAsObjects
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
     * @return \DdD\Stock\GetArticleInformationAsObjects
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
