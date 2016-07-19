<?php

namespace DdD\\Stock;

class StockCountInShopsResponse
{

    /**
     * @var ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 $StockCountInShopsResult
     */
    protected $StockCountInShopsResult = null;

    /**
     * @param ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 $StockCountInShopsResult
     */
    public function __construct($StockCountInShopsResult)
    {
      $this->StockCountInShopsResult = $StockCountInShopsResult;
    }

    /**
     * @return ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     */
    public function getStockCountInShopsResult()
    {
      return $this->StockCountInShopsResult;
    }

    /**
     * @param ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 $StockCountInShopsResult
     * @return \DdD\\Stock\StockCountInShopsResponse
     */
    public function setStockCountInShopsResult($StockCountInShopsResult)
    {
      $this->StockCountInShopsResult = $StockCountInShopsResult;
      return $this;
    }

}
