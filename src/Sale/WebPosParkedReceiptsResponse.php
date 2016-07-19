<?php

namespace DdD\\Sale;

class WebPosParkedReceiptsResponse
{

    /**
     * @var string $WebPosParkedReceiptsResult
     */
    protected $WebPosParkedReceiptsResult = null;

    /**
     * @param string $WebPosParkedReceiptsResult
     */
    public function __construct($WebPosParkedReceiptsResult)
    {
      $this->WebPosParkedReceiptsResult = $WebPosParkedReceiptsResult;
    }

    /**
     * @return string
     */
    public function getWebPosParkedReceiptsResult()
    {
      return $this->WebPosParkedReceiptsResult;
    }

    /**
     * @param string $WebPosParkedReceiptsResult
     * @return \DdD\\Sale\WebPosParkedReceiptsResponse
     */
    public function setWebPosParkedReceiptsResult($WebPosParkedReceiptsResult)
    {
      $this->WebPosParkedReceiptsResult = $WebPosParkedReceiptsResult;
      return $this;
    }

}
