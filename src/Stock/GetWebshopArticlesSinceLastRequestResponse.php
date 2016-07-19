<?php

namespace DdD\Stock;

class GetWebshopArticlesSinceLastRequestResponse
{

    /**
     * @var string $GetWebshopArticlesSinceLastRequestResult
     */
    protected $GetWebshopArticlesSinceLastRequestResult = null;

    /**
     * @param string $GetWebshopArticlesSinceLastRequestResult
     */
    public function __construct($GetWebshopArticlesSinceLastRequestResult)
    {
      $this->GetWebshopArticlesSinceLastRequestResult = $GetWebshopArticlesSinceLastRequestResult;
    }

    /**
     * @return string
     */
    public function getGetWebshopArticlesSinceLastRequestResult()
    {
      return $this->GetWebshopArticlesSinceLastRequestResult;
    }

    /**
     * @param string $GetWebshopArticlesSinceLastRequestResult
     * @return \DdD\Stock\GetWebshopArticlesSinceLastRequestResponse
     */
    public function setGetWebshopArticlesSinceLastRequestResult($GetWebshopArticlesSinceLastRequestResult)
    {
      $this->GetWebshopArticlesSinceLastRequestResult = $GetWebshopArticlesSinceLastRequestResult;
      return $this;
    }

}
