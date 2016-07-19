<?php

namespace DdD\\Sale;

class ValidateCertificateResponse
{

    /**
     * @var CertificateResponse $ValidateCertificateResult
     */
    protected $ValidateCertificateResult = null;

    /**
     * @param CertificateResponse $ValidateCertificateResult
     */
    public function __construct($ValidateCertificateResult)
    {
      $this->ValidateCertificateResult = $ValidateCertificateResult;
    }

    /**
     * @return CertificateResponse
     */
    public function getValidateCertificateResult()
    {
      return $this->ValidateCertificateResult;
    }

    /**
     * @param CertificateResponse $ValidateCertificateResult
     * @return \DdD\\Sale\ValidateCertificateResponse
     */
    public function setValidateCertificateResult($ValidateCertificateResult)
    {
      $this->ValidateCertificateResult = $ValidateCertificateResult;
      return $this;
    }

}
