<?php

namespace SwedbankPay\Api\Service\Trustly\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\SaleObject;
use SwedbankPay\Api\Service\Request;

class CreateSale extends Request
{
    public function setup()
    {
        $this->setRequestMethod('POST');
        $this->setRequestEndpoint('/psp/trustly/payments/%s/sales');
        $this->setResponseResourceFQCN(SaleObject::class);
    }
}
