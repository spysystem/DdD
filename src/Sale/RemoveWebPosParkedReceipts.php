<?php

namespace DdD\Sale;

class RemoveWebPosParkedReceipts
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $objectId
     */
    protected $objectId = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param string $objectId
     * @param string $psk
     */
    public function __construct($client, $objectId, $psk)
    {
      $this->client = $client;
      $this->objectId = $objectId;
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
     * @return \DdD\Sale\RemoveWebPosParkedReceipts
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectId()
    {
      return $this->objectId;
    }

    /**
     * @param string $objectId
     * @return \DdD\Sale\RemoveWebPosParkedReceipts
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
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
     * @return \DdD\Sale\RemoveWebPosParkedReceipts
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
