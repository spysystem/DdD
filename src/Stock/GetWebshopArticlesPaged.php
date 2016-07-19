<?php

namespace DdD\\Stock;

class GetWebshopArticlesPaged
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var int $shopid
     */
    protected $shopid = null;

    /**
     * @var int $sinceEdbNumber
     */
    protected $sinceEdbNumber = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $groupId
     * @param int $shopid
     * @param int $sinceEdbNumber
     * @param string $psk
     */
    public function __construct($groupId, $shopid, $sinceEdbNumber, $psk)
    {
      $this->groupId = $groupId;
      $this->shopid = $shopid;
      $this->sinceEdbNumber = $sinceEdbNumber;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return \DdD\\Stock\GetWebshopArticlesPaged
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getShopid()
    {
      return $this->shopid;
    }

    /**
     * @param int $shopid
     * @return \DdD\\Stock\GetWebshopArticlesPaged
     */
    public function setShopid($shopid)
    {
      $this->shopid = $shopid;
      return $this;
    }

    /**
     * @return int
     */
    public function getSinceEdbNumber()
    {
      return $this->sinceEdbNumber;
    }

    /**
     * @param int $sinceEdbNumber
     * @return \DdD\\Stock\GetWebshopArticlesPaged
     */
    public function setSinceEdbNumber($sinceEdbNumber)
    {
      $this->sinceEdbNumber = $sinceEdbNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPsk()
    {
      return $this->psk;
    }

    /**
     * @param string $psk
     * @return \DdD\\Stock\GetWebshopArticlesPaged
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
