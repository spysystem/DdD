<?php

namespace DdD\\Sale;

class GetCertificates
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
     * @var \DateTime $to
     */
    protected $to = null;

    /**
     * @var \DateTime $usedBefore
     */
    protected $usedBefore = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param \DateTime $from
     * @param \DateTime $to
     * @param \DateTime $usedBefore
     * @param string $psk
     */
    public function __construct($client, \DateTime $from, \DateTime $to, \DateTime $usedBefore, $psk)
    {
      $this->client = $client;
      $this->from = $from->format(\DateTime::ATOM);
      $this->to = $to->format(\DateTime::ATOM);
      $this->usedBefore = $usedBefore->format(\DateTime::ATOM);
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
     * @return \DdD\\Sale\GetCertificates
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
     * @return \DdD\\Sale\GetCertificates
     */
    public function setFrom(\DateTime $from)
    {
      $this->from = $from->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      if ($this->to == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->to);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $to
     * @return \DdD\\Sale\GetCertificates
     */
    public function setTo(\DateTime $to)
    {
      $this->to = $to->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUsedBefore()
    {
      if ($this->usedBefore == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->usedBefore);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $usedBefore
     * @return \DdD\\Sale\GetCertificates
     */
    public function setUsedBefore(\DateTime $usedBefore)
    {
      $this->usedBefore = $usedBefore->format(\DateTime::ATOM);
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
     * @return \DdD\\Sale\GetCertificates
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
