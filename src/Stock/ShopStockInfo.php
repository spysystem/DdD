<?php

namespace DdD\\Stock;

class ShopStockInfo extends SimpleShopStockInfo
{

    /**
     * @var int $GroupId
     */
    protected $GroupId = null;

    /**
     * @var string $ItemGroupDescription
     */
    protected $ItemGroupDescription = null;

    /**
     * @var int $ItemGroupId
     */
    protected $ItemGroupId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
      return $this->GroupId;
    }

    /**
     * @param int $GroupId
     * @return \DdD\\Stock\ShopStockInfo
     */
    public function setGroupId($GroupId)
    {
      $this->GroupId = $GroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemGroupDescription()
    {
      return $this->ItemGroupDescription;
    }

    /**
     * @param string $ItemGroupDescription
     * @return \DdD\\Stock\ShopStockInfo
     */
    public function setItemGroupDescription($ItemGroupDescription)
    {
      $this->ItemGroupDescription = $ItemGroupDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemGroupId()
    {
      return $this->ItemGroupId;
    }

    /**
     * @param int $ItemGroupId
     * @return \DdD\\Stock\ShopStockInfo
     */
    public function setItemGroupId($ItemGroupId)
    {
      $this->ItemGroupId = $ItemGroupId;
      return $this;
    }

}
