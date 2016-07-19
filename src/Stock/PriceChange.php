<?php

namespace DdD\Stock;

class PriceChange
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var ArrayOfPriceChange $priceChanges
     */
    protected $priceChanges = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param ArrayOfPriceChange $priceChanges
     * @param string $psk
     */
    public function __construct($client, $priceChanges, $psk)
    {
      $this->client = $client;
      $this->priceChanges = $priceChanges;
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
     * @return \DdD\Stock\PriceChange
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return ArrayOfPriceChange
     */
    public function getPriceChanges()
    {
      return $this->priceChanges;
    }

    /**
     * @param ArrayOfPriceChange $priceChanges
     * @return \DdD\Stock\PriceChange
     */
    public function setPriceChanges($priceChanges)
    {
      $this->priceChanges = $priceChanges;
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
     * @return \DdD\Stock\PriceChange
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
