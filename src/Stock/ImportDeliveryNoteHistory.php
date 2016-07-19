<?php

namespace DdD\Stock;

class ImportDeliveryNoteHistory
{

    /**
     * @var ArrayOfDeliveryNote $deliveryNotes
     */
    protected $deliveryNotes = null;

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var boolean $autoUpdateStock
     */
    protected $autoUpdateStock = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param ArrayOfDeliveryNote $deliveryNotes
     * @param int $client
     * @param boolean $autoUpdateStock
     * @param string $psk
     */
    public function __construct($deliveryNotes, $client, $autoUpdateStock, $psk)
    {
      $this->deliveryNotes = $deliveryNotes;
      $this->client = $client;
      $this->autoUpdateStock = $autoUpdateStock;
      $this->psk = $psk;
    }

    /**
     * @return ArrayOfDeliveryNote
     */
    public function getDeliveryNotes()
    {
      return $this->deliveryNotes;
    }

    /**
     * @param ArrayOfDeliveryNote $deliveryNotes
     * @return \DdD\Stock\ImportDeliveryNoteHistory
     */
    public function setDeliveryNotes($deliveryNotes)
    {
      $this->deliveryNotes = $deliveryNotes;
      return $this;
    }

    /**
     * @return int
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param int $client
     * @return \DdD\Stock\ImportDeliveryNoteHistory
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoUpdateStock()
    {
      return $this->autoUpdateStock;
    }

    /**
     * @param boolean $autoUpdateStock
     * @return \DdD\Stock\ImportDeliveryNoteHistory
     */
    public function setAutoUpdateStock($autoUpdateStock)
    {
      $this->autoUpdateStock = $autoUpdateStock;
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
     * @return \DdD\Stock\ImportDeliveryNoteHistory
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
