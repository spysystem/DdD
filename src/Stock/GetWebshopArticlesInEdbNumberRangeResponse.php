<?php

namespace DdD\\Stock;

class GetWebshopArticlesInEdbNumberRangeResponse
{

    /**
     * @var string $GetWebshopArticlesInEdbNumberRangeResult
     */
    protected $GetWebshopArticlesInEdbNumberRangeResult = null;

    /**
     * @param string $GetWebshopArticlesInEdbNumberRangeResult
     */
    public function __construct($GetWebshopArticlesInEdbNumberRangeResult)
    {
      $this->GetWebshopArticlesInEdbNumberRangeResult = $GetWebshopArticlesInEdbNumberRangeResult;
    }

    /**
     * @return string
     */
    public function getGetWebshopArticlesInEdbNumberRangeResult()
    {
      return $this->GetWebshopArticlesInEdbNumberRangeResult;
    }

    /**
     * @param string $GetWebshopArticlesInEdbNumberRangeResult
     * @return \DdD\\Stock\GetWebshopArticlesInEdbNumberRangeResponse
     */
    public function setGetWebshopArticlesInEdbNumberRangeResult($GetWebshopArticlesInEdbNumberRangeResult)
    {
      $this->GetWebshopArticlesInEdbNumberRangeResult = $GetWebshopArticlesInEdbNumberRangeResult;
      return $this;
    }

}
