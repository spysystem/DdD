<?php

namespace DdD\Stock;

class ValidateArticleFileResponse
{

    /**
     * @var ArrayOfArticleLineValidation $ValidateArticleFileResult
     */
    protected $ValidateArticleFileResult = null;

    /**
     * @param ArrayOfArticleLineValidation $ValidateArticleFileResult
     */
    public function __construct($ValidateArticleFileResult)
    {
      $this->ValidateArticleFileResult = $ValidateArticleFileResult;
    }

    /**
     * @return ArrayOfArticleLineValidation
     */
    public function getValidateArticleFileResult()
    {
      return $this->ValidateArticleFileResult;
    }

    /**
     * @param ArrayOfArticleLineValidation $ValidateArticleFileResult
     * @return \DdD\Stock\ValidateArticleFileResponse
     */
    public function setValidateArticleFileResult($ValidateArticleFileResult)
    {
      $this->ValidateArticleFileResult = $ValidateArticleFileResult;
      return $this;
    }

}
