<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
		
$request = explode(" ", $_REQUEST["q"]);

if(!isset($request)){
	foreach($request as $key_request => $value_request){
		foreach($arResult['ITEMS'] as $key => $value){
			$pos = strripos($value["NAME"], $value_request);
			if(is_numeric($pos)){
				$arResult['ITEMS'][$key]["SORT_UASORT"] += 1; 
			}
		}
	}

	foreach($arResult['ITEMS'] as $key_request => $value_request){
		if($value_request['SORT_UASORT'] == "")
			$arResult['ITEMS'][$key_request]['SORT_UASORT'] = 0;
	}

	function cmp($a, $b) 
	{
		return strcmp($b["SORT_UASORT"], $a["SORT_UASORT"]);
	}

	usort($arResult['ITEMS'], "cmp");
}
	


if (!empty($arResult['ITEMS'])):
?>
	
<ul class="content-products__list" data-view="list">

<?
$minimal_price = [];
foreach ($arResult['ITEMS'] as $key => $arItem):

    $minimal_price[] = $arItem['CATALOG_PRICE_1'];
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);

	$arItemIDs = array(
		'ID' => $strMainID,
		'PICT' => $strMainID.'_pict',
		'SECOND_PICT' => $strMainID.'_secondpict',
		'STICKER_ID' => $strMainID.'_sticker',
		'SECOND_STICKER_ID' => $strMainID.'_secondsticker',
		'QUANTITY' => $strMainID.'_quantity',
		'QUANTITY_DOWN' => $strMainID.'_quant_down',
		'QUANTITY_UP' => $strMainID.'_quant_up',
		'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
		'BUY_LINK' => $strMainID.'_buy_link',
		'BASKET_ACTIONS' => $strMainID.'_basket_actions',
		'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
		'SUBSCRIBE_LINK' => $strMainID.'_subscribe',
		'COMPARE_LINK' => $strMainID.'_compare_link',

		'PRICE' => $strMainID.'_price',
		'DSC_PERC' => $strMainID.'_dsc_perc',
		'SECOND_DSC_PERC' => $strMainID.'_second_dsc_perc',
		'PROP_DIV' => $strMainID.'_sku_tree',
		'PROP' => $strMainID.'_prop_',
		'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
		'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
	);

	$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);

	$productTitle = (
		isset($arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])&& $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] != ''
		? $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
		: $arItem['NAME']
	);
	$imgTitle = (
		isset($arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']) && $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'] != ''
		? $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
		: $arItem['NAME']
	);

	$minPrice = false;
	if (isset($arItem['MIN_PRICE']) || isset($arItem['RATIO_PRICE']))
		$minPrice = (isset($arItem['RATIO_PRICE']) ? $arItem['RATIO_PRICE'] : $arItem['MIN_PRICE']);

	
	$kk = $key+1;
	$class="";
	if($kk % 4 == 0){
		$class="last";
	}
	?> 
	
				<li class="product-card product-card_list content-products__item">
						
					<div class="row">
                      <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0">
                        <div class="product-card__img-wrap">
							<?
							//Уменьшаем картинку для баннера
							$PICT = ('Y' == $arItem['SECOND_PICT'] ? $arItem['PREVIEW_PICTURE'] : $arItem['PREVIEW_PICTURE']);
							$file = CFile::ResizeImageGet($PICT['ID'], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
							$PICT['SRC'] = $file['src'];
							$PICT['WIDTH'] = $file['width'];
							$PICT['HEIGHT'] = $file['height'];
							?>
						
                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
								<?$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('height'=>150, 'width'=>80), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
								<?if(!empty($file['src'])) {?>
									<img itemprop="image" class="product-card__img" itemprop="image" src="<? echo $file['src'] ?>" alt="<? echo $imgTitle; ?>" title="<? echo $imgTitle; ?>">
								<? } else {?>
									<img itemprop="image" class="product-card__img" itemprop="image" src="/bitrix/templates/bigms/images/logo_bw.png" alt="<? echo $imgTitle; ?>" title="<? echo $imgTitle; ?>">
									<?$PICT['SRC'] = '/bitrix/templates/bigms/images/logo_bw.png';?>
								<? } ?>
								
							<input type="hidden" name="CAT_PRICE_ID<?=$arItem["ID"]?>" value="<?=$arItem["CATALOG_PRICE_ID_1"]?>"/>
							<input type="hidden" name="CAT_PRICE<?=$arItem["ID"]?>" value="<?=number_format($arItem["CATALOG_PRICE_1"],0,'.',' ')?>  ₽"/>
							<input type="hidden" name="ELEM_NAME<?=$arItem["ID"]?>" value="<?=$arItem["NAME"]?>"/>
							<input type="hidden" name="DETAIL_PAGE<?=$arItem["ID"]?>" value="<?=$arItem["DETAIL_PAGE_URL"]?>"/>
							<input type="hidden" name="PICTURE<?=$arItem["ID"]?>" value="<?=$PICT['SRC']?>"/>
							<input type="hidden" name="COUNT<?=$arItem["ID"]?>" value="1"/>
							</a>
                        </div>
                      </div>
                      <div class="col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-0 product-card__info">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="product-card__name"><?=$arItem['NAME']; ?></a>
                        <div class="product-card__row product-card__row_flex">
						
									<span class="product-card__country">
										<?if ( $arItem["DISPLAY_PROPERTIES"]["STRANA_PROIZVODITEL"]["VALUE"]):?>
											<span class="product-card__flag-icon country c<?=$arItem["DISPLAY_PROPERTIES"]["STRANA_PROIZVODITEL"]["VALUE_ENUM_ID"]?>"></span>
											<?=$arItem["DISPLAY_PROPERTIES"]["STRANA_PROIZVODITEL"]["VALUE"]?>
											<?unset( $arItem["DISPLAY_PROPERTIES"]["STRANA_PROIZVODITEL"] );?>
										<?endif;?>
									</span>
									
									<?if($arResult['NAME'] == 'Душевые кабины SANWAY' || $arResult['NAME'] == 'Водяные полотенцесушители НИКА' || $arResult['NAME'] == 'Душевые кабины RIVER'):?>
										<span class="product-card__quantity product-card__quantity_instock">В наличии
											<span class="product-card__quantity_instock_text">Уточняйте склад</span>
										</span>
										
										<input type="hidden" name="STATUS<?=$arItem["ID"]?>" data-class="product-card__quantity_instock" value="В наличии"/>
									<?elseif( $arItem['PROPERTIES']['DELIVERY_TIME']['VALUE'] && $arItem["CATALOG_QUANTITY"] <= 0):?>
										<input type="hidden" name="STATUS<?=$arResult["ID"]?>" data-class="product-card__quantity_order" value="Под заказ"/>
										<span class="product-card__quantity product-card__quantity_order">Под заказ</span>
									<?elseif($arItem["CATALOG_QUANTITY"] <= 0):?>
										<span class="product-card__quantity product-card__quantity_order">Под заказ</span>
										<input type="hidden" name="STATUS<?=$arItem["ID"]?>" data-class="product-card__quantity_order" value="Под заказ"/>
									<?else:?>
										<span class="product-card__quantity product-card__quantity_instock">В наличии
											<span class="product-card__quantity_instock_text">Уточняйте склад</span>
										</span>
										<input type="hidden" name="STATUS<?=$arItem["ID"]?>" data-class="product-card__quantity_instock" value="В наличии"/>
									<?endif;?>	
                        </div>
                      </div>
                      <div class="col-lg-5 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-1 product-card__props">

						<span class="product-card__text">Код товара: <?=(int)$arItem["PROPERTIES"]["CML2_TRAITS"]["VALUE"][2]?></span>
						<span class="product-card__text">Артикул: <?=$arItem["PROPERTIES"]["CML2_ARTICLE"]["VALUE"]?></span>

						<?foreach ( $arItem["DISPLAY_PROPERTIES"] as $arProperty):?>
							<?if ( is_array($arProperty["VALUE"]) ):?>
								<span class="product-card__text"><?=$arProperty["NAME"]?>: <?=implode(', ', $arProperty["DISPLAY_VALUE"])?></span>
							<?else:?>
								<span class="product-card__text"><?=$arProperty["NAME"]?>: <?=$arProperty["DISPLAY_VALUE"]?></span>
							<?endif;?>
						<?endforeach;?>		
                      </div>
					  
                      <div class="col-lg-3 col-lg-offset-4 col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-1 product-card__buy">
                        <div class="product-card__row">
								<?
								if ('Y' == $arParams['SHOW_OLD_PRICE'] && $minPrice['DISCOUNT_VALUE'] < $minPrice['VALUE'])
								{?>
									<span class="product-card__price">
										<?=number_format($minPrice['DISCOUNT_VALUE'],0,'.',' ')?>  &#x20bd;
									</span>
									<span class="product-card__old-price">
										<?=number_format($minPrice['VALUE'],0,'.',' ')?>  &#x20bd;
									</span>
								<?}
								else {?>
									<span class="product-card__price">
										<?=number_format($minPrice['VALUE'],0,'.',' ')?>  &#x20bd;
									</span>
									
								<?}	?>
                        </div>
                        <div class="product-card__row product-card__row_flex">
							<?if($arItem["IS_GIFT"] == 1):?>
								<svg class="product-card__gift">
									<use xlink:href="#icon-gift"></use>
								</svg>
							<?endif;?>
							<?if($arItem["IS_DELIVERY"] == 1):?>
								<span class="product-card__delivery">
									<svg class="product-card__delivery-icon">
										<use xlink:href="#icon-delivery"></use>
									</svg>
									<span class="product-card__delivery-text">Доставка<br>бесплатно</span>
								</span>
							<?endif;?>
							<?if ( $arItem['PROPERTIES']['SKIDKA_PRI_SAMOVYVOZE']['VALUE'] ):?>
								<?if ( intval($arItem['PROPERTIES']['SKIDKA_PRI_SAMOVYVOZE']['VALUE']) == 1):?>
									<span class="product-card__delivery">
										<span class="product-card__delivery-text" title="На товар предоставляется скидк при покупке его в одном из наших магазинов"><a href="/skidka-v-magazine/" target="_blank">Скидка <br>при самовывозе</a></span>
									</span>
								<?else:?>
									<span class="product-card__delivery">
										<span class="product-card__delivery-text" title="На товар предоставляется скидк при покупке его в одном из наших магазинов"><a href="/skidka-v-magazine/" target="_blank">Скидка <?=$arItem['PROPERTIES']['SKIDKA_PRI_SAMOVYVOZE']['VALUE']?>%<br>при самовывозе</a></span>
									</span>
								<?endif;?>
								
								
								
							<?endif;?>
                        </div>
                      </div>
                      <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-0 col-sm-5 product-card__cart">
						<a data-trigger="cart" href="#" id="<? echo $arItemIDs['BUY_LINK']; ?>" href="javascript:void(0)" rel="nofollow" class="button popup-add-to-cart button_product" onmousedown="try { rrApi.addToBasket(<?=$arItem['ID']?>) } catch(e) {}" onclick="yaCounter31721621.reachGoal('basket');" data-id="<?=$arItem['ID']?>">В корзину</a>
                
                        <div class="product-card__icons">
						
                          <span class="product-card__wish-icon <?if ( in_array($arItem['ID'], $arResult["FAVORITES"])):?>active<?endif;?>" data-id="<?=$arItem['ID']?>"></span>
						<?/*
                          <span class="product-card__compare-icon"></span>
						*/?>
                        </div>
                      </div>
                    </div>
                </li>
		<?endforeach;?>
	</ul>
	
	<?if ($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<? echo $arResult["NAV_STRING"]; ?>
	<?endif;?>
<?else:?>
	<script>
		$('.content-products__header').hide();
	</script>
<?endif;?>

<?if ( $arResult["PDF_FILE"] ):?>
	<?if ( $arResult["PDF_TEXT"] ):?>
		<?=$arResult["PDF_TEXT"]?>
	<?endif;?>
	<object><embed src="<?=$arResult["PDF_FILE"]?>" width="100%" height="700" /></object>
<?endif;?>