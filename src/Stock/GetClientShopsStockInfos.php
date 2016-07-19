<?php

namespace DdD\Stock;

class GetClientShopsStockInfos
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param \DateTime $from
     * @param string $psk
     */
    public function __construct($client, \DateTime $from, $psk)
    {
      $this->client = $client;
      $this->from = $from->format(\DateTime::ATOM);
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
     * @return \DdD\Stock\GetClientShopsStockInfos
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $from
     * @return \DdD\Stock\GetClientShopsStockInfos
     */
    public function setFrom(\DateTime $from)
    {
      $this->from = $from->format(\DateTime::ATOM);
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
     * @return \DdD\Stock\GetClientShopsStockInfos
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
