<?php

namespace DdD\Stock;

class ArrayOfConfirmationItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ConfirmationItem[] $ConfirmationItem
     */
    protected $ConfirmationItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmationItem[]
     */
    public function getConfirmationItem()
    {
      return $this->ConfirmationItem;
    }

    /**
     * @param ConfirmationItem[] $ConfirmationItem
     * @return \DdD\Stock\ArrayOfConfirmationItem
     */
    public function setConfirmationItem(array $ConfirmationItem = null)
    {
      $this->ConfirmationItem = $ConfirmationItem;
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
      return isset($this->ConfirmationItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ConfirmationItem
     */
    public function offsetGet($offset)
    {
      return $this->ConfirmationItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ConfirmationItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ConfirmationItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ConfirmationItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ConfirmationItem Return the current element
     */
    public function current()
    {
      return current($this->ConfirmationItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ConfirmationItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ConfirmationItem);
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
      reset($this->ConfirmationItem);
    }

    /**
     * Countable implementation
     *
     * @return ConfirmationItem Return count of elements
     */
    public function count()
    {
      return count($this->ConfirmationItem);
    }

}
