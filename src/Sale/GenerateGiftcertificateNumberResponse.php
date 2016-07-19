<?php

namespace DdD\Sale;

class GenerateGiftcertificateNumberResponse
{

    /**
     * @var string $GenerateGiftcertificateNumberResult
     */
    protected $GenerateGiftcertificateNumberResult = null;

    /**
     * @param string $GenerateGiftcertificateNumberResult
     */
    public function __construct($GenerateGiftcertificateNumberResult)
    {
      $this->GenerateGiftcertificateNumberResult = $GenerateGiftcertificateNumberResult;
    }

    /**
     * @return string
     */
    public function getGenerateGiftcertificateNumberResult()
    {
      return $this->GenerateGiftcertificateNumberResult;
    }

    /**
     * @param string $GenerateGiftcertificateNumberResult
     * @return \DdD\Sale\GenerateGiftcertificateNumberResponse
     */
    public function setGenerateGiftcertificateNumberResult($GenerateGiftcertificateNumberResult)
    {
      $this->GenerateGiftcertificateNumberResult = $GenerateGiftcertificateNumberResult;
      return $this;
    }

}
