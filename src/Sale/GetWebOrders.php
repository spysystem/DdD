<?php

namespace DdD\\Sale;

class GetWebOrders
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var boolean $onlyOpen
     */
    protected $onlyOpen = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param boolean $onlyOpen
     * @param string $psk
     */
    public function __construct($client, $onlyOpen, $psk)
    {
      $this->client = $client;
      $this->onlyOpen = $onlyOpen;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param int $client
     * @return \DdD\\Sale\GetWebOrders
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyOpen()
    {
      return $this->onlyOpen;
    }

    /**
     * @param boolean $onlyOpen
     * @return \DdD\\Sale\GetWebOrders
     */
    public function setOnlyOpen($onlyOpen)
    {
      $this->onlyOpen = $onlyOpen;
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
     * @return \DdD\\Sale\GetWebOrders
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
