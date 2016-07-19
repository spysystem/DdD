<?php

namespace DdD\\Stock;

class DeleteImages
{

    /**
     * @var string $koncern
     */
    protected $koncern = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param string $koncern
     * @param string $name
     * @param string $psk
     */
    public function __construct($koncern, $name, $psk)
    {
      $this->koncern = $koncern;
      $this->name = $name;
      $this->psk = $psk;
    }

    /**
     * @return string
     */
    public function getKoncern()
    {
      return $this->koncern;
    }

    /**
     * @param string $koncern
     * @return \DdD\\Stock\DeleteImages
     */
    public function setKoncern($koncern)
    {
      $this->koncern = $koncern;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \DdD\\Stock\DeleteImages
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \DdD\\Stock\DeleteImages
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
