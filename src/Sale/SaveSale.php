<?php

namespace DdD\\Sale;

class SaveSale
{

    /**
     * @var Sale $sale
     */
    protected $sale = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param Sale $sale
     * @param string $psk
     */
    public function __construct($sale, $psk)
    {
      $this->sale = $sale;
      $this->psk = $psk;
    }

    /**
     * @return Sale
     */
    public function getSale()
    {
      return $this->sale;
    }

    /**
     * @param Sale $sale
     * @return \DdD\\Sale\SaveSale
     */
    public function setSale($sale)
    {
      $this->sale = $sale;
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
     * @return \DdD\\Sale\SaveSale
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
