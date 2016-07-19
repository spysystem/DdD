<?php

namespace DdD\\Stock;

class ArrayOfArticleLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArticleLine[] $ArticleLine
     */
    protected $ArticleLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleLine[]
     */
    public function getArticleLine()
    {
      return $this->ArticleLine;
    }

    /**
     * @param ArticleLine[] $ArticleLine
     * @return \DdD\\Stock\ArrayOfArticleLine
     */
    public function setArticleLine(array $ArticleLine = null)
    {
      $this->ArticleLine = $ArticleLine;
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
      return isset($this->ArticleLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArticleLine
     */
    public function offsetGet($offset)
    {
      return $this->ArticleLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArticleLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ArticleLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ArticleLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArticleLine Return the current element
     */
    public function current()
    {
      return current($this->ArticleLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArticleLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArticleLine);
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
      reset($this->ArticleLine);
    }

    /**
     * Countable implementation
     *
     * @return ArticleLine Return count of elements
     */
    public function count()
    {
      return count($this->ArticleLine);
    }

}
