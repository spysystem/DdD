<?php

namespace DdD\\Stock;

class GetSuppliers
{

    /**
     * @var int $groupid
     */
    protected $groupid = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $groupid
     * @param string $psk
     */
    public function __construct($groupid, $psk)
    {
      $this->groupid = $groupid;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getGroupid()
    {
      return $this->groupid;
    }

    /**
     * @param int $groupid
     * @return \DdD\\Stock\GetSuppliers
     */
    public function setGroupid($groupid)
    {
      $this->groupid = $groupid;
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
     * @return \DdD\\Stock\GetSuppliers
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
