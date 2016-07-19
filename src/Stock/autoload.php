<?php


 function autoload_5171adb6b566c661c36636c0b9f987d8($class)
{
    $classes = array(
        'DdD\\Stock\StockService' => __DIR__ .'/StockService.php',
        'DdD\\Stock\ArticleHeader' => __DIR__ .'/ArticleHeader.php',
        'DdD\\Stock\ArrayOfArticleLine' => __DIR__ .'/ArrayOfArticleLine.php',
        'DdD\\Stock\ArticleLine' => __DIR__ .'/ArticleLine.php',
        'DdD\\Stock\ArrayOfShopStockInfo' => __DIR__ .'/ArrayOfShopStockInfo.php',
        'DdD\\Stock\ShopStockInfo' => __DIR__ .'/ShopStockInfo.php',
        'DdD\\Stock\SimpleShopStockInfo' => __DIR__ .'/SimpleShopStockInfo.php',
        'DdD\\Stock\ArrayOfSimpleShopStockInfo' => __DIR__ .'/ArrayOfSimpleShopStockInfo.php',
        'DdD\\Stock\ArrayOfShipmentConfirmationRequestModel' => __DIR__ .'/ArrayOfShipmentConfirmationRequestModel.php',
        'DdD\\Stock\ShipmentConfirmationRequestModel' => __DIR__ .'/ShipmentConfirmationRequestModel.php',
        'DdD\\Stock\ArrayOfShipmentConfirmation' => __DIR__ .'/ArrayOfShipmentConfirmation.php',
        'DdD\\Stock\ShipmentConfirmation' => __DIR__ .'/ShipmentConfirmation.php',
        'DdD\\Stock\ArrayOfConfirmation' => __DIR__ .'/ArrayOfConfirmation.php',
        'DdD\\Stock\Confirmation' => __DIR__ .'/Confirmation.php',
        'DdD\\Stock\ArrayOfConfirmationItem' => __DIR__ .'/ArrayOfConfirmationItem.php',
        'DdD\\Stock\ConfirmationItem' => __DIR__ .'/ConfirmationItem.php',
        'DdD\\Stock\ConfirmationItemAction' => __DIR__ .'/ConfirmationItemAction.php',
        'DdD\\Stock\ConfirmationStatus' => __DIR__ .'/ConfirmationStatus.php',
        'DdD\\Stock\ShipmentConfirmationStatus' => __DIR__ .'/ShipmentConfirmationStatus.php',
        'DdD\\Stock\DeliveryNote' => __DIR__ .'/DeliveryNote.php',
        'DdD\\Stock\DeliveryNoteNoteState' => __DIR__ .'/DeliveryNoteNoteState.php',
        'DdD\\Stock\ArticleResponse' => __DIR__ .'/ArticleResponse.php',
        'DdD\\Stock\ArticleResponseStatus' => __DIR__ .'/ArticleResponseStatus.php',
        'DdD\\Stock\ArrayOfDeliveryNote' => __DIR__ .'/ArrayOfDeliveryNote.php',
        'DdD\\Stock\ArrayOfArticleResponse' => __DIR__ .'/ArrayOfArticleResponse.php',
        'DdD\\Stock\ArrayOfPriceChange' => __DIR__ .'/ArrayOfPriceChange.php',
        'DdD\\Stock\PriceChange' => __DIR__ .'/PriceChange.php',
        'DdD\\Stock\PriceChangeType' => __DIR__ .'/PriceChangeType.php',
        'DdD\\Stock\ArrayOfPOSInformation' => __DIR__ .'/ArrayOfPOSInformation.php',
        'DdD\\Stock\POSInformation' => __DIR__ .'/POSInformation.php',
        'DdD\\Stock\POSInformationInformationType' => __DIR__ .'/POSInformationInformationType.php',
        'DdD\\Stock\ArrayOfArticleGrouping' => __DIR__ .'/ArrayOfArticleGrouping.php',
        'DdD\\Stock\ArticleGrouping' => __DIR__ .'/ArticleGrouping.php',
        'DdD\\Stock\ArticleGroupType' => __DIR__ .'/ArticleGroupType.php',
        'DdD\\Stock\ArrayOfProductTransfer' => __DIR__ .'/ArrayOfProductTransfer.php',
        'DdD\\Stock\ProductTransfer' => __DIR__ .'/ProductTransfer.php',
        'DdD\\Stock\Client' => __DIR__ .'/Client.php',
        'DdD\\Stock\ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C' => __DIR__ .'/ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C.php',
        'DdD\\Stock\KeyValueOfstringArticleResponsezJ_S5Vm7C' => __DIR__ .'/KeyValueOfstringArticleResponsezJ_S5Vm7C.php',
        'DdD\\Stock\ArrayOflong' => __DIR__ .'/ArrayOflong.php',
        'DdD\\Stock\ArrayOfKeyValueOflongint' => __DIR__ .'/ArrayOfKeyValueOflongint.php',
        'DdD\\Stock\KeyValueOflongint' => __DIR__ .'/KeyValueOflongint.php',
        'DdD\\Stock\ArrayOfint' => __DIR__ .'/ArrayOfint.php',
        'DdD\\Stock\ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1' => __DIR__ .'/ArrayOfKeyValueOfintArrayOfKeyValueOflongintty7Ep6D1.php',
        'DdD\\Stock\KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1' => __DIR__ .'/KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1.php',
        'DdD\\Stock\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'DdD\\Stock\ArrayOfArticleLineValidation' => __DIR__ .'/ArrayOfArticleLineValidation.php',
        'DdD\\Stock\ArticleLineValidation' => __DIR__ .'/ArticleLineValidation.php',
        'DdD\\Stock\MakeDeliveryNote' => __DIR__ .'/MakeDeliveryNote.php',
        'DdD\\Stock\MakeDeliveryNoteResponse' => __DIR__ .'/MakeDeliveryNoteResponse.php',
        'DdD\\Stock\MakeDeliveryNote_Bulk' => __DIR__ .'/MakeDeliveryNote_Bulk.php',
        'DdD\\Stock\MakeDeliveryNote_BulkResponse' => __DIR__ .'/MakeDeliveryNote_BulkResponse.php',
        'DdD\\Stock\ImportDeliveryNoteHistory' => __DIR__ .'/ImportDeliveryNoteHistory.php',
        'DdD\\Stock\ImportDeliveryNoteHistoryResponse' => __DIR__ .'/ImportDeliveryNoteHistoryResponse.php',
        'DdD\\Stock\ArticleAveragePrice' => __DIR__ .'/ArticleAveragePrice.php',
        'DdD\\Stock\ArticleAveragePriceResponse' => __DIR__ .'/ArticleAveragePriceResponse.php',
        'DdD\\Stock\PriceChangeResponse' => __DIR__ .'/PriceChangeResponse.php',
        'DdD\\Stock\StockCount' => __DIR__ .'/StockCount.php',
        'DdD\\Stock\StockCountResponse' => __DIR__ .'/StockCountResponse.php',
        'DdD\\Stock\StockCountByEdbnumber' => __DIR__ .'/StockCountByEdbnumber.php',
        'DdD\\Stock\StockCountByEdbnumberResponse' => __DIR__ .'/StockCountByEdbnumberResponse.php',
        'DdD\\Stock\StockCountInShops' => __DIR__ .'/StockCountInShops.php',
        'DdD\\Stock\StockCountInShopsResponse' => __DIR__ .'/StockCountInShopsResponse.php',
        'DdD\\Stock\StockCountSingleEan' => __DIR__ .'/StockCountSingleEan.php',
        'DdD\\Stock\StockCountSingleEanResponse' => __DIR__ .'/StockCountSingleEanResponse.php',
        'DdD\\Stock\StockCountByParameter' => __DIR__ .'/StockCountByParameter.php',
        'DdD\\Stock\StockCountByParameterResponse' => __DIR__ .'/StockCountByParameterResponse.php',
        'DdD\\Stock\GetFirstMachineNumber' => __DIR__ .'/GetFirstMachineNumber.php',
        'DdD\\Stock\GetFirstMachineNumberResponse' => __DIR__ .'/GetFirstMachineNumberResponse.php',
        'DdD\\Stock\GetLastItemGroupIncludedInSale' => __DIR__ .'/GetLastItemGroupIncludedInSale.php',
        'DdD\\Stock\GetLastItemGroupIncludedInSaleResponse' => __DIR__ .'/GetLastItemGroupIncludedInSaleResponse.php',
        'DdD\\Stock\GetClerkAndShopInfo' => __DIR__ .'/GetClerkAndShopInfo.php',
        'DdD\\Stock\GetClerkAndShopInfoResponse' => __DIR__ .'/GetClerkAndShopInfoResponse.php',
        'DdD\\Stock\GetClientShopsStockInfos' => __DIR__ .'/GetClientShopsStockInfos.php',
        'DdD\\Stock\GetClientShopsStockInfosResponse' => __DIR__ .'/GetClientShopsStockInfosResponse.php',
        'DdD\\Stock\GetSimpleClientShopsStockInfos' => __DIR__ .'/GetSimpleClientShopsStockInfos.php',
        'DdD\\Stock\GetSimpleClientShopsStockInfosResponse' => __DIR__ .'/GetSimpleClientShopsStockInfosResponse.php',
        'DdD\\Stock\GetSuppliers' => __DIR__ .'/GetSuppliers.php',
        'DdD\\Stock\GetSuppliersResponse' => __DIR__ .'/GetSuppliersResponse.php',
        'DdD\\Stock\GetItemgroups' => __DIR__ .'/GetItemgroups.php',
        'DdD\\Stock\GetItemgroupsResponse' => __DIR__ .'/GetItemgroupsResponse.php',
        'DdD\\Stock\GetWebshopArticles' => __DIR__ .'/GetWebshopArticles.php',
        'DdD\\Stock\GetWebshopArticlesResponse' => __DIR__ .'/GetWebshopArticlesResponse.php',
        'DdD\\Stock\GetWebshopArticlesPaged' => __DIR__ .'/GetWebshopArticlesPaged.php',
        'DdD\\Stock\GetWebshopArticlesPagedResponse' => __DIR__ .'/GetWebshopArticlesPagedResponse.php',
        'DdD\\Stock\GetWebshopArticlesSinceLastRequest' => __DIR__ .'/GetWebshopArticlesSinceLastRequest.php',
        'DdD\\Stock\GetWebshopArticlesSinceLastRequestResponse' => __DIR__ .'/GetWebshopArticlesSinceLastRequestResponse.php',
        'DdD\\Stock\GetWebshopArticlesFilterByShopId' => __DIR__ .'/GetWebshopArticlesFilterByShopId.php',
        'DdD\\Stock\GetWebshopArticlesFilterByShopIdResponse' => __DIR__ .'/GetWebshopArticlesFilterByShopIdResponse.php',
        'DdD\\Stock\GetWebshopArticlesSinceEdbNumber' => __DIR__ .'/GetWebshopArticlesSinceEdbNumber.php',
        'DdD\\Stock\GetWebshopArticlesSinceEdbNumberResponse' => __DIR__ .'/GetWebshopArticlesSinceEdbNumberResponse.php',
        'DdD\\Stock\GetWebshopArticlesInEdbNumberRange' => __DIR__ .'/GetWebshopArticlesInEdbNumberRange.php',
        'DdD\\Stock\GetWebshopArticlesInEdbNumberRangeResponse' => __DIR__ .'/GetWebshopArticlesInEdbNumberRangeResponse.php',
        'DdD\\Stock\GetArticleInformation' => __DIR__ .'/GetArticleInformation.php',
        'DdD\\Stock\GetArticleInformationResponse' => __DIR__ .'/GetArticleInformationResponse.php',
        'DdD\\Stock\GetArticleInformationAsObjects' => __DIR__ .'/GetArticleInformationAsObjects.php',
        'DdD\\Stock\GetArticleInformationAsObjectsResponse' => __DIR__ .'/GetArticleInformationAsObjectsResponse.php',
        'DdD\\Stock\ValidateArticleFile' => __DIR__ .'/ValidateArticleFile.php',
        'DdD\\Stock\ValidateArticleFileResponse' => __DIR__ .'/ValidateArticleFileResponse.php',
        'DdD\\Stock\GetBookedLinesOnDeliverynote' => __DIR__ .'/GetBookedLinesOnDeliverynote.php',
        'DdD\\Stock\GetBookedLinesOnDeliverynoteResponse' => __DIR__ .'/GetBookedLinesOnDeliverynoteResponse.php',
        'DdD\\Stock\GetImage' => __DIR__ .'/GetImage.php',
        'DdD\\Stock\GetImageResponse' => __DIR__ .'/GetImageResponse.php',
        'DdD\\Stock\DeleteImages' => __DIR__ .'/DeleteImages.php',
        'DdD\\Stock\DeleteImagesResponse' => __DIR__ .'/DeleteImagesResponse.php',
        'DdD\\Stock\StockValueByBrand' => __DIR__ .'/StockValueByBrand.php',
        'DdD\\Stock\StockValueByBrandResponse' => __DIR__ .'/StockValueByBrandResponse.php',
        'DdD\\Stock\GetOpenProductTransfers' => __DIR__ .'/GetOpenProductTransfers.php',
        'DdD\\Stock\GetOpenProductTransfersResponse' => __DIR__ .'/GetOpenProductTransfersResponse.php',
        'DdD\\Stock\UpdateProductTransfers' => __DIR__ .'/UpdateProductTransfers.php',
        'DdD\\Stock\UpdateProductTransfersResponse' => __DIR__ .'/UpdateProductTransfersResponse.php',
        'DdD\\Stock\GetShipmentConfirmations' => __DIR__ .'/GetShipmentConfirmations.php',
        'DdD\\Stock\GetShipmentConfirmationsResponse' => __DIR__ .'/GetShipmentConfirmationsResponse.php',
        'DdD\\Stock\GetOpenShipments' => __DIR__ .'/GetOpenShipments.php',
        'DdD\\Stock\GetOpenShipmentsResponse' => __DIR__ .'/GetOpenShipmentsResponse.php',
        'DdD\\Stock\GetStockBySupplier' => __DIR__ .'/GetStockBySupplier.php',
        'DdD\\Stock\GetStockBySupplierResponse' => __DIR__ .'/GetStockBySupplierResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5171adb6b566c661c36636c0b9f987d8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
