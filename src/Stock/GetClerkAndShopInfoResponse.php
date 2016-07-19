<?php

namespace DdD\\Stock;

class GetClerkAndShopInfoResponse
{

    /**
     * @var ArrayOfPOSInformation $GetClerkAndShopInfoResult
     */
    protected $GetClerkAndShopInfoResult = null;

    /**
     * @param ArrayOfPOSInformation $GetClerkAndShopInfoResult
     */
    public function __construct($GetClerkAndShopInfoResult)
    {
      $this->GetClerkAndShopInfoResult = $GetClerkAndShopInfoResult;
    }

    /**
     * @return ArrayOfPOSInformation
     */
    public function getGetClerkAndShopInfoResult()
    {
      return $this->GetClerkAndShopInfoResult;
    }

    /**
     * @param ArrayOfPOSInformation $GetClerkAndShopInfoResult
     * @return \DdD\\Stock\GetClerkAndShopInfoResponse
     */
    public function setGetClerkAndShopInfoResult($GetClerkAndShopInfoResult)
    {
      $this->GetClerkAndShopInfoResult = $GetClerkAndShopInfoResult;
      return $this;
    }

}
