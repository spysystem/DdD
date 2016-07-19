<?php

namespace DdD\Sale;

class SaleCouldNotBeDeliveredResponse
{

    /**
     * @var Status $SaleCouldNotBeDeliveredResult
     */
    protected $SaleCouldNotBeDeliveredResult = null;

    /**
     * @param Status $SaleCouldNotBeDeliveredResult
     */
    public function __construct($SaleCouldNotBeDeliveredResult)
    {
      $this->SaleCouldNotBeDeliveredResult = $SaleCouldNotBeDeliveredResult;
    }

    /**
     * @return Status
     */
    public function getSaleCouldNotBeDeliveredResult()
    {
      return $this->SaleCouldNotBeDeliveredResult;
    }

    /**
     * @param Status $SaleCouldNotBeDeliveredResult
     * @return \DdD\Sale\SaleCouldNotBeDeliveredResponse
     */
    public function setSaleCouldNotBeDeliveredResult($SaleCouldNotBeDeliveredResult)
    {
      $this->SaleCouldNotBeDeliveredResult = $SaleCouldNotBeDeliveredResult;
      return $this;
    }

}
