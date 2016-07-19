<?php

namespace DdD\Stock;

class StockService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArticleHeader' => 'DdD\\Stock\\ArticleHeader',
      'ArrayOfArticleLine' => 'DdD\\Stock\\ArrayOfArticleLine',
      'ArticleLine' => 'DdD\\Stock\\ArticleLine',
      'ArrayOfShopStockInfo' => 'DdD\\Stock\\ArrayOfShopStockInfo',
      'ShopStockInfo' => 'DdD\\Stock\\ShopStockInfo',
      'SimpleShopStockInfo' => 'DdD\\Stock\\SimpleShopStockInfo',
      'ArrayOfSimpleShopStockInfo' => 'DdD\\Stock\\ArrayOfSimpleShopStockInfo',
      'ArrayOfShipmentConfirmationRequestModel' => 'DdD\\Stock\\ArrayOfShipmentConfirmationRequestModel',
      'ShipmentConfirmationRequestModel' => 'DdD\\Stock\\ShipmentConfirmationRequestModel',
      'ArrayOfShipmentConfirmation' => 'DdD\\Stock\\ArrayOfShipmentConfirmation',
      'ShipmentConfirmation' => 'DdD\\Stock\\ShipmentConfirmation',
      'ArrayOfConfirmation' => 'DdD\\Stock\\ArrayOfConfirmation',
      'Confirmation' => 'DdD\\Stock\\Confirmation',
      'ArrayOfConfirmationItem' => 'DdD\\Stock\\ArrayOfConfirmationItem',
      'ConfirmationItem' => 'DdD\\Stock\\ConfirmationItem',
      'DeliveryNote' => 'DdD\\Stock\\DeliveryNote',
      'ArticleResponse' => 'DdD\\Stock\\ArticleResponse',
      'ArrayOfDeliveryNote' => 'DdD\\Stock\\ArrayOfDeliveryNote',
      'ArrayOfArticleResponse' => 'DdD\\Stock\\ArrayOfArticleResponse',
      'ArrayOfPriceChange' => 'DdD\\Stock\\ArrayOfPriceChange',
      'PriceChange' => 'DdD\\Stock\\PriceChange',
      'ArrayOfPOSInformation' => 'DdD\\Stock\\ArrayOfPOSInformation',
      'POSInformation' => 'DdD\\Stock\\POSInformation',
      'ArrayOfArticleGrouping' => 'DdD\\Stock\\ArrayOfArticleGrouping',
      'ArticleGrouping' => 'DdD\\Stock\\ArticleGrouping',
      'ArrayOfProductTransfer' => 'DdD\\Stock\\ArrayOfProductTransfer',
      'ProductTransfer' => 'DdD\\Stock\\ProductTransfer',
      'Client' => 'DdD\\Stock\\Client',
      'ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C' => 'DdD\\Stock\\ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C',
      'KeyValueOfstringArticleResponsezJ_S5Vm7C' => 'DdD\\Stock\\KeyValueOfstringArticleResponsezJ_S5Vm7C',
      'ArrayOflong' => 'DdD\\Stock\\ArrayOflong',
      'ArrayOfKeyValueOflongint' => 'DdD\\Stock\\ArrayOfKeyValueOflongint',
      'KeyValueOflongint' => 'DdD\\Stock\\KeyValueOflongint',
      'ArrayOfint' => 'DdD\\Stock\\ArrayOfint',
      'ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1' => 'DdD\\Stock\\ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1',
      'KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1' => 'DdD\\Stock\\KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1',
      'ArrayOfstring' => 'DdD\\Stock\\ArrayOfstring',
      'ArrayOfArticleLineValidation' => 'DdD\\Stock\\ArrayOfArticleLineValidation',
      'ArticleLineValidation' => 'DdD\\Stock\\ArticleLineValidation',
      'MakeDeliveryNote' => 'DdD\\Stock\\MakeDeliveryNote',
      'MakeDeliveryNoteResponse' => 'DdD\\Stock\\MakeDeliveryNoteResponse',
      'MakeDeliveryNote_Bulk' => 'DdD\\Stock\\MakeDeliveryNote_Bulk',
      'MakeDeliveryNote_BulkResponse' => 'DdD\\Stock\\MakeDeliveryNote_BulkResponse',
      'ImportDeliveryNoteHistory' => 'DdD\\Stock\\ImportDeliveryNoteHistory',
      'ImportDeliveryNoteHistoryResponse' => 'DdD\\Stock\\ImportDeliveryNoteHistoryResponse',
      'ArticleAveragePrice' => 'DdD\\Stock\\ArticleAveragePrice',
      'ArticleAveragePriceResponse' => 'DdD\\Stock\\ArticleAveragePriceResponse',
      'PriceChangeResponse' => 'DdD\\Stock\\PriceChangeResponse',
      'StockCount' => 'DdD\\Stock\\StockCount',
      'StockCountResponse' => 'DdD\\Stock\\StockCountResponse',
      'StockCountByEdbnumber' => 'DdD\\Stock\\StockCountByEdbnumber',
      'StockCountByEdbnumberResponse' => 'DdD\\Stock\\StockCountByEdbnumberResponse',
      'StockCountInShops' => 'DdD\\Stock\\StockCountInShops',
      'StockCountInShopsResponse' => 'DdD\\Stock\\StockCountInShopsResponse',
      'StockCountSingleEan' => 'DdD\\Stock\\StockCountSingleEan',
      'StockCountSingleEanResponse' => 'DdD\\Stock\\StockCountSingleEanResponse',
      'StockCountByParameter' => 'DdD\\Stock\\StockCountByParameter',
      'StockCountByParameterResponse' => 'DdD\\Stock\\StockCountByParameterResponse',
      'GetFirstMachineNumber' => 'DdD\\Stock\\GetFirstMachineNumber',
      'GetFirstMachineNumberResponse' => 'DdD\\Stock\\GetFirstMachineNumberResponse',
      'GetLastItemGroupIncludedInSale' => 'DdD\\Stock\\GetLastItemGroupIncludedInSale',
      'GetLastItemGroupIncludedInSaleResponse' => 'DdD\\Stock\\GetLastItemGroupIncludedInSaleResponse',
      'GetClerkAndShopInfo' => 'DdD\\Stock\\GetClerkAndShopInfo',
      'GetClerkAndShopInfoResponse' => 'DdD\\Stock\\GetClerkAndShopInfoResponse',
      'GetClientShopsStockInfos' => 'DdD\\Stock\\GetClientShopsStockInfos',
      'GetClientShopsStockInfosResponse' => 'DdD\\Stock\\GetClientShopsStockInfosResponse',
      'GetSimpleClientShopsStockInfos' => 'DdD\\Stock\\GetSimpleClientShopsStockInfos',
      'GetSimpleClientShopsStockInfosResponse' => 'DdD\\Stock\\GetSimpleClientShopsStockInfosResponse',
      'GetSuppliers' => 'DdD\\Stock\\GetSuppliers',
      'GetSuppliersResponse' => 'DdD\\Stock\\GetSuppliersResponse',
      'GetItemgroups' => 'DdD\\Stock\\GetItemgroups',
      'GetItemgroupsResponse' => 'DdD\\Stock\\GetItemgroupsResponse',
      'GetWebshopArticles' => 'DdD\\Stock\\GetWebshopArticles',
      'GetWebshopArticlesResponse' => 'DdD\\Stock\\GetWebshopArticlesResponse',
      'GetWebshopArticlesPaged' => 'DdD\\Stock\\GetWebshopArticlesPaged',
      'GetWebshopArticlesPagedResponse' => 'DdD\\Stock\\GetWebshopArticlesPagedResponse',
      'GetWebshopArticlesSinceLastRequest' => 'DdD\\Stock\\GetWebshopArticlesSinceLastRequest',
      'GetWebshopArticlesSinceLastRequestResponse' => 'DdD\\Stock\\GetWebshopArticlesSinceLastRequestResponse',
      'GetWebshopArticlesFilterByShopId' => 'DdD\\Stock\\GetWebshopArticlesFilterByShopId',
      'GetWebshopArticlesFilterByShopIdResponse' => 'DdD\\Stock\\GetWebshopArticlesFilterByShopIdResponse',
      'GetWebshopArticlesSinceEdbNumber' => 'DdD\\Stock\\GetWebshopArticlesSinceEdbNumber',
      'GetWebshopArticlesSinceEdbNumberResponse' => 'DdD\\Stock\\GetWebshopArticlesSinceEdbNumberResponse',
      'GetWebshopArticlesInEdbNumberRange' => 'DdD\\Stock\\GetWebshopArticlesInEdbNumberRange',
      'GetWebshopArticlesInEdbNumberRangeResponse' => 'DdD\\Stock\\GetWebshopArticlesInEdbNumberRangeResponse',
      'GetArticleInformation' => 'DdD\\Stock\\GetArticleInformation',
      'GetArticleInformationResponse' => 'DdD\\Stock\\GetArticleInformationResponse',
      'GetArticleInformationAsObjects' => 'DdD\\Stock\\GetArticleInformationAsObjects',
      'GetArticleInformationAsObjectsResponse' => 'DdD\\Stock\\GetArticleInformationAsObjectsResponse',
      'ValidateArticleFile' => 'DdD\\Stock\\ValidateArticleFile',
      'ValidateArticleFileResponse' => 'DdD\\Stock\\ValidateArticleFileResponse',
      'GetBookedLinesOnDeliverynote' => 'DdD\\Stock\\GetBookedLinesOnDeliverynote',
      'GetBookedLinesOnDeliverynoteResponse' => 'DdD\\Stock\\GetBookedLinesOnDeliverynoteResponse',
      'GetImage' => 'DdD\\Stock\\GetImage',
      'GetImageResponse' => 'DdD\\Stock\\GetImageResponse',
      'DeleteImages' => 'DdD\\Stock\\DeleteImages',
      'DeleteImagesResponse' => 'DdD\\Stock\\DeleteImagesResponse',
      'StockValueByBrand' => 'DdD\\Stock\\StockValueByBrand',
      'StockValueByBrandResponse' => 'DdD\\Stock\\StockValueByBrandResponse',
      'GetOpenProductTransfers' => 'DdD\\Stock\\GetOpenProductTransfers',
      'GetOpenProductTransfersResponse' => 'DdD\\Stock\\GetOpenProductTransfersResponse',
      'UpdateProductTransfers' => 'DdD\\Stock\\UpdateProductTransfers',
      'UpdateProductTransfersResponse' => 'DdD\\Stock\\UpdateProductTransfersResponse',
      'GetShipmentConfirmations' => 'DdD\\Stock\\GetShipmentConfirmations',
      'GetShipmentConfirmationsResponse' => 'DdD\\Stock\\GetShipmentConfirmationsResponse',
      'GetOpenShipments' => 'DdD\\Stock\\GetOpenShipments',
      'GetOpenShipmentsResponse' => 'DdD\\Stock\\GetOpenShipmentsResponse',
      'GetStockBySupplier' => 'DdD\\Stock\\GetStockBySupplier',
      'GetStockBySupplierResponse' => 'DdD\\Stock\\GetStockBySupplierResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://api.dddadmin.com/StockService.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param MakeDeliveryNote $parameters
     * @return MakeDeliveryNoteResponse
     */
    public function MakeDeliveryNote(MakeDeliveryNote $parameters)
    {
      return $this->__soapCall('MakeDeliveryNote', array($parameters));
    }

    /**
     * @param MakeDeliveryNote_Bulk $parameters
     * @return MakeDeliveryNote_BulkResponse
     */
    public function MakeDeliveryNote_Bulk(MakeDeliveryNote_Bulk $parameters)
    {
      return $this->__soapCall('MakeDeliveryNote_Bulk', array($parameters));
    }

    /**
     * @param ImportDeliveryNoteHistory $parameters
     * @return ImportDeliveryNoteHistoryResponse
     */
    public function ImportDeliveryNoteHistory(ImportDeliveryNoteHistory $parameters)
    {
      return $this->__soapCall('ImportDeliveryNoteHistory', array($parameters));
    }

    /**
     * @param ArticleAveragePrice $parameters
     * @return ArticleAveragePriceResponse
     */
    public function ArticleAveragePrice(ArticleAveragePrice $parameters)
    {
      return $this->__soapCall('ArticleAveragePrice', array($parameters));
    }

    /**
     * @param PriceChange $parameters
     * @return PriceChangeResponse
     */
    public function PriceChange(PriceChange $parameters)
    {
      return $this->__soapCall('PriceChange', array($parameters));
    }

    /**
     * @param StockCount $parameters
     * @return StockCountResponse
     */
    public function StockCount(StockCount $parameters)
    {
      return $this->__soapCall('StockCount', array($parameters));
    }

    /**
     * @param StockCountByEdbnumber $parameters
     * @return StockCountByEdbnumberResponse
     */
    public function StockCountByEdbnumber(StockCountByEdbnumber $parameters)
    {
      return $this->__soapCall('StockCountByEdbnumber', array($parameters));
    }

    /**
     * @param StockCountInShops $parameters
     * @return StockCountInShopsResponse
     */
    public function StockCountInShops(StockCountInShops $parameters)
    {
      return $this->__soapCall('StockCountInShops', array($parameters));
    }

    /**
     * @param StockCountSingleEan $parameters
     * @return StockCountSingleEanResponse
     */
    public function StockCountSingleEan(StockCountSingleEan $parameters)
    {
      return $this->__soapCall('StockCountSingleEan', array($parameters));
    }

    /**
     * @param StockCountByParameter $parameters
     * @return StockCountByParameterResponse
     */
    public function StockCountByParameter(StockCountByParameter $parameters)
    {
      return $this->__soapCall('StockCountByParameter', array($parameters));
    }

    /**
     * @param GetFirstMachineNumber $parameters
     * @return GetFirstMachineNumberResponse
     */
    public function GetFirstMachineNumber(GetFirstMachineNumber $parameters)
    {
      return $this->__soapCall('GetFirstMachineNumber', array($parameters));
    }

    /**
     * @param GetLastItemGroupIncludedInSale $parameters
     * @return GetLastItemGroupIncludedInSaleResponse
     */
    public function GetLastItemGroupIncludedInSale(GetLastItemGroupIncludedInSale $parameters)
    {
      return $this->__soapCall('GetLastItemGroupIncludedInSale', array($parameters));
    }

    /**
     * @param GetClerkAndShopInfo $parameters
     * @return GetClerkAndShopInfoResponse
     */
    public function GetClerkAndShopInfo(GetClerkAndShopInfo $parameters)
    {
      return $this->__soapCall('GetClerkAndShopInfo', array($parameters));
    }

    /**
     * @param GetClientShopsStockInfos $parameters
     * @return GetClientShopsStockInfosResponse
     */
    public function GetClientShopsStockInfos(GetClientShopsStockInfos $parameters)
    {
      return $this->__soapCall('GetClientShopsStockInfos', array($parameters));
    }

    /**
     * @param GetSimpleClientShopsStockInfos $parameters
     * @return GetSimpleClientShopsStockInfosResponse
     */
    public function GetSimpleClientShopsStockInfos(GetSimpleClientShopsStockInfos $parameters)
    {
      return $this->__soapCall('GetSimpleClientShopsStockInfos', array($parameters));
    }

    /**
     * @param GetSuppliers $parameters
     * @return GetSuppliersResponse
     */
    public function GetSuppliers(GetSuppliers $parameters)
    {
      return $this->__soapCall('GetSuppliers', array($parameters));
    }

    /**
     * @param GetItemgroups $parameters
     * @return GetItemgroupsResponse
     */
    public function GetItemgroups(GetItemgroups $parameters)
    {
      return $this->__soapCall('GetItemgroups', array($parameters));
    }

    /**
     * @param GetWebshopArticles $parameters
     * @return GetWebshopArticlesResponse
     */
    public function GetWebshopArticles(GetWebshopArticles $parameters)
    {
      return $this->__soapCall('GetWebshopArticles', array($parameters));
    }

    /**
     * @param GetWebshopArticlesPaged $parameters
     * @return GetWebshopArticlesPagedResponse
     */
    public function GetWebshopArticlesPaged(GetWebshopArticlesPaged $parameters)
    {
      return $this->__soapCall('GetWebshopArticlesPaged', array($parameters));
    }

    /**
     * @param GetWebshopArticlesSinceLastRequest $parameters
     * @return GetWebshopArticlesSinceLastRequestResponse
     */
    public function GetWebshopArticlesSinceLastRequest(GetWebshopArticlesSinceLastRequest $parameters)
    {
      return $this->__soapCall('GetWebshopArticlesSinceLastRequest', array($parameters));
    }

    /**
     * @param GetWebshopArticlesFilterByShopId $parameters
     * @return GetWebshopArticlesFilterByShopIdResponse
     */
    public function GetWebshopArticlesFilterByShopId(GetWebshopArticlesFilterByShopId $parameters)
    {
      return $this->__soapCall('GetWebshopArticlesFilterByShopId', array($parameters));
    }

    /**
     * @param GetWebshopArticlesSinceEdbNumber $parameters
     * @return GetWebshopArticlesSinceEdbNumberResponse
     */
    public function GetWebshopArticlesSinceEdbNumber(GetWebshopArticlesSinceEdbNumber $parameters)
    {
      return $this->__soapCall('GetWebshopArticlesSinceEdbNumber', array($parameters));
    }

    /**
     * @param GetWebshopArticlesInEdbNumberRange $parameters
     * @return GetWebshopArticlesInEdbNumberRangeResponse
     */
    public function GetWebshopArticlesInEdbNumberRange(GetWebshopArticlesInEdbNumberRange $parameters)
    {
      return $this->__soapCall('GetWebshopArticlesInEdbNumberRange', array($parameters));
    }

    /**
     * @param GetArticleInformation $parameters
     * @return GetArticleInformationResponse
     */
    public function GetArticleInformation(GetArticleInformation $parameters)
    {
      return $this->__soapCall('GetArticleInformation', array($parameters));
    }

    /**
     * @param GetArticleInformationAsObjects $parameters
     * @return GetArticleInformationAsObjectsResponse
     */
    public function GetArticleInformationAsObjects(GetArticleInformationAsObjects $parameters)
    {
      return $this->__soapCall('GetArticleInformationAsObjects', array($parameters));
    }

    /**
     * @param ValidateArticleFile $parameters
     * @return ValidateArticleFileResponse
     */
    public function ValidateArticleFile(ValidateArticleFile $parameters)
    {
      return $this->__soapCall('ValidateArticleFile', array($parameters));
    }

    /**
     * @param GetBookedLinesOnDeliverynote $parameters
     * @return GetBookedLinesOnDeliverynoteResponse
     */
    public function GetBookedLinesOnDeliverynote(GetBookedLinesOnDeliverynote $parameters)
    {
      return $this->__soapCall('GetBookedLinesOnDeliverynote', array($parameters));
    }

    /**
     * @param GetImage $parameters
     * @return GetImageResponse
     */
    public function GetImage(GetImage $parameters)
    {
      return $this->__soapCall('GetImage', array($parameters));
    }

    /**
     * @param DeleteImages $parameters
     * @return DeleteImagesResponse
     */
    public function DeleteImages(DeleteImages $parameters)
    {
      return $this->__soapCall('DeleteImages', array($parameters));
    }

    /**
     * @param StockValueByBrand $parameters
     * @return StockValueByBrandResponse
     */
    public function StockValueByBrand(StockValueByBrand $parameters)
    {
      return $this->__soapCall('StockValueByBrand', array($parameters));
    }

    /**
     * @param GetOpenProductTransfers $parameters
     * @return GetOpenProductTransfersResponse
     */
    public function GetOpenProductTransfers(GetOpenProductTransfers $parameters)
    {
      return $this->__soapCall('GetOpenProductTransfers', array($parameters));
    }

    /**
     * @param UpdateProductTransfers $parameters
     * @return UpdateProductTransfersResponse
     */
    public function UpdateProductTransfers(UpdateProductTransfers $parameters)
    {
      return $this->__soapCall('UpdateProductTransfers', array($parameters));
    }

    /**
     * @param GetShipmentConfirmations $parameters
     * @return GetShipmentConfirmationsResponse
     */
    public function GetShipmentConfirmations(GetShipmentConfirmations $parameters)
    {
      return $this->__soapCall('GetShipmentConfirmations', array($parameters));
    }

    /**
     * @param GetOpenShipments $parameters
     * @return GetOpenShipmentsResponse
     */
    public function GetOpenShipments(GetOpenShipments $parameters)
    {
      return $this->__soapCall('GetOpenShipments', array($parameters));
    }

    /**
     * @param GetStockBySupplier $parameters
     * @return GetStockBySupplierResponse
     */
    public function GetStockBySupplier(GetStockBySupplier $parameters)
    {
      return $this->__soapCall('GetStockBySupplier', array($parameters));
    }

}
