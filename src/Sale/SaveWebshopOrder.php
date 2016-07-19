<?php

namespace DdD\\Sale;

class SaveWebshopOrder
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var ArrayOfWebOrder $weborder
     */
    protected $weborder = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param ArrayOfWebOrder $weborder
     * @param string $psk
     */
    public function __construct($client, $weborder, $psk)
    {
      $this->client = $client;
      $this->weborder = $weborder;
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
     * @return \DdD\\Sale\SaveWebshopOrder
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return ArrayOfWebOrder
     */
    public function getWeborder()
    {
      return $this->weborder;
    }

    /**
     * @param ArrayOfWebOrder $weborder
     * @return \DdD\\Sale\SaveWebshopOrder
     */
    public function setWeborder($weborder)
    {
      $this->weborder = $weborder;
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
     * @return \DdD\\Sale\SaveWebshopOrder
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
