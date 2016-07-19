<?php

namespace DdD\\Stock;

class GetShipmentConfirmationsResponse
{

    /**
     * @var ArrayOfShipmentConfirmation $GetShipmentConfirmationsResult
     */
    protected $GetShipmentConfirmationsResult = null;

    /**
     * @param ArrayOfShipmentConfirmation $GetShipmentConfirmationsResult
     */
    public function __construct($GetShipmentConfirmationsResult)
    {
      $this->GetShipmentConfirmationsResult = $GetShipmentConfirmationsResult;
    }

    /**
     * @return ArrayOfShipmentConfirmation
     */
    public function getGetShipmentConfirmationsResult()
    {
      return $this->GetShipmentConfirmationsResult;
    }

    /**
     * @param ArrayOfShipmentConfirmation $GetShipmentConfirmationsResult
     * @return \DdD\\Stock\GetShipmentConfirmationsResponse
     */
    public function setGetShipmentConfirmationsResult($GetShipmentConfirmationsResult)
    {
      $this->GetShipmentConfirmationsResult = $GetShipmentConfirmationsResult;
      return $this;
    }

}
