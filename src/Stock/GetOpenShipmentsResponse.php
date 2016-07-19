<?php

namespace DdD\\Stock;

class GetOpenShipmentsResponse
{

    /**
     * @var ArrayOfShipmentConfirmation $GetOpenShipmentsResult
     */
    protected $GetOpenShipmentsResult = null;

    /**
     * @param ArrayOfShipmentConfirmation $GetOpenShipmentsResult
     */
    public function __construct($GetOpenShipmentsResult)
    {
      $this->GetOpenShipmentsResult = $GetOpenShipmentsResult;
    }

    /**
     * @return ArrayOfShipmentConfirmation
     */
    public function getGetOpenShipmentsResult()
    {
      return $this->GetOpenShipmentsResult;
    }

    /**
     * @param ArrayOfShipmentConfirmation $GetOpenShipmentsResult
     * @return \DdD\\Stock\GetOpenShipmentsResponse
     */
    public function setGetOpenShipmentsResult($GetOpenShipmentsResult)
    {
      $this->GetOpenShipmentsResult = $GetOpenShipmentsResult;
      return $this;
    }

}
