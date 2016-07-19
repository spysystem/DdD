<?php

namespace DdD\Stock;

class KeyValueOfstringArticleResponsezJ_S5Vm7C
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var ArticleResponse $Value
     */
    protected $Value = null;

    /**
     * @param string $Key
     * @param ArticleResponse $Value
     */
    public function __construct($Key, $Value)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \DdD\Stock\KeyValueOfstringArticleResponsezJ_S5Vm7C
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArticleResponse
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param ArticleResponse $Value
     * @return \DdD\Stock\KeyValueOfstringArticleResponsezJ_S5Vm7C
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
