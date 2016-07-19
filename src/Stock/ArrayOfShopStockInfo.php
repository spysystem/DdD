<?php

namespace DdD\Stock;

class ArrayOfShopStockInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShopStockInfo[] $ShopStockInfo
     */
    protected $ShopStockInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShopStockInfo[]
     */
    public function getShopStockInfo()
    {
      return $this->ShopStockInfo;
    }

    /**
     * @param ShopStockInfo[] $ShopStockInfo
     * @return \DdD\Stock\ArrayOfShopStockInfo
     */
    public function setShopStockInfo(array $ShopStockInfo = null)
    {
      $this->ShopStockInfo = $ShopStockInfo;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ShopStockInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShopStockInfo
     */
    public function offsetGet($offset)
    {
      return $this->ShopStockInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShopStockInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ShopStockInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ShopStockInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShopStockInfo Return the current element
     */
    public function current()
    {
      return current($this->ShopStockInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShopStockInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShopStockInfo);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ShopStockInfo);
    }

    /**
     * Countable implementation
     *
     * @return ShopStockInfo Return count of elements
     */
    public function count()
    {
      return count($this->ShopStockInfo);
    }

}
