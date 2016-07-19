<?php

namespace DdD\\Stock;

class ArticleGrouping
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArticleGroupType $TypeOfGrouping
     */
    protected $TypeOfGrouping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \DdD\\Stock\ArticleGrouping
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \DdD\\Stock\ArticleGrouping
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArticleGroupType
     */
    public function getTypeOfGrouping()
    {
      return $this->TypeOfGrouping;
    }

    /**
     * @param ArticleGroupType $TypeOfGrouping
     * @return \DdD\\Stock\ArticleGrouping
     */
    public function setTypeOfGrouping($TypeOfGrouping)
    {
      $this->TypeOfGrouping = $TypeOfGrouping;
      return $this;
    }

}
