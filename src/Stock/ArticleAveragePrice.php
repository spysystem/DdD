<?php

namespace DdD\\Stock;

class ArticleAveragePrice
{

    /**
     * @var int $supplier
     */
    protected $supplier = null;

    /**
     * @var string $edbnumber
     */
    protected $edbnumber = null;

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $supplier
     * @param string $edbnumber
     * @param int $client
     * @param string $psk
     */
    public function __construct($supplier, $edbnumber, $client, $psk)
    {
      $this->supplier = $supplier;
      $this->edbnumber = $edbnumber;
      $this->client = $client;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getSupplier()
    {
      return $this->supplier;
    }

    /**
     * @param int $supplier
     * @return \DdD\\Stock\ArticleAveragePrice
     */
    public function setSupplier($supplier)
    {
      $this->supplier = $supplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdbnumber()
    {
      return $this->edbnumber;
    }

    /**
     * @param string $edbnumber
     * @return \DdD\\Stock\ArticleAveragePrice
     */
    public function setEdbnumber($edbnumber)
    {
      $this->edbnumber = $edbnumber;
      return $this;
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
     * @return \DdD\\Stock\ArticleAveragePrice
     */
    public function setClient($client)
    {
      $this->client = $client;
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
     * @return \DdD\\Stock\ArticleAveragePrice
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
