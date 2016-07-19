<?php

namespace DdD\Stock;

class ArrayOfKeyValueOflongint implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOflongint[] $KeyValueOflongint
     */
    protected $KeyValueOflongint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOflongint[]
     */
    public function getKeyValueOflongint()
    {
      return $this->KeyValueOflongint;
    }

    /**
     * @param KeyValueOflongint[] $KeyValueOflongint
     * @return \DdD\Stock\ArrayOfKeyValueOflongint
     */
    public function setKeyValueOflongint(array $KeyValueOflongint = null)
    {
      $this->KeyValueOflongint = $KeyValueOflongint;
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
      return isset($this->KeyValueOflongint[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOflongint
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOflongint[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOflongint $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyValueOflongint[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyValueOflongint[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOflongint Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOflongint);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOflongint);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOflongint);
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
      reset($this->KeyValueOflongint);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOflongint Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOflongint);
    }

}
