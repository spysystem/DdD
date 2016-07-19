<?php

namespace DdD\\Stock;

class GetWebshopArticlesFilterByShopIdResponse
{

    /**
     * @var string $GetWebshopArticlesFilterByShopIdResult
     */
    protected $GetWebshopArticlesFilterByShopIdResult = null;

    /**
     * @param string $GetWebshopArticlesFilterByShopIdResult
     */
    public function __construct($GetWebshopArticlesFilterByShopIdResult)
    {
      $this->GetWebshopArticlesFilterByShopIdResult = $GetWebshopArticlesFilterByShopIdResult;
    }

    /**
     * @return string
     */
    public function getGetWebshopArticlesFilterByShopIdResult()
    {
      return $this->GetWebshopArticlesFilterByShopIdResult;
    }

    /**
     * @param string $GetWebshopArticlesFilterByShopIdResult
     * @return \DdD\\Stock\GetWebshopArticlesFilterByShopIdResponse
     */
    public function setGetWebshopArticlesFilterByShopIdResult($GetWebshopArticlesFilterByShopIdResult)
    {
      $this->GetWebshopArticlesFilterByShopIdResult = $GetWebshopArticlesFilterByShopIdResult;
      return $this;
    }

}
