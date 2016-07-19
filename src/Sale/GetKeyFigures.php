<?php

namespace DdD\\Sale;

class GetKeyFigures
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var \DateTime $datefrom
     */
    protected $datefrom = null;

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
     * @param \DateTime $datefrom
     * @param \DateTime $dateTo
     * @param string $psk
     */
    public function __construct($client, \DateTime $datefrom, \DateTime $dateTo, $psk)
    {
      $this->client = $client;
      $this->datefrom = $datefrom->format(\DateTime::ATOM);
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
     * @return \DdD\\Sale\GetKeyFigures
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatefrom()
    {
      if ($this->datefrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->datefrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $datefrom
     * @return \DdD\\Sale\GetKeyFigures
     */
    public function setDatefrom(\DateTime $datefrom)
    {
      $this->datefrom = $datefrom->format(\DateTime::ATOM);
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
     * @return \DdD\\Sale\GetKeyFigures
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
     * @return \DdD\\Sale\GetKeyFigures
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
