<?php

namespace DdD\Sale;

class ArrayOfTransactionRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TransactionRow[] $TransactionRow
     */
    protected $TransactionRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransactionRow[]
     */
    public function getTransactionRow()
    {
      return $this->TransactionRow;
    }

    /**
     * @param TransactionRow[] $TransactionRow
     * @return \DdD\Sale\ArrayOfTransactionRow
     */
    public function setTransactionRow(array $TransactionRow = null)
    {
      $this->TransactionRow = $TransactionRow;
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
      return isset($this->TransactionRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TransactionRow
     */
    public function offsetGet($offset)
    {
      return $this->TransactionRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TransactionRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TransactionRow[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TransactionRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TransactionRow Return the current element
     */
    public function current()
    {
      return current($this->TransactionRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TransactionRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TransactionRow);
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
      reset($this->TransactionRow);
    }

    /**
     * Countable implementation
     *
     * @return TransactionRow Return count of elements
     */
    public function count()
    {
      return count($this->TransactionRow);
    }

}
