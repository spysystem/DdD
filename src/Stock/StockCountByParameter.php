<?php

namespace DdD\Stock;

class StockCountByParameter
{

    /**
     * @var ArrayOflong $eans
     */
    protected $eans = null;

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param ArrayOflong $eans
     * @param int $client
     * @param string $psk
     */
    public function __construct($eans, $client, $psk)
    {
      $this->eans = $eans;
      $this->client = $client;
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
     * @return \DdD\Stock\StockCountByParameter
     */
    public function setEans($eans)
    {
      $this->eans = $eans;
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
     * @return \DdD\Stock\StockCountByParameter
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
     * @return \DdD\Stock\StockCountByParameter
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
