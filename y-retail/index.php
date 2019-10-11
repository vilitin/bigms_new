<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Yandex Market");
?><?global $arrFilter;
$arrFilter=array("!PROPERTY_WF_NO_YM_VALUE"=>"Y");?>
<noindex><?$APPLICATION->IncludeComponent(
	"webfly:yandex.market", 
	"retail", 
	array(
		"COMPONENT_TEMPLATE" => "retail",
		"AGENT_CHECK" => "Y",
		"IBLOCK_TYPE_LIST" => array(
			0 => "1c_catalog",
		),
		"SAVE_IN_FILE" => "Y",
		"IBLOCK_CATALOG" => "N",
		"IBLOCK_ID_IN" => array(
			0 => "10",
		),
		"IBLOCK_SECTION" => array("975","976","977","978","980","981","982","984","997","998","999","1000","1002","1003","1004","1005","1006","1007","1008","1009","1010","1011","1012","1013","1014","1015","1016","1017","1018","1019","1020","1021","1022","1023","1024","1025","1026","1054","1055","1056","1057","1058","1059","1060","1061","1062","1063","1064","1065","1066","1067","1068","1073","1074","1075","1076","1077","1084","1125","1126","1129","1130","1131","1132","1133","1136","1141","1145","1149","1160","1163","1167","1168","1169","1170","1171","1172","1173","1175","1176","1178","1203","1204","1205","1206","1207","1208","1209","1210","1211","1213","1215","1251","1252","1253","1254","1255","1256","1264","1265","1415","1416","1667","1706","1707","1708","1778","1779","1780","1781","1782","1783","1784","1785","1786","1796","1858","1859","1860","1861","1862","1863","1864","1865","1866","1867","1868","1869","1870","1871","1872","1873","1874","1875","1876","1877","1878","1879","1880","1881","1882","1883","1884","1885","1887","1888","1889","1890","1903","1927","1928","1929","1930","1994","1995","1996","1998","1999","2000","2001","2002","2003","2004","2005","2006","2009","2012","2013","2014","2015","2016","2017","2018","2019","2028","2029","2030","2031","2032","2033","2034","2035","2036","2037","2038","2039","2040","2041","2042","2043","2044","2045","2046","2047","2048","2049","2050","2051","2052","2053","2054","2055","2056","2057","2067","2068","2084","2085","2086","2087","2088","2089","2090","2091","2092","2093","2094","2095","2096","2097","2098","2099","2100","2101","2102","2103","2104","2105","2117","2118","2119","2120","2121","2122","2123","2124","2125","2126","2127","2128","2129","2130","2131","2132","2133","2134","2135","2136","2137","2138","2139","2140","2141","2142","2143","2144","2145","2146","2147","2149","2150","2151","2152","2153","2154","2160","2161","2162","2163","2164","2165","2166","2167","2168","2169","2170","2171","2172","2173","2174","2179","2180","2181","2182","2449","2451","2453","2454","2457","2458","2462","2464","2466","2469"),
		"DO_NOT_INCLUDE_SUBSECTIONS" => "N",
		"IBLOCK_AS_CATEGORY" => "Y",
		"BIG_CATALOG_PROP" => "500",
		"HTTPS_CHECK" => "Y",
		"SITE" => "bigms.ru",
		"COMPANY" => "Большой мастер",
		"FILTER_NAME" => "arrFilter",
		"MORE_PHOTO" => "wf_fields",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NON_MANAGED" => "N",
		"CACHE_FILTER" => "N",
		"SKU_NAME" => "PRODUCT_NAME",
		"SKU_PROPERTY" => "",
		"SALES_NOTES" => "0",
		"SALES_NOTES_TEXT" => "Гарантия производителя",
		"OLD_PRICE" => "N",
		"PRICE_ROUND" => "Y",
		"PRICE_CODE" => array(
			0 => "Интернет",
		),
		"IBLOCK_ORDER" => "Y",
		"AVAILABLE_ALGORITHM" => "QUANTITY_ZERO",
		"CURRENCIES_CONVERT" => "NOT_CONVERT",
		"LOCAL_DELIVERY_COST" => "",
		"DELIVERY_OPTIONS_SHOP_EX" => "500,2,",
		"LOCAL_DELIVERY_COST_OFFER" => "0",
		"DELIVERY_OPTIONS_EX" => "YA_STOIMOST_DOSTAVKI,YA_SROK_DOSTAVKI,",
		"STORE_OFFER" => "true",
		"STORE_PICKUP" => "true",
		"NAME_PROP" => "0",
		"NAME_PROP_COMPILE" => "",
		"NAME_CUT" => "",
		"PROPDUCT_PROP" => array(
		),
		"OFFER_PROP" => array(
		),
		"PREFIX_PROP" => "0",
		"DESCRIPTION" => "0",
		"DETAIL_TEXT_PRIORITET" => "N",
		"NO_DESCRIPTION" => "N",
		"AGE_CATEGORY" => "0",
		"AGE_CATEGORY_UNIT" => "year",
		"BID" => "0",
		"CBID" => "0",
		"CPA_SHOP" => "",
		"CPA_OFFERS" => "0",
		"EXPIRY" => "0",
		"WEIGHT" => "0",
		"DIMENSIONS" => "0",
		"PARAMS" => array(
		),
		"COND_PARAMS" => array(
		),
		"DISCOUNTS" => "DISCOUNT_API",
		"UTM_CHECK" => "Y",
		"UTM_SOURCE" => "YandexMarket",
		"UTM_CAMPAIGN" => "",
		"UTM_MEDIUM" => "cpc",
		"UTM_TERM" => "",
		"MARKET_CATEGORY_PROP" => "0",
		"DEVELOPER" => "BREND",
		"VENDOR_CODE" => "ARTIKUL",
		"COUNTRY" => "0",
		"MANUFACTURER_WARRANTY" => "0",
		"BRANDS_TOMORROW" => "",
		"BRANDS_FREE" => "",
		"BRANDS_300" => "",
		"BRANDS_AVAILABLE" => "",
		"SECTION_AS_VENDOR" => "N",
		"MULTI_STRING_PROP" => "",
		"CATEGORY" => "DEFAULT_CATEGORY",
		"MARKET_CATEGORY_CHECK" => "N",
		"CATEGORY_NAME_PROPERTY" => "",
		"DELIVERY_TO_AVAILABLE" => "N",
		"STORE_DELIVERY" => "",
		"OUTLETS" => "",
		"FEE" => "0",
		"RECOMMENDATION" => "0",
		"ADULT_ALL" => "N",
		"ADULT" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?></noindex><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>