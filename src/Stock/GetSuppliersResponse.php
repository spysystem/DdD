<?php

namespace DdD\Stock;

class GetSuppliersResponse
{

    /**
     * @var ArrayOfArticleGrouping $GetSuppliersResult
     */
    protected $GetSuppliersResult = null;

    /**
     * @param ArrayOfArticleGrouping $GetSuppliersResult
     */
    public function __construct($GetSuppliersResult)
    {
      $this->GetSuppliersResult = $GetSuppliersResult;
    }

    /**
     * @return ArrayOfArticleGrouping
     */
    public function getGetSuppliersResult()
    {
      return $this->GetSuppliersResult;
    }

    /**
     * @param ArrayOfArticleGrouping $GetSuppliersResult
     * @return \DdD\Stock\GetSuppliersResponse
     */
    public function setGetSuppliersResult($GetSuppliersResult)
    {
      $this->GetSuppliersResult = $GetSuppliersResult;
      return $this;
    }

}
