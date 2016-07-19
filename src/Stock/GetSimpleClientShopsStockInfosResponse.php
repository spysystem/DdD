<?php

namespace DdD\Stock;

class GetSimpleClientShopsStockInfosResponse
{

    /**
     * @var ArrayOfSimpleShopStockInfo $GetSimpleClientShopsStockInfosResult
     */
    protected $GetSimpleClientShopsStockInfosResult = null;

    /**
     * @param ArrayOfSimpleShopStockInfo $GetSimpleClientShopsStockInfosResult
     */
    public function __construct($GetSimpleClientShopsStockInfosResult)
    {
      $this->GetSimpleClientShopsStockInfosResult = $GetSimpleClientShopsStockInfosResult;
    }

    /**
     * @return ArrayOfSimpleShopStockInfo
     */
    public function getGetSimpleClientShopsStockInfosResult()
    {
      return $this->GetSimpleClientShopsStockInfosResult;
    }

    /**
     * @param ArrayOfSimpleShopStockInfo $GetSimpleClientShopsStockInfosResult
     * @return \DdD\Stock\GetSimpleClientShopsStockInfosResponse
     */
    public function setGetSimpleClientShopsStockInfosResult($GetSimpleClientShopsStockInfosResult)
    {
      $this->GetSimpleClientShopsStockInfosResult = $GetSimpleClientShopsStockInfosResult;
      return $this;
    }

}
