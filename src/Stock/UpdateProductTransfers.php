<?php

namespace DdD\\Stock;

class UpdateProductTransfers
{

    /**
     * @var int $clientId
     */
    protected $clientId = null;

    /**
     * @var int $toClientId
     */
    protected $toClientId = null;

    /**
     * @var int $receiptNumber
     */
    protected $receiptNumber = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $clientId
     * @param int $toClientId
     * @param int $receiptNumber
     * @param string $psk
     */
    public function __construct($clientId, $toClientId, $receiptNumber, $psk)
    {
      $this->clientId = $clientId;
      $this->toClientId = $toClientId;
      $this->receiptNumber = $receiptNumber;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return \DdD\\Stock\UpdateProductTransfers
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

    /**
     * @return int
     */
    public function getToClientId()
    {
      return $this->toClientId;
    }

    /**
     * @param int $toClientId
     * @return \DdD\\Stock\UpdateProductTransfers
     */
    public function setToClientId($toClientId)
    {
      $this->toClientId = $toClientId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceiptNumber()
    {
      return $this->receiptNumber;
    }

    /**
     * @param int $receiptNumber
     * @return \DdD\\Stock\UpdateProductTransfers
     */
    public function setReceiptNumber($receiptNumber)
    {
      $this->receiptNumber = $receiptNumber;
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
     * @return \DdD\\Stock\UpdateProductTransfers
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
