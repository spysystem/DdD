<?php

namespace DdD\Sale;

class GetSalesResponse
{

    /**
     * @var SaleSum $GetSalesResult
     */
    protected $GetSalesResult = null;

    /**
     * @param SaleSum $GetSalesResult
     */
    public function __construct($GetSalesResult)
    {
      $this->GetSalesResult = $GetSalesResult;
    }

    /**
     * @return SaleSum
     */
    public function getGetSalesResult()
    {
      return $this->GetSalesResult;
    }

    /**
     * @param SaleSum $GetSalesResult
     * @return \DdD\Sale\GetSalesResponse
     */
    public function setGetSalesResult($GetSalesResult)
    {
      $this->GetSalesResult = $GetSalesResult;
      return $this;
    }

}
