<?php

namespace DdD\Stock;

class ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[] $KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     */
    protected $KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[]
     */
    public function getKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1()
    {
      return $this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1;
    }

    /**
     * @param KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[] $KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     * @return \DdD\Stock\ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     */
    public function setKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1(array $KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 = null)
    {
      $this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 = $KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1;
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
      return isset($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1);
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
      reset($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1 Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1);
    }

}
