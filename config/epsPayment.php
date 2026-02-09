<?php

// EPS Payment configuration

return [
	'apiCredentials' => [
		'EPSUserName' => env("EPSUserName"),
        'EPSPassword' => env("EPSPassword"),
        'EPSDeviceTypeID' => env("EPSDeviceTypeID"),
        'EPSHashkey' => env("EPSHashkey"),
        'EPSMerchentID' => env("EPSMerchentID"),
        'EPSStoreID' => env("EPSStoreID"),
	],
	'apiUrl' => [
		'SignIn' => "/v1/SignIn",
		'GetToken' => "/v1/Auth/GetToken",
		'Initialize' => "/v1/EPSEngine/InitializeEPS",
		'CheckPaymentStatus' => "/v1/EPSEngine/CheckMerchantTransactionStatus?merchantTransactionId="
	],
	'EPSBaseURL' => env('EPSBaseURL')
];