<?php

namespace DdD\\Stock;

class GetWebshopArticlesResponse
{

    /**
     * @var string $GetWebshopArticlesResult
     */
    protected $GetWebshopArticlesResult = null;

    /**
     * @param string $GetWebshopArticlesResult
     */
    public function __construct($GetWebshopArticlesResult)
    {
      $this->GetWebshopArticlesResult = $GetWebshopArticlesResult;
    }

    /**
     * @return string
     */
    public function getGetWebshopArticlesResult()
    {
      return $this->GetWebshopArticlesResult;
    }

    /**
     * @param string $GetWebshopArticlesResult
     * @return \DdD\\Stock\GetWebshopArticlesResponse
     */
    public function setGetWebshopArticlesResult($GetWebshopArticlesResult)
    {
      $this->GetWebshopArticlesResult = $GetWebshopArticlesResult;
      return $this;
    }

}
