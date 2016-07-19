<?php

namespace DdD\Sale;

class RetrySales
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param string $psk
     */
    public function __construct($client, $psk)
    {
      $this->client = $client;
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
     * @return \DdD\Sale\RetrySales
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
     * @return \DdD\Sale\RetrySales
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
