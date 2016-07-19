<?php

namespace DdD\\Sale;

class GetCertificatesResponse
{

    /**
     * @var ArrayOfCertificateResponse $GetCertificatesResult
     */
    protected $GetCertificatesResult = null;

    /**
     * @param ArrayOfCertificateResponse $GetCertificatesResult
     */
    public function __construct($GetCertificatesResult)
    {
      $this->GetCertificatesResult = $GetCertificatesResult;
    }

    /**
     * @return ArrayOfCertificateResponse
     */
    public function getGetCertificatesResult()
    {
      return $this->GetCertificatesResult;
    }

    /**
     * @param ArrayOfCertificateResponse $GetCertificatesResult
     * @return \DdD\\Sale\GetCertificatesResponse
     */
    public function setGetCertificatesResult($GetCertificatesResult)
    {
      $this->GetCertificatesResult = $GetCertificatesResult;
      return $this;
    }

}
