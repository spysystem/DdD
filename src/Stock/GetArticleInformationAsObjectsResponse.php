<?php

namespace DdD\Stock;

class GetArticleInformationAsObjectsResponse
{

    /**
     * @var ArrayOfArticleLine $GetArticleInformationAsObjectsResult
     */
    protected $GetArticleInformationAsObjectsResult = null;

    /**
     * @param ArrayOfArticleLine $GetArticleInformationAsObjectsResult
     */
    public function __construct($GetArticleInformationAsObjectsResult)
    {
      $this->GetArticleInformationAsObjectsResult = $GetArticleInformationAsObjectsResult;
    }

    /**
     * @return ArrayOfArticleLine
     */
    public function getGetArticleInformationAsObjectsResult()
    {
      return $this->GetArticleInformationAsObjectsResult;
    }

    /**
     * @param ArrayOfArticleLine $GetArticleInformationAsObjectsResult
     * @return \DdD\Stock\GetArticleInformationAsObjectsResponse
     */
    public function setGetArticleInformationAsObjectsResult($GetArticleInformationAsObjectsResult)
    {
      $this->GetArticleInformationAsObjectsResult = $GetArticleInformationAsObjectsResult;
      return $this;
    }

}
