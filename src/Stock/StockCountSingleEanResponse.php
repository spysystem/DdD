<?php

namespace DdD\Stock;

class StockCountSingleEanResponse
{

    /**
     * @var ArrayOfKeyValueOflongint $StockCountSingleEanResult
     */
    protected $StockCountSingleEanResult = null;

    /**
     * @param ArrayOfKeyValueOflongint $StockCountSingleEanResult
     */
    public function __construct($StockCountSingleEanResult)
    {
      $this->StockCountSingleEanResult = $StockCountSingleEanResult;
    }

    /**
     * @return ArrayOfKeyValueOflongint
     */
    public function getStockCountSingleEanResult()
    {
      return $this->StockCountSingleEanResult;
    }

    /**
     * @param ArrayOfKeyValueOflongint $StockCountSingleEanResult
     * @return \DdD\Stock\StockCountSingleEanResponse
     */
    public function setStockCountSingleEanResult($StockCountSingleEanResult)
    {
      $this->StockCountSingleEanResult = $StockCountSingleEanResult;
      return $this;
    }

}
