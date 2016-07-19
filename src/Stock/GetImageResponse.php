<?php

namespace DdD\\Stock;

class GetImageResponse
{

    /**
     * @var StreamBody $GetImageResult
     */
    protected $GetImageResult = null;

    /**
     * @param StreamBody $GetImageResult
     */
    public function __construct($GetImageResult)
    {
      $this->GetImageResult = $GetImageResult;
    }

    /**
     * @return StreamBody
     */
    public function getGetImageResult()
    {
      return $this->GetImageResult;
    }

    /**
     * @param StreamBody $GetImageResult
     * @return \DdD\\Stock\GetImageResponse
     */
    public function setGetImageResult($GetImageResult)
    {
      $this->GetImageResult = $GetImageResult;
      return $this;
    }

}
