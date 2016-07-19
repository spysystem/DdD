<?php

namespace DdD\Stock;

class MakeDeliveryNote_Bulk
{

    /**
     * @var ArrayOfDeliveryNote $dn
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
     * @param ArrayOfDeliveryNote $dn
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
     * @return ArrayOfDeliveryNote
     */
    public function getDn()
    {
      return $this->dn;
    }

    /**
     * @param ArrayOfDeliveryNote $dn
     * @return \DdD\Stock\MakeDeliveryNote_Bulk
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
     * @return \DdD\Stock\MakeDeliveryNote_Bulk
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
     * @return \DdD\Stock\MakeDeliveryNote_Bulk
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
