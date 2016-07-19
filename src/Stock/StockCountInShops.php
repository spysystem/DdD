<?php

namespace DdD\Stock;

class StockCountInShops
{

    /**
     * @var int $shopKey
     */
    protected $shopKey = null;

    /**
     * @var ArrayOflong $eans
     */
    protected $eans = null;

    /**
     * @var ArrayOfint $shops
     */
    protected $shops = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $shopKey
     * @param ArrayOflong $eans
     * @param ArrayOfint $shops
     * @param string $psk
     */
    public function __construct($shopKey, $eans, $shops, $psk)
    {
      $this->shopKey = $shopKey;
      $this->eans = $eans;
      $this->shops = $shops;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getShopKey()
    {
      return $this->shopKey;
    }

    /**
     * @param int $shopKey
     * @return \DdD\Stock\StockCountInShops
     */
    public function setShopKey($shopKey)
    {
      $this->shopKey = $shopKey;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEans()
    {
      return $this->eans;
    }

    /**
     * @param ArrayOflong $eans
     * @return \DdD\Stock\StockCountInShops
     */
    public function setEans($eans)
    {
      $this->eans = $eans;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getShops()
    {
      return $this->shops;
    }

    /**
     * @param ArrayOfint $shops
     * @return \DdD\Stock\StockCountInShops
     */
    public function setShops($shops)
    {
      $this->shops = $shops;
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
     * @return \DdD\Stock\StockCountInShops
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
