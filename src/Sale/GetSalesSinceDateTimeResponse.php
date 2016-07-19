<?php

namespace DdD\Sale;

class GetSalesSinceDateTimeResponse
{

    /**
     * @var SaleSum $GetSalesSinceDateTimeResult
     */
    protected $GetSalesSinceDateTimeResult = null;

    /**
     * @param SaleSum $GetSalesSinceDateTimeResult
     */
    public function __construct($GetSalesSinceDateTimeResult)
    {
      $this->GetSalesSinceDateTimeResult = $GetSalesSinceDateTimeResult;
    }

    /**
     * @return SaleSum
     */
    public function getGetSalesSinceDateTimeResult()
    {
      return $this->GetSalesSinceDateTimeResult;
    }

    /**
     * @param SaleSum $GetSalesSinceDateTimeResult
     * @return \DdD\Sale\GetSalesSinceDateTimeResponse
     */
    public function setGetSalesSinceDateTimeResult($GetSalesSinceDateTimeResult)
    {
      $this->GetSalesSinceDateTimeResult = $GetSalesSinceDateTimeResult;
      return $this;
    }

}
