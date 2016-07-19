<?php

namespace DdD\Stock;

class UpdateProductTransfersResponse
{

    /**
     * @var boolean $UpdateProductTransfersResult
     */
    protected $UpdateProductTransfersResult = null;

    /**
     * @param boolean $UpdateProductTransfersResult
     */
    public function __construct($UpdateProductTransfersResult)
    {
      $this->UpdateProductTransfersResult = $UpdateProductTransfersResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateProductTransfersResult()
    {
      return $this->UpdateProductTransfersResult;
    }

    /**
     * @param boolean $UpdateProductTransfersResult
     * @return \DdD\Stock\UpdateProductTransfersResponse
     */
    public function setUpdateProductTransfersResult($UpdateProductTransfersResult)
    {
      $this->UpdateProductTransfersResult = $UpdateProductTransfersResult;
      return $this;
    }

}
