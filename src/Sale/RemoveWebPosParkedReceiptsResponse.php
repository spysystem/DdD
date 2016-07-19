<?php

namespace DdD\\Sale;

class RemoveWebPosParkedReceiptsResponse
{

    /**
     * @var string $RemoveWebPosParkedReceiptsResult
     */
    protected $RemoveWebPosParkedReceiptsResult = null;

    /**
     * @param string $RemoveWebPosParkedReceiptsResult
     */
    public function __construct($RemoveWebPosParkedReceiptsResult)
    {
      $this->RemoveWebPosParkedReceiptsResult = $RemoveWebPosParkedReceiptsResult;
    }

    /**
     * @return string
     */
    public function getRemoveWebPosParkedReceiptsResult()
    {
      return $this->RemoveWebPosParkedReceiptsResult;
    }

    /**
     * @param string $RemoveWebPosParkedReceiptsResult
     * @return \DdD\\Sale\RemoveWebPosParkedReceiptsResponse
     */
    public function setRemoveWebPosParkedReceiptsResult($RemoveWebPosParkedReceiptsResult)
    {
      $this->RemoveWebPosParkedReceiptsResult = $RemoveWebPosParkedReceiptsResult;
      return $this;
    }

}
