<?php

namespace DdD\Stock;

class GetOpenProductTransfersResponse
{

    /**
     * @var ArrayOfProductTransfer $GetOpenProductTransfersResult
     */
    protected $GetOpenProductTransfersResult = null;

    /**
     * @param ArrayOfProductTransfer $GetOpenProductTransfersResult
     */
    public function __construct($GetOpenProductTransfersResult)
    {
      $this->GetOpenProductTransfersResult = $GetOpenProductTransfersResult;
    }

    /**
     * @return ArrayOfProductTransfer
     */
    public function getGetOpenProductTransfersResult()
    {
      return $this->GetOpenProductTransfersResult;
    }

    /**
     * @param ArrayOfProductTransfer $GetOpenProductTransfersResult
     * @return \DdD\Stock\GetOpenProductTransfersResponse
     */
    public function setGetOpenProductTransfersResult($GetOpenProductTransfersResult)
    {
      $this->GetOpenProductTransfersResult = $GetOpenProductTransfersResult;
      return $this;
    }

}
