<?php

namespace DdD\\Sale;

class SaveSale_Bulk
{

    /**
     * @var ArrayOfSale $sales
     */
    protected $sales = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param ArrayOfSale $sales
     * @param string $psk
     */
    public function __construct($sales, $psk)
    {
      $this->sales = $sales;
      $this->psk = $psk;
    }

    /**
     * @return ArrayOfSale
     */
    public function getSales()
    {
      return $this->sales;
    }

    /**
     * @param ArrayOfSale $sales
     * @return \DdD\\Sale\SaveSale_Bulk
     */
    public function setSales($sales)
    {
      $this->sales = $sales;
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
     * @return \DdD\\Sale\SaveSale_Bulk
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
