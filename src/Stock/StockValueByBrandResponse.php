<?php

namespace DdD\\Stock;

class StockValueByBrandResponse
{

    /**
     * @var float $StockValueByBrandResult
     */
    protected $StockValueByBrandResult = null;

    /**
     * @param float $StockValueByBrandResult
     */
    public function __construct($StockValueByBrandResult)
    {
      $this->StockValueByBrandResult = $StockValueByBrandResult;
    }

    /**
     * @return float
     */
    public function getStockValueByBrandResult()
    {
      return $this->StockValueByBrandResult;
    }

    /**
     * @param float $StockValueByBrandResult
     * @return \DdD\\Stock\StockValueByBrandResponse
     */
    public function setStockValueByBrandResult($StockValueByBrandResult)
    {
      $this->StockValueByBrandResult = $StockValueByBrandResult;
      return $this;
    }

}
