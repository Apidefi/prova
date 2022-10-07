<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '54877DF3C1CED7ACAFDD509C1A1C9408',
	'url' => 'https://trial-4087.websitex5.me/',
	'homepage_url' => 'https://trial-4087.websitex5.me/home.html',
	'icon' => '',
	'version' => '2022.2.9.0',
	'sitename' => 'Nuovo Progetto',
	'lang_code' => 'it-IT',
	'public_folder' => '',
	'salt' => '4vny2exocm5jehjqwd62s8m4ntsk79ap2gugzw',
	'common_email_sender_addres' => 'noreply@trial-4087.websitex5.me'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => true,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"sze843cf-imCpt\">Parola di controllo:</label><br />
			<input type=\"text\" id=\"sze843cf-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_93rnkxwk.png',
	'notification_public_key' => '7a771920ee3c933e',
	'notification_private_key' => '76b491558790da15',
	'enable_manager_notifications' => true,
	'theme' => 'fall',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'cq983hss' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'xiq7cw5n_db',
		'user' => 'xiq7cw5n_db',
		'password' => 'hQ3|fA9-hG1)',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://trial-4087.websitex5.me/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(131, 144, 158, 1); background-color: rgba(235, 239, 242, 1); padding: 8px 4px 8px 4px; border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(37, 58, 88, 1) rgba(37, 58, 88, 1) rgba(37, 58, 88, 1) rgba(37, 58, 88, 1); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo ordine, le ricordiamo che siamo in attesa del pagamento.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati, i dati di fatturazione e spedizione e le istruzioni per poter effettuare il pagamento.',
	'email_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale.',
	'email_payment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto, le confermiamo che abbiamo ricevuto il suo pagamento e che l’ordine verrà evaso il prima possibile.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati e i dati di fatturazione e spedizione.',
	'email_payment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_digital_shipment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto le inviamo l\'elenco dei download link relativo ai prodotti ordinati:',
	'email_digital_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_physical_shipment_opening' => 'Gentile Cliente,<br />ringraziandola per il Suo acquisto, le confermiamo che l’ordine è stato correttamente evaso e la merce è stata spedita.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati:',
	'email_physical_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(64, 64, 64, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	'gke80sb8' => array(
		'id' => 'gke80sb8',
		'name' => 'Product 1',
		'category' => 'qqobnafw',
		'categoryPath' => array(
			'qqobnafw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Laoreet faucibus et, viverra in cursus, massa sit nulla dictumst.',
		'sku' => '',
		'options' => array(),
		'price' => 250.00,
		'singleFullPrice' => '208.33',
		'singleFullPricePlusVat' => '250.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/living-room-2155376_960_720.jpg',
				'width' => 502,
				'height' => 510
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://trial-4087.websitex5.me/images/living-room-2155376_960_720.jpg',
			'width' => 502,
			'height' => 510
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/living-room-2155376_960_720.jpg\',\'width\': 502,\'height\': 510}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/living-room-2155376_960_720.jpg\',\'width\': 502,\'height\': 510}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/living-room-2155376_960_720.jpg\',\'width\': 502,\'height\': 510}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/living-room-2155376_960_720.jpg\',\'width\': 502,\'height\': 510}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinke33d7f7bc4bbabde7e762cd6a12fa546 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/living-room-2155376_960_720.jpg\',\'width\': 502,\'height\': 510}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke33d7f7bc4bbabde7e762cd6a12fa546, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink4e61e2e8e64d281b2c4c74f7f765c123 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/living-room-2155376_960_720.jpg\',\'width\': 502,\'height\': 510}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink4e61e2e8e64d281b2c4c74f7f765c123, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'IVA',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-1',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 1',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 1',
			'image' => 'https://trial-4087.websitex5.me/images/living-room-2155376_960_720.jpg',
			'description' => 'Laoreet faucibus et, viverra in cursus, massa sit nulla dictumst.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'EUR',
				'price' => '250.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'urvvt2xi' => array(
		'id' => 'urvvt2xi',
		'name' => 'Product 2',
		'category' => 'qqobnafw',
		'categoryPath' => array(
			'qqobnafw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Non felis vitae dictum vel justo. A risus a porttitor interdum nec erat.',
		'sku' => '',
		'options' => array(),
		'price' => 73.50,
		'singleFullPrice' => '61.25',
		'singleFullPricePlusVat' => '73.50',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/light-1603766_960_720.jpg',
				'width' => 960,
				'height' => 640
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://trial-4087.websitex5.me/images/light-1603766_960_720.jpg',
			'width' => 960,
			'height' => 640
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/light-1603766_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/light-1603766_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/light-1603766_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/light-1603766_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink19a50cff5c1f7063cdbc94d1f901dd0f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/light-1603766_960_720.jpg\',\'width\': 960,\'height\': 640}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink19a50cff5c1f7063cdbc94d1f901dd0f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke70c17aff1172a2aed49eb032d9284cc = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/light-1603766_960_720.jpg\',\'width\': 960,\'height\': 640}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke70c17aff1172a2aed49eb032d9284cc, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'IVA',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-2',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 2',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 2',
			'image' => 'https://trial-4087.websitex5.me/images/light-1603766_960_720.jpg',
			'description' => 'Non felis vitae dictum vel justo. A risus a porttitor interdum nec erat.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'EUR',
				'price' => '73.500'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'89xvwawt' => array(
		'id' => '89xvwawt',
		'name' => 'Product 3',
		'category' => 'qqobnafw',
		'categoryPath' => array(
			'qqobnafw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Massa sit nulla dictumst pede vestibulum, senectus dignissim turpis.',
		'sku' => '',
		'options' => array(),
		'price' => 1350.00,
		'singleFullPrice' => '1125.00',
		'singleFullPricePlusVat' => '1350.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/chair-4070161_960_720.png',
				'width' => 720,
				'height' => 720
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://trial-4087.websitex5.me/images/chair-4070161_960_720.png',
			'width' => 720,
			'height' => 720
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/chair-4070161_960_720.png\',\'width\': 720,\'height\': 720}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/chair-4070161_960_720.png\',\'width\': 720,\'height\': 720}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/chair-4070161_960_720.png\',\'width\': 720,\'height\': 720}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/chair-4070161_960_720.png\',\'width\': 720,\'height\': 720}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink19554b4d3066f6f511d87948b5223e94 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/chair-4070161_960_720.png\',\'width\': 720,\'height\': 720}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink19554b4d3066f6f511d87948b5223e94, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink6bdf391ee1a1c93351bfca6bed71bd55 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/chair-4070161_960_720.png\',\'width\': 720,\'height\': 720}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink6bdf391ee1a1c93351bfca6bed71bd55, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'IVA',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-3',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 3',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 3',
			'image' => 'https://trial-4087.websitex5.me/images/chair-4070161_960_720.png',
			'description' => 'Massa sit nulla dictumst pede vestibulum, senectus dignissim turpis.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'EUR',
				'price' => '1350.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'ejaxpnu2' => array(
		'id' => 'ejaxpnu2',
		'name' => 'Product 4',
		'category' => 'qqobnafw',
		'categoryPath' => array(
			'qqobnafw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Viverra in cursus, massa sit nulla dictumst pede vestibulum.',
		'sku' => '',
		'options' => array(),
		'price' => 375.00,
		'singleFullPrice' => '312.50',
		'singleFullPricePlusVat' => '375.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/konsyap-2073454_960_720.jpg',
				'width' => 960,
				'height' => 640
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://trial-4087.websitex5.me/images/konsyap-2073454_960_720.jpg',
			'width' => 960,
			'height' => 640
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/konsyap-2073454_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/konsyap-2073454_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/konsyap-2073454_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/konsyap-2073454_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink861b95eb41c7d33ab131dc07c18672a3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/konsyap-2073454_960_720.jpg\',\'width\': 960,\'height\': 640}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink861b95eb41c7d33ab131dc07c18672a3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkfca8b4fd1a2db6c5b67ce95b461c6179 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/konsyap-2073454_960_720.jpg\',\'width\': 960,\'height\': 640}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfca8b4fd1a2db6c5b67ce95b461c6179, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'IVA',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-4',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 4',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 4',
			'image' => 'https://trial-4087.websitex5.me/images/konsyap-2073454_960_720.jpg',
			'description' => 'Viverra in cursus, massa sit nulla dictumst pede vestibulum.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'EUR',
				'price' => '375.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'ux9xrflp' => array(
		'id' => 'ux9xrflp',
		'name' => 'Product 5',
		'category' => 'qqobnafw',
		'categoryPath' => array(
			'qqobnafw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Nulla dictumst pede vestibulum, senectus dignissim turpis, non felis vitae.',
		'sku' => '',
		'options' => array(),
		'price' => 2570.00,
		'singleFullPrice' => '2141.67',
		'singleFullPricePlusVat' => '2570.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/flower-2583676_960_720.jpg',
				'width' => 960,
				'height' => 640
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://trial-4087.websitex5.me/images/flower-2583676_960_720.jpg',
			'width' => 960,
			'height' => 640
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/flower-2583676_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/flower-2583676_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/flower-2583676_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/flower-2583676_960_720.jpg\',\'width\': 960,\'height\': 640}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink517aac2f82db3b7b77db2a80ffe6f47c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/flower-2583676_960_720.jpg\',\'width\': 960,\'height\': 640}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink517aac2f82db3b7b77db2a80ffe6f47c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc3bf1b3c4b06bfdbebd003ad3a63c257 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/flower-2583676_960_720.jpg\',\'width\': 960,\'height\': 640}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc3bf1b3c4b06bfdbebd003ad3a63c257, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'IVA',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-5',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 5',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 5',
			'image' => 'https://trial-4087.websitex5.me/images/flower-2583676_960_720.jpg',
			'description' => 'Nulla dictumst pede vestibulum, senectus dignissim turpis, non felis vitae.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'EUR',
				'price' => '2570.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'product-1' => 'gke80sb8',
	'product-2' => 'urvvt2xi',
	'product-3' => '89xvwawt',
	'product-4' => 'ejaxpnu2',
	'product-5' => 'ux9xrflp'
));
$ecommerce->setCategoriesData(array(
	'qqobnafw' => array(
		'id' => 'qqobnafw',
		'name' => 'Design Objects',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'gke80sb8',
			'urvvt2xi',
			'89xvwawt',
			'ejaxpnu2',
			'ux9xrflp'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_oseohwdh_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Bonifico Bancario',
		'description' => 'Pagamento posticipato tramite Bonifico Bancario.',
		'email_text' => 'Qui di seguito sono riportati i dati necessari per effettuare il pagamento tramite Bonifico Bancario:

scrivere ciao baby

Le ricordiamo che, una volta effettuato il pagamento, è necessario inviare la copia contabile insieme al Numero di Ordine.',
		'enableAfterPaymentEmail' => false
	),
	'tuza7cvc' => array(
		'id' => 'tuza7cvc',
		'name' => 'Paypal',
		'description' => '',
		'email_text' => '',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Posta',
		'description' => 'La merce verrà consegnata in 3-5 giorni lavorativi.',
		'email_text' => 'Spedizione tramite Posta.\\nLa merce verrà consegnata in 3-5 giorni lavorativi.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Corriere Espresso',
		'description' => 'La merce verrà consegnata in 1-2 giorni lavorativi.',
		'email_text' => 'Spedizione tramite Corriere Espresso.
La merce verrà consegnata in 1-2 giorni lavorativi.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional Demo 2022.2.9 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#E8E9EB" style="background-color: #E8E9EB;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Raleway\'; color: #83909E; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 10pt \'Raleway\'; color: #83909E; background-color: #F4F5F7; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: #F4F5F7">' . "\n\t\t" . 'Questo messaggio di posta elettronica contiene informazioni rivolte esclusivamente al destinatario sopra indicato.<br>Nel caso aveste ricevuto questo messaggio di posta elettronica per errore, siete pregati di segnalarlo immediatamente al mittente e distruggere quanto ricevuto senza farne copia.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#83909E';
$ImMailer->bodySeparatorBorderColor = '#83909E';
$ImMailer->emailBackground = '#E8E9EB';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Raleway\'; color: #83909E; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Raleway;';

// End of file x5settings.php