<?php

namespace DdD\Stock;

class GetWebshopArticlesSinceEdbNumberResponse
{

    /**
     * @var string $GetWebshopArticlesSinceEdbNumberResult
     */
    protected $GetWebshopArticlesSinceEdbNumberResult = null;

    /**
     * @param string $GetWebshopArticlesSinceEdbNumberResult
     */
    public function __construct($GetWebshopArticlesSinceEdbNumberResult)
    {
      $this->GetWebshopArticlesSinceEdbNumberResult = $GetWebshopArticlesSinceEdbNumberResult;
    }

    /**
     * @return string
     */
    public function getGetWebshopArticlesSinceEdbNumberResult()
    {
      return $this->GetWebshopArticlesSinceEdbNumberResult;
    }

    /**
     * @param string $GetWebshopArticlesSinceEdbNumberResult
     * @return \DdD\Stock\GetWebshopArticlesSinceEdbNumberResponse
     */
    public function setGetWebshopArticlesSinceEdbNumberResult($GetWebshopArticlesSinceEdbNumberResult)
    {
      $this->GetWebshopArticlesSinceEdbNumberResult = $GetWebshopArticlesSinceEdbNumberResult;
      return $this;
    }

}
