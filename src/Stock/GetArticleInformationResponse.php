<?php

namespace DdD\\Stock;

class GetArticleInformationResponse
{

    /**
     * @var string $GetArticleInformationResult
     */
    protected $GetArticleInformationResult = null;

    /**
     * @param string $GetArticleInformationResult
     */
    public function __construct($GetArticleInformationResult)
    {
      $this->GetArticleInformationResult = $GetArticleInformationResult;
    }

    /**
     * @return string
     */
    public function getGetArticleInformationResult()
    {
      return $this->GetArticleInformationResult;
    }

    /**
     * @param string $GetArticleInformationResult
     * @return \DdD\\Stock\GetArticleInformationResponse
     */
    public function setGetArticleInformationResult($GetArticleInformationResult)
    {
      $this->GetArticleInformationResult = $GetArticleInformationResult;
      return $this;
    }

}
