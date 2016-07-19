<?php

namespace DdD\\Stock;

class ArrayOfSimpleShopStockInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SimpleShopStockInfo[] $SimpleShopStockInfo
     */
    protected $SimpleShopStockInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleShopStockInfo[]
     */
    public function getSimpleShopStockInfo()
    {
      return $this->SimpleShopStockInfo;
    }

    /**
     * @param SimpleShopStockInfo[] $SimpleShopStockInfo
     * @return \DdD\\Stock\ArrayOfSimpleShopStockInfo
     */
    public function setSimpleShopStockInfo(array $SimpleShopStockInfo = null)
    {
      $this->SimpleShopStockInfo = $SimpleShopStockInfo;
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
      return isset($this->SimpleShopStockInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SimpleShopStockInfo
     */
    public function offsetGet($offset)
    {
      return $this->SimpleShopStockInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SimpleShopStockInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SimpleShopStockInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SimpleShopStockInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SimpleShopStockInfo Return the current element
     */
    public function current()
    {
      return current($this->SimpleShopStockInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SimpleShopStockInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SimpleShopStockInfo);
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
      reset($this->SimpleShopStockInfo);
    }

    /**
     * Countable implementation
     *
     * @return SimpleShopStockInfo Return count of elements
     */
    public function count()
    {
      return count($this->SimpleShopStockInfo);
    }

}
