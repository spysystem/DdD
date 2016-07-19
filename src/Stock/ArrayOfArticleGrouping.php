<?php

namespace DdD\\Stock;

class ArrayOfArticleGrouping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArticleGrouping[] $ArticleGrouping
     */
    protected $ArticleGrouping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleGrouping[]
     */
    public function getArticleGrouping()
    {
      return $this->ArticleGrouping;
    }

    /**
     * @param ArticleGrouping[] $ArticleGrouping
     * @return \DdD\\Stock\ArrayOfArticleGrouping
     */
    public function setArticleGrouping(array $ArticleGrouping = null)
    {
      $this->ArticleGrouping = $ArticleGrouping;
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
      return isset($this->ArticleGrouping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArticleGrouping
     */
    public function offsetGet($offset)
    {
      return $this->ArticleGrouping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArticleGrouping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ArticleGrouping[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ArticleGrouping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArticleGrouping Return the current element
     */
    public function current()
    {
      return current($this->ArticleGrouping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArticleGrouping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArticleGrouping);
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
      reset($this->ArticleGrouping);
    }

    /**
     * Countable implementation
     *
     * @return ArticleGrouping Return count of elements
     */
    public function count()
    {
      return count($this->ArticleGrouping);
    }

}
