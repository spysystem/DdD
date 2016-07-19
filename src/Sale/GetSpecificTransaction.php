<?php

namespace DdD\\Sale;

class GetSpecificTransaction
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var int $terminalNumber
     */
    protected $terminalNumber = null;

    /**
     * @var int $noteid
     */
    protected $noteid = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param int $terminalNumber
     * @param int $noteid
     * @param string $psk
     */
    public function __construct($client, $terminalNumber, $noteid, $psk)
    {
      $this->client = $client;
      $this->terminalNumber = $terminalNumber;
      $this->noteid = $noteid;
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
     * @return \DdD\\Sale\GetSpecificTransaction
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return int
     */
    public function getTerminalNumber()
    {
      return $this->terminalNumber;
    }

    /**
     * @param int $terminalNumber
     * @return \DdD\\Sale\GetSpecificTransaction
     */
    public function setTerminalNumber($terminalNumber)
    {
      $this->terminalNumber = $terminalNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoteid()
    {
      return $this->noteid;
    }

    /**
     * @param int $noteid
     * @return \DdD\\Sale\GetSpecificTransaction
     */
    public function setNoteid($noteid)
    {
      $this->noteid = $noteid;
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
     * @return \DdD\\Sale\GetSpecificTransaction
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
