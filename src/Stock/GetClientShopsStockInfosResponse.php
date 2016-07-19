<?php

namespace DdD\Stock;

class GetClientShopsStockInfosResponse
{

    /**
     * @var ArrayOfShopStockInfo $GetClientShopsStockInfosResult
     */
    protected $GetClientShopsStockInfosResult = null;

    /**
     * @param ArrayOfShopStockInfo $GetClientShopsStockInfosResult
     */
    public function __construct($GetClientShopsStockInfosResult)
    {
      $this->GetClientShopsStockInfosResult = $GetClientShopsStockInfosResult;
    }

    /**
     * @return ArrayOfShopStockInfo
     */
    public function getGetClientShopsStockInfosResult()
    {
      return $this->GetClientShopsStockInfosResult;
    }

    /**
     * @param ArrayOfShopStockInfo $GetClientShopsStockInfosResult
     * @return \DdD\Stock\GetClientShopsStockInfosResponse
     */
    public function setGetClientShopsStockInfosResult($GetClientShopsStockInfosResult)
    {
      $this->GetClientShopsStockInfosResult = $GetClientShopsStockInfosResult;
      return $this;
    }

}
