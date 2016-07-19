<?php

namespace DdD\\Stock;

class GetLastItemGroupIncludedInSaleResponse
{

    /**
     * @var int $GetLastItemGroupIncludedInSaleResult
     */
    protected $GetLastItemGroupIncludedInSaleResult = null;

    /**
     * @param int $GetLastItemGroupIncludedInSaleResult
     */
    public function __construct($GetLastItemGroupIncludedInSaleResult)
    {
      $this->GetLastItemGroupIncludedInSaleResult = $GetLastItemGroupIncludedInSaleResult;
    }

    /**
     * @return int
     */
    public function getGetLastItemGroupIncludedInSaleResult()
    {
      return $this->GetLastItemGroupIncludedInSaleResult;
    }

    /**
     * @param int $GetLastItemGroupIncludedInSaleResult
     * @return \DdD\\Stock\GetLastItemGroupIncludedInSaleResponse
     */
    public function setGetLastItemGroupIncludedInSaleResult($GetLastItemGroupIncludedInSaleResult)
    {
      $this->GetLastItemGroupIncludedInSaleResult = $GetLastItemGroupIncludedInSaleResult;
      return $this;
    }

}
