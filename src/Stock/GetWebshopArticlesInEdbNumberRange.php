<?php

namespace DdD\Stock;

class GetWebshopArticlesInEdbNumberRange
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var int $fromEdbnumber
     */
    protected $fromEdbnumber = null;

    /**
     * @var int $toEdbnumber
     */
    protected $toEdbnumber = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param int $fromEdbnumber
     * @param int $toEdbnumber
     * @param string $psk
     */
    public function __construct($clientid, $fromEdbnumber, $toEdbnumber, $psk)
    {
      $this->clientid = $clientid;
      $this->fromEdbnumber = $fromEdbnumber;
      $this->toEdbnumber = $toEdbnumber;
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
     * @return \DdD\Stock\GetWebshopArticlesInEdbNumberRange
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromEdbnumber()
    {
      return $this->fromEdbnumber;
    }

    /**
     * @param int $fromEdbnumber
     * @return \DdD\Stock\GetWebshopArticlesInEdbNumberRange
     */
    public function setFromEdbnumber($fromEdbnumber)
    {
      $this->fromEdbnumber = $fromEdbnumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getToEdbnumber()
    {
      return $this->toEdbnumber;
    }

    /**
     * @param int $toEdbnumber
     * @return \DdD\Stock\GetWebshopArticlesInEdbNumberRange
     */
    public function setToEdbnumber($toEdbnumber)
    {
      $this->toEdbnumber = $toEdbnumber;
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
     * @return \DdD\Stock\GetWebshopArticlesInEdbNumberRange
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
