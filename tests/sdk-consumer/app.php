<?php

// phpcs:disable
require_once __DIR__ . '/vendor/autoload.php';
// phpcs:enable

use \SwedbankPay\Api\Client;

$client = new \SwedbankPay\Api\Client\Client();
$version = new \SwedbankPay\Api\Client\Version();
$versionNumber = $version->getVersion();

// phpcs:disable
echo "sdkversion: $versionNumber";
// phpcs:enable

?>
