<?php

namespace DdD\Stock;

class DeleteImagesResponse
{

    /**
     * @var string $DeleteImagesResult
     */
    protected $DeleteImagesResult = null;

    /**
     * @param string $DeleteImagesResult
     */
    public function __construct($DeleteImagesResult)
    {
      $this->DeleteImagesResult = $DeleteImagesResult;
    }

    /**
     * @return string
     */
    public function getDeleteImagesResult()
    {
      return $this->DeleteImagesResult;
    }

    /**
     * @param string $DeleteImagesResult
     * @return \DdD\Stock\DeleteImagesResponse
     */
    public function setDeleteImagesResult($DeleteImagesResult)
    {
      $this->DeleteImagesResult = $DeleteImagesResult;
      return $this;
    }

}
