<?php

namespace DdD\Stock;

class GetItemgroupsResponse
{

    /**
     * @var ArrayOfArticleGrouping $GetItemgroupsResult
     */
    protected $GetItemgroupsResult = null;

    /**
     * @param ArrayOfArticleGrouping $GetItemgroupsResult
     */
    public function __construct($GetItemgroupsResult)
    {
      $this->GetItemgroupsResult = $GetItemgroupsResult;
    }

    /**
     * @return ArrayOfArticleGrouping
     */
    public function getGetItemgroupsResult()
    {
      return $this->GetItemgroupsResult;
    }

    /**
     * @param ArrayOfArticleGrouping $GetItemgroupsResult
     * @return \DdD\Stock\GetItemgroupsResponse
     */
    public function setGetItemgroupsResult($GetItemgroupsResult)
    {
      $this->GetItemgroupsResult = $GetItemgroupsResult;
      return $this;
    }

}
