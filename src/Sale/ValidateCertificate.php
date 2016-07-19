<?php

namespace DdD\Sale;

class ValidateCertificate
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $certificateNumber
     */
    protected $certificateNumber = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param string $certificateNumber
     * @param string $psk
     */
    public function __construct($client, $certificateNumber, $psk)
    {
      $this->client = $client;
      $this->certificateNumber = $certificateNumber;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param int $client
     * @return \DdD\Sale\ValidateCertificate
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return string
     */
    public function getCertificateNumber()
    {
      return $this->certificateNumber;
    }

    /**
     * @param string $certificateNumber
     * @return \DdD\Sale\ValidateCertificate
     */
    public function setCertificateNumber($certificateNumber)
    {
      $this->certificateNumber = $certificateNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPsk()
    {
      return $this->psk;
    }

    /**
     * @param string $psk
     * @return \DdD\Sale\ValidateCertificate
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
