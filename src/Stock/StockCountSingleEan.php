<?php

namespace DdD\\Stock;

class StockCountSingleEan
{

    /**
     * @var int $ean
     */
    protected $ean = null;

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $ean
     * @param int $client
     * @param string $psk
     */
    public function __construct($ean, $client, $psk)
    {
      $this->ean = $ean;
      $this->client = $client;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getEan()
    {
      return $this->ean;
    }

    /**
     * @param int $ean
     * @return \DdD\\Stock\StockCountSingleEan
     */
    public function setEan($ean)
    {
      $this->ean = $ean;
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
     * @return \DdD\\Stock\StockCountSingleEan
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
     * @return \DdD\\Stock\StockCountSingleEan
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
