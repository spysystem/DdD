<?php

namespace DdD\\Stock;

class StockCountByEdbnumber
{

    /**
     * @var ArrayOflong $edbnumbers
     */
    protected $edbnumbers = null;

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param ArrayOflong $edbnumbers
     * @param int $client
     * @param string $psk
     */
    public function __construct($edbnumbers, $client, $psk)
    {
      $this->edbnumbers = $edbnumbers;
      $this->client = $client;
      $this->psk = $psk;
    }

    /**
     * @return ArrayOflong
     */
    public function getEdbnumbers()
    {
      return $this->edbnumbers;
    }

    /**
     * @param ArrayOflong $edbnumbers
     * @return \DdD\\Stock\StockCountByEdbnumber
     */
    public function setEdbnumbers($edbnumbers)
    {
      $this->edbnumbers = $edbnumbers;
      return $this;
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
     * @return \DdD\\Stock\StockCountByEdbnumber
     */
    public function setClient($client)
    {
      $this->client = $client;
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
     * @return \DdD\\Stock\StockCountByEdbnumber
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
