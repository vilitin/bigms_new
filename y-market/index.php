<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Yandex Market");
?><?global $arrFilter;
$arrFilter=array("!PROPERTY_WF_NO_YM_VALUE"=>"Y", "NO_MARKET"=>false);?> <noindex><?$APPLICATION->IncludeComponent(
	"webfly:yandex.market",
	"",
	Array(
		"ADULT" => "",
		"ADULT_ALL" => "N",
		"AGENT_CHECK" => "Y",
		"AGE_CATEGORY" => "0",
		"AGE_CATEGORY_UNIT" => "year",
		"AVAILABLE_ALGORITHM" => "QUANTITY_ZERO",
		"BID" => "0",
		"BIG_CATALOG_PROP" => "1000",
		"BRANDS_300" => array(""),
		"BRANDS_AVAILABLE" => array(""),
		"BRANDS_FREE" => array(""),
		"BRANDS_TOMORROW" => array(""),
		"CACHE_FILTER" => "Y",
		"CACHE_NON_MANAGED" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CATEGORY" => "DEFAULT_CATEGORY",
		"CATEGORY_NAME_PROPERTY" => "",
		"CBID" => "0",
		"COMPANY" => "Большой мастер",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COND_PARAMS" => array("BREND","CML2_MANUFACTURER","DIZAYN","GARANTIYA_LET","MATERIAL","MINIMALNAYA_NORMA_OTGRUZKI_M","STILISTIKA_DIZAYNA","STRANA_PROIZVODITEL","TIP_IZDELIYA","TIP_MONTAZHA"),
		"COUNTRY" => "STRANA_PROIZVODITEL",
		"CPA_OFFERS" => "0",
		"CPA_SHOP" => "",
		"CURRENCIES_CONVERT" => "RUB",
		"DELIVERY_OPTIONS_EX" => "YA_STOIMOST_DOSTAVKI,YA_SROK_DOSTAVKI,",
		"DELIVERY_OPTIONS_SHOP_EX" => "500,2,",
		"DELIVERY_TO_AVAILABLE" => "N",
		"DESCRIPTION" => "0",
		"DETAIL_TEXT_PRIORITET" => "N",
		"DEVELOPER" => "BREND",
		"DIMENSIONS" => "0",
		"DISCOUNTS" => "PRICE_ONLY",
		"DO_NOT_INCLUDE_SUBSECTIONS" => "N",
		"EXPIRY" => "0",
		"FEE" => "0",
		"FILTER_NAME" => "arrFilter",
		"HTTPS_CHECK" => "Y",
		"IBLOCK_AS_CATEGORY" => "Y",
		"IBLOCK_CATALOG" => "N",
		"IBLOCK_ID_IN" => array("10"),
		"IBLOCK_ORDER" => "Y",
		"IBLOCK_SECTION" => array("975","976","977","978","980","981","982","984","997","998","999","1000","1002","1003","1004","1005","1006","1007","1008","1009","1010","1011","1012","1013","1014","1015","1016","1017","1018","1019","1020","1021","1022","1023","1024","1025","1026","1027","1039","1040","1054","1055","1056","1057","1058","1059","1060","1061","1062","1063","1064","1065","1066","1067","1068","1073","1074","1075","1076","1077","1084","1085","1106","1113","1125","1126","1129","1130","1131","1132","1133","1136","1141","1145","1149","1160","1163","1167","1168","1169","1170","1171","1172","1173","1175","1176","1178","1203","1204","1205","1206","1207","1208","1209","1210","1211","1215","1251","1252","1253","1254","1255","1256","1264","1265","1415","1416","1667","1706","1707","1708","1778","1779","1780","1781","1782","1783","1784","1785","1786","1796","1858","1859","1860","1861","1862","1863","1864","1865","1866","1867","1868","1869","1870","1871","1872","1873","1874","1875","1876","1877","1878","1879","1880","1881","1882","1883","1884","1885","1887","1888","1889","1890","1903","1927","1928","1929","1930","1994","1995","1996","1998","1999","2000","2001","2002","2003","2006","2012","2013","2014","2015","2016","2017","2018","2019","2028","2029","2030","2031","2032","2033","2034","2035","2036","2037","2038","2039","2040","2041","2042","2043","2044","2045","2046","2047","2048","2049","2050","2051","2052","2053","2054","2055","2056","2057","2058","2067","2068","2084","2085","2086","2087","2088","2089","2090","2091","2092","2093","2094","2095","2096","2097","2098","2099","2100","2101","2102","2103","2104","2105","2117","2118","2119","2120","2121","2122","2123","2124","2125","2126","2127","2128","2129","2130","2131","2132","2133","2134","2135","2136","2137","2138","2139","2140","2141","2142","2143","2144","2145","2146","2147","2149","2150","2151","2152","2153","2154","2160","2161","2162","2163","2164","2165","2166","2167","2168","2169","2170","2171","2172","2173","2174","2179","2180","2181","2182","2198","2199","2200","2201","2202","2203","2204","2205","2206","2207","2208","2209","2244","2246","2247","2248","2249","2250","2251","2252","2253","2254","2255","2256","2257","2258","2259","2260","2262","2446","2447","2449","2451","2453","2454","2457","2458","2462","2463","2464","2465","2466","2467","2469","2471","2472","2473","2483","2493","2494","2496","2498","2503","2506","2507","2508","2509","2510","2513","2514","2515","2516","2517","2518","2519","2520","2521","2522","2523","2524","2527","2528","2529","2530","2531","2532","2533","2534","2535","2536","2537","2538","2539","2548","2549","2550","2551","2552","2553","2554","2555","2556","2557","2558","2559","2560","2561","2562","2563","2564","2565","2566"),
		"IBLOCK_TYPE_LIST" => array("1c_catalog"),
		"LOCAL_DELIVERY_COST" => "",
		"LOCAL_DELIVERY_COST_OFFER" => "0",
		"MANUFACTURER_WARRANTY" => "GARANTIYA_LET",
		"MARKET_CATEGORY_CHECK" => "N",
		"MARKET_CATEGORY_PROP" => "0",
		"MORE_PHOTO" => "Детальная картинка",
		"MULTI_STRING_PROP" => "",
		"NAME_CUT" => "",
		"NAME_PROP" => "0",
		"NAME_PROP_COMPILE" => "",
		"NO_DESCRIPTION" => "N",
		"OFFER_PROP" => array(""),
		"OLD_PRICE" => "N",
		"OUTLETS" => "",
		"PARAMS" => array("STRANA_PROIZVODITEL"),
		"PREFIX_PROP" => "0",
		"PRICE_CODE" => array("Интернет"),
		"PRICE_ROUND" => "Y",
		"PROPDUCT_PROP" => array(""),
		"RECOMMENDATION" => "0",
		"SALES_NOTES" => "0",
		"SALES_NOTES_TEXT" => "Гарантия производителя. ",
		"SAVE_IN_FILE" => "Y",
		"SECTION_AS_VENDOR" => "N",
		"SITE" => "bigms.ru",
		"SKU_NAME" => "PRODUCT_NAME",
		"SKU_PROPERTY" => "",
		"STORE_DELIVERY" => "",
		"STORE_OFFER" => "true",
		"STORE_PICKUP" => "true",
		"UTM_CAMPAIGN" => "",
		"UTM_CHECK" => "N",
		"UTM_MEDIUM" => "cpc",
		"UTM_SOURCE" => "",
		"UTM_TERM" => "",
		"VENDOR_CODE" => "ARTIKUL",
		"WEIGHT" => "0"
	)
);?></noindex><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>