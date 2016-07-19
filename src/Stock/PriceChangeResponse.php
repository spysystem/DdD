<?php

namespace DdD\Stock;

class PriceChangeResponse
{

    /**
     * @var ArticleResponse $PriceChangeResult
     */
    protected $PriceChangeResult = null;

    /**
     * @param ArticleResponse $PriceChangeResult
     */
    public function __construct($PriceChangeResult)
    {
      $this->PriceChangeResult = $PriceChangeResult;
    }

    /**
     * @return ArticleResponse
     */
    public function getPriceChangeResult()
    {
      return $this->PriceChangeResult;
    }

    /**
     * @param ArticleResponse $PriceChangeResult
     * @return \DdD\Stock\PriceChangeResponse
     */
    public function setPriceChangeResult($PriceChangeResult)
    {
      $this->PriceChangeResult = $PriceChangeResult;
      return $this;
    }

}
