<?php

namespace DdD\Stock;

class MakeDeliveryNote
{

    /**
     * @var DeliveryNote $dn
     */
    protected $dn = null;

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param DeliveryNote $dn
     * @param int $client
     * @param string $psk
     */
    public function __construct($dn, $client, $psk)
    {
      $this->dn = $dn;
      $this->client = $client;
      $this->psk = $psk;
    }

    /**
     * @return DeliveryNote
     */
    public function getDn()
    {
      return $this->dn;
    }

    /**
     * @param DeliveryNote $dn
     * @return \DdD\Stock\MakeDeliveryNote
     */
    public function setDn($dn)
    {
      $this->dn = $dn;
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
     * @return \DdD\Stock\MakeDeliveryNote
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
     * @return \DdD\Stock\MakeDeliveryNote
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
