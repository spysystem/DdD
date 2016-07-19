<?php

namespace DdD\Stock;

class GetBookedLinesOnDeliverynote
{

    /**
     * @var int $clientid
     */
    protected $clientid = null;

    /**
     * @var string $deliverynote
     */
    protected $deliverynote = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientid
     * @param string $deliverynote
     * @param string $psk
     */
    public function __construct($clientid, $deliverynote, $psk)
    {
      $this->clientid = $clientid;
      $this->deliverynote = $deliverynote;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClientid()
    {
      return $this->clientid;
    }

    /**
     * @param int $clientid
     * @return \DdD\Stock\GetBookedLinesOnDeliverynote
     */
    public function setClientid($clientid)
    {
      $this->clientid = $clientid;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliverynote()
    {
      return $this->deliverynote;
    }

    /**
     * @param string $deliverynote
     * @return \DdD\Stock\GetBookedLinesOnDeliverynote
     */
    public function setDeliverynote($deliverynote)
    {
      $this->deliverynote = $deliverynote;
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
     * @return \DdD\Stock\GetBookedLinesOnDeliverynote
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
