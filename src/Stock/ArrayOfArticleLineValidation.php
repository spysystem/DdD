<?php

namespace DdD\\Stock;

class ArrayOfArticleLineValidation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArticleLineValidation[] $ArticleLineValidation
     */
    protected $ArticleLineValidation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleLineValidation[]
     */
    public function getArticleLineValidation()
    {
      return $this->ArticleLineValidation;
    }

    /**
     * @param ArticleLineValidation[] $ArticleLineValidation
     * @return \DdD\\Stock\ArrayOfArticleLineValidation
     */
    public function setArticleLineValidation(array $ArticleLineValidation = null)
    {
      $this->ArticleLineValidation = $ArticleLineValidation;
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
      return isset($this->ArticleLineValidation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArticleLineValidation
     */
    public function offsetGet($offset)
    {
      return $this->ArticleLineValidation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArticleLineValidation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ArticleLineValidation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ArticleLineValidation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArticleLineValidation Return the current element
     */
    public function current()
    {
      return current($this->ArticleLineValidation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArticleLineValidation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArticleLineValidation);
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
      reset($this->ArticleLineValidation);
    }

    /**
     * Countable implementation
     *
     * @return ArticleLineValidation Return count of elements
     */
    public function count()
    {
      return count($this->ArticleLineValidation);
    }

}
