<?php

namespace DdD\Sale;

class ArrayOfItemLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemLine[] $ItemLine
     */
    protected $ItemLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemLine[]
     */
    public function getItemLine()
    {
      return $this->ItemLine;
    }

    /**
     * @param ItemLine[] $ItemLine
     * @return \DdD\Sale\ArrayOfItemLine
     */
    public function setItemLine(array $ItemLine = null)
    {
      $this->ItemLine = $ItemLine;
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
      return isset($this->ItemLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemLine
     */
    public function offsetGet($offset)
    {
      return $this->ItemLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemLine Return the current element
     */
    public function current()
    {
      return current($this->ItemLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemLine);
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
      reset($this->ItemLine);
    }

    /**
     * Countable implementation
     *
     * @return ItemLine Return count of elements
     */
    public function count()
    {
      return count($this->ItemLine);
    }

}
