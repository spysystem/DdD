<?php

namespace DdD\Stock;

class ArticleAveragePriceResponse
{

    /**
     * @var float $ArticleAveragePriceResult
     */
    protected $ArticleAveragePriceResult = null;

    /**
     * @param float $ArticleAveragePriceResult
     */
    public function __construct($ArticleAveragePriceResult)
    {
      $this->ArticleAveragePriceResult = $ArticleAveragePriceResult;
    }

    /**
     * @return float
     */
    public function getArticleAveragePriceResult()
    {
      return $this->ArticleAveragePriceResult;
    }

    /**
     * @param float $ArticleAveragePriceResult
     * @return \DdD\Stock\ArticleAveragePriceResponse
     */
    public function setArticleAveragePriceResult($ArticleAveragePriceResult)
    {
      $this->ArticleAveragePriceResult = $ArticleAveragePriceResult;
      return $this;
    }

}
