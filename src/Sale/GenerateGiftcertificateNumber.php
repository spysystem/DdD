<?php

namespace DdD\\Sale;

class GenerateGiftcertificateNumber
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var int $terminal
     */
    protected $terminal = null;

    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param int $terminal
     * @param int $amount
     * @param string $psk
     */
    public function __construct($client, $terminal, $amount, $psk)
    {
      $this->client = $client;
      $this->terminal = $terminal;
      $this->amount = $amount;
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
     * @return \DdD\\Sale\GenerateGiftcertificateNumber
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return int
     */
    public function getTerminal()
    {
      return $this->terminal;
    }

    /**
     * @param int $terminal
     * @return \DdD\\Sale\GenerateGiftcertificateNumber
     */
    public function setTerminal($terminal)
    {
      $this->terminal = $terminal;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param int $amount
     * @return \DdD\\Sale\GenerateGiftcertificateNumber
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \DdD\\Sale\GenerateGiftcertificateNumber
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
