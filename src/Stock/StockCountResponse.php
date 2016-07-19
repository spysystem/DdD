<?php

namespace DdD\Stock;

class StockCountResponse
{

    /**
     * @var ArrayOfKeyValueOflongint $StockCountResult
     */
    protected $StockCountResult = null;

    /**
     * @param ArrayOfKeyValueOflongint $StockCountResult
     */
    public function __construct($StockCountResult)
    {
      $this->StockCountResult = $StockCountResult;
    }

    /**
     * @return ArrayOfKeyValueOflongint
     */
    public function getStockCountResult()
    {
      return $this->StockCountResult;
    }

    /**
     * @param ArrayOfKeyValueOflongint $StockCountResult
     * @return \DdD\Stock\StockCountResponse
     */
    public function setStockCountResult($StockCountResult)
    {
      $this->StockCountResult = $StockCountResult;
      return $this;
    }

}
