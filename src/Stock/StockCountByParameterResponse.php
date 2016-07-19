<?php

namespace DdD\\Stock;

class StockCountByParameterResponse
{

    /**
     * @var ArrayOfKeyValueOflongint $StockCountByParameterResult
     */
    protected $StockCountByParameterResult = null;

    /**
     * @param ArrayOfKeyValueOflongint $StockCountByParameterResult
     */
    public function __construct($StockCountByParameterResult)
    {
      $this->StockCountByParameterResult = $StockCountByParameterResult;
    }

    /**
     * @return ArrayOfKeyValueOflongint
     */
    public function getStockCountByParameterResult()
    {
      return $this->StockCountByParameterResult;
    }

    /**
     * @param ArrayOfKeyValueOflongint $StockCountByParameterResult
     * @return \DdD\\Stock\StockCountByParameterResponse
     */
    public function setStockCountByParameterResult($StockCountByParameterResult)
    {
      $this->StockCountByParameterResult = $StockCountByParameterResult;
      return $this;
    }

}
