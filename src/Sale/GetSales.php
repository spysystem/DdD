<?php

namespace DdD\Sale;

class GetSales
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var \DateTime $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    protected $dateTo = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     * @param string $psk
     */
    public function __construct($client, \DateTime $dateFrom, \DateTime $dateTo, $psk)
    {
      $this->client = $client;
      $this->dateFrom = $dateFrom->format(\DateTime::ATOM);
      $this->dateTo = $dateTo->format(\DateTime::ATOM);
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
     * @return \DdD\Sale\GetSales
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->dateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateFrom
     * @return \DdD\Sale\GetSales
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
      $this->dateFrom = $dateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->dateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateTo
     * @return \DdD\Sale\GetSales
     */
    public function setDateTo(\DateTime $dateTo)
    {
      $this->dateTo = $dateTo->format(\DateTime::ATOM);
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
     * @return \DdD\Sale\GetSales
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
