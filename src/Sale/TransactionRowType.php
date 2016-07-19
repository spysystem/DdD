<?php

namespace DdD\\Sale;

class TransactionRowType
{
    const __default = 'InventoryCorrectionCOGS';
    const InventoryCorrectionCOGS = 'InventoryCorrectionCOGS';
    const InventoryCorrectionPurchase = 'InventoryCorrectionPurchase';
    const ManualStockCorrectionCOGS = 'ManualStockCorrectionCOGS';
    const ManualStockCorrectionPurchase = 'ManualStockCorrectionPurchase';
    const Purchase = 'Purchase';
    const ItemTransfer = 'ItemTransfer';
    const Sale = 'Sale';
    const SaleOnBarcodes = 'SaleOnBarcodes';
    const SaleOnGroup = 'SaleOnGroup';
    const RegistrationOnOtherGroups = 'RegistrationOnOtherGroups';
    const Costs = 'Costs';
    const Payments = 'Payments';


}
