<?php

namespace DdD\\Stock;

class GetWebshopArticlesPagedResponse
{

    /**
     * @var string $GetWebshopArticlesPagedResult
     */
    protected $GetWebshopArticlesPagedResult = null;

    /**
     * @param string $GetWebshopArticlesPagedResult
     */
    public function __construct($GetWebshopArticlesPagedResult)
    {
      $this->GetWebshopArticlesPagedResult = $GetWebshopArticlesPagedResult;
    }

    /**
     * @return string
     */
    public function getGetWebshopArticlesPagedResult()
    {
      return $this->GetWebshopArticlesPagedResult;
    }

    /**
     * @param string $GetWebshopArticlesPagedResult
     * @return \DdD\\Stock\GetWebshopArticlesPagedResponse
     */
    public function setGetWebshopArticlesPagedResult($GetWebshopArticlesPagedResult)
    {
      $this->GetWebshopArticlesPagedResult = $GetWebshopArticlesPagedResult;
      return $this;
    }

}
