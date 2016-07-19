<?php

namespace DdD\Stock;

class StockCountByEdbnumberResponse
{

    /**
     * @var ArrayOfKeyValueOflongint $StockCountByEdbnumberResult
     */
    protected $StockCountByEdbnumberResult = null;

    /**
     * @param ArrayOfKeyValueOflongint $StockCountByEdbnumberResult
     */
    public function __construct($StockCountByEdbnumberResult)
    {
      $this->StockCountByEdbnumberResult = $StockCountByEdbnumberResult;
    }

    /**
     * @return ArrayOfKeyValueOflongint
     */
    public function getStockCountByEdbnumberResult()
    {
      return $this->StockCountByEdbnumberResult;
    }

    /**
     * @param ArrayOfKeyValueOflongint $StockCountByEdbnumberResult
     * @return \DdD\Stock\StockCountByEdbnumberResponse
     */
    public function setStockCountByEdbnumberResult($StockCountByEdbnumberResult)
    {
      $this->StockCountByEdbnumberResult = $StockCountByEdbnumberResult;
      return $this;
    }

}
