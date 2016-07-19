<?php

namespace DdD\\Sale;

class SaleCouldNotBeDelivered
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
     * @var int $noteId
     */
    protected $noteId = null;

    /**
     * @var \DateTime $saleDate
     */
    protected $saleDate = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param int $terminal
     * @param int $noteId
     * @param \DateTime $saleDate
     * @param string $errorMessage
     * @param string $psk
     */
    public function __construct($client, $terminal, $noteId, \DateTime $saleDate, $errorMessage, $psk)
    {
      $this->client = $client;
      $this->terminal = $terminal;
      $this->noteId = $noteId;
      $this->saleDate = $saleDate->format(\DateTime::ATOM);
      $this->errorMessage = $errorMessage;
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
     * @return \DdD\\Sale\SaleCouldNotBeDelivered
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
     * @return \DdD\\Sale\SaleCouldNotBeDelivered
     */
    public function setTerminal($terminal)
    {
      $this->terminal = $terminal;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoteId()
    {
      return $this->noteId;
    }

    /**
     * @param int $noteId
     * @return \DdD\\Sale\SaleCouldNotBeDelivered
     */
    public function setNoteId($noteId)
    {
      $this->noteId = $noteId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleDate()
    {
      if ($this->saleDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->saleDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $saleDate
     * @return \DdD\\Sale\SaleCouldNotBeDelivered
     */
    public function setSaleDate(\DateTime $saleDate)
    {
      $this->saleDate = $saleDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \DdD\\Sale\SaleCouldNotBeDelivered
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
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
     * @return \DdD\\Sale\SaleCouldNotBeDelivered
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
