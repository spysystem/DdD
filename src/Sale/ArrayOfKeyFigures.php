<?php

namespace DdD\Sale;

class ArrayOfKeyFigures implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyFigures[] $KeyFigures
     */
    protected $KeyFigures = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyFigures[]
     */
    public function getKeyFigures()
    {
      return $this->KeyFigures;
    }

    /**
     * @param KeyFigures[] $KeyFigures
     * @return \DdD\Sale\ArrayOfKeyFigures
     */
    public function setKeyFigures(array $KeyFigures = null)
    {
      $this->KeyFigures = $KeyFigures;
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
      return isset($this->KeyFigures[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyFigures
     */
    public function offsetGet($offset)
    {
      return $this->KeyFigures[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyFigures $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyFigures[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyFigures[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyFigures Return the current element
     */
    public function current()
    {
      return current($this->KeyFigures);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyFigures);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyFigures);
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
      reset($this->KeyFigures);
    }

    /**
     * Countable implementation
     *
     * @return KeyFigures Return count of elements
     */
    public function count()
    {
      return count($this->KeyFigures);
    }

}
