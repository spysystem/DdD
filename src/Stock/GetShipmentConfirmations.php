<?php

namespace DdD\Stock;

class GetShipmentConfirmations
{

    /**
     * @var int $clientId
     */
    protected $clientId = null;

    /**
     * @var ArrayOfShipmentConfirmationRequestModel $requestData
     */
    protected $requestData = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientId
     * @param ArrayOfShipmentConfirmationRequestModel $requestData
     * @param string $psk
     */
    public function __construct($clientId, $requestData, $psk)
    {
      $this->clientId = $clientId;
      $this->requestData = $requestData;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return \DdD\Stock\GetShipmentConfirmations
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

    /**
     * @return ArrayOfShipmentConfirmationRequestModel
     */
    public function getRequestData()
    {
      return $this->requestData;
    }

    /**
     * @param ArrayOfShipmentConfirmationRequestModel $requestData
     * @return \DdD\Stock\GetShipmentConfirmations
     */
    public function setRequestData($requestData)
    {
      $this->requestData = $requestData;
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
     * @return \DdD\Stock\GetShipmentConfirmations
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
