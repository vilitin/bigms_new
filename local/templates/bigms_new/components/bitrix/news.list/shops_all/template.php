<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
$out = array();

$this->SetViewTarget("content__wrap");
echo "content__wrap_contacts";
$this->EndViewTarget("content__wrap");

$this->SetViewTarget("row_div_class");
echo "col-lg-22 col-lg-offset-1 col-md-22 col-md-offset-1 col-sm-22 col-sm-offset-1 content__container content__container_catalog";
$this->EndViewTarget("row_div_class");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>


            <div class="content-contacts">
              <div class="content-contacts__tabs product-tabs tabs">
                <div class="product-tabs__header-wrap">
                  <ul class="product-tabs__header-list tabs__header">
					<?$firstSection = $arResult["SECTIONS"][0]["ID"];?>
					<?foreach ( $arResult["SECTIONS"] as $key => $arSection ):?>
						<li data-section="<?=$arSection["ID"]?>" class="map-trigger <?if ( !$key ):?>active<?endif;?>"><h2>Наши магазины</h2></li>
					<?endforeach;?>
                  </ul>
                </div>
              </div>
	      
		<ul class="sort contact_sort">
                    <li class="sort__item sort__item_title">Выводить:</li>
			<li class="sort__item">
				<a class="sort__link active" data-type="list_block" href="" rel="nofollow">списком</a>
			</li>
			<li class="sort__item">
				<a class="sort__link" data-type="map-bl"  href="">на карте</a>
			</li>
			
                </ul>
				
			
	      
			<div class="content-contacts__content">
				
				<div id="list_block" class="content_contact_block">
					<? foreach( $arResult['ITEMS'] as $iOfficeInd => $aOffice ): ?>
					
						
						<div class="office_line <?if ($aOffice["IBLOCK_SECTION_ID"] == $firstSection):?>active<?endif;?>" data-section="<?=$aOffice["IBLOCK_SECTION_ID"]?>">
						
							<div class="contact_name">
								<a href="<?=$aOffice["DETAIL_PAGE_URL"]?>"><?=$aOffice["NAME"]?></a>
								<br>
								<span><?=$aOffice["PROPERTY_12"]?></span>
							</div>
							<div class="contact_phone">
								<span><?=$aOffice['PROPERTY_13']["0"]?></span>
							</div>
							<div class="contact_house">
								<span><?=$aOffice["PROPERTY_29"]?></span>
							</div>	
						
						</div>
						

					
					
					<?endforeach;?>
					
						
					
				</div>
				
				
					<div class="content-contacts__map-wrap" id="map-bl">
					  <div id="map" class="content-contacts__map"></div>
					</div>
					<? foreach( $arResult['ITEMS'] as $iOfficeInd => $aOffice ): ?>
					
				
						<div class="content-contacts__container" id="office<?=$aOffice["ID"]?>">
							<?/*
							<?if ( count($aOffice["PHOTO"]) > 0 ):?>
								<div id="contacts_gallery<?=$aOffice["ID"]?>" class="content-contacts__gallery">
									<ul class="content-contacts__gallery">
										<?foreach ( $aOffice["PHOTO"] as $k => $photo ):?>
											<?if ( $k <200 ):?>
											<li data-trigger="slider" data-id="<?=$aOffice["ID"]?>" class="content-contacts__gallery-item popup-trigger"><img src="<?=$photo["SMALL_IMG"]?>" width="138" height="106" alt=""></li>
											<?endif;?>
										<?endforeach;?>
									</ul>
								</div>
									<div id="slider<?=$aOffice["ID"]?>" style="display: none;">
								      <div class="owl-carousel popup-slider__container">
										<?foreach ( $aOffice["PHOTO"] as $k => $photo ):?>
											<?if ( $k <200 ):?><img src="<?=$photo["BIG_IMG"]?>" alt=""><?endif;?>
										<?endforeach;?>
									  </div>
									 
									</div>
									
									<script>
										$("#contacts_gallery<?=$aOffice["ID"]?>").mCustomScrollbar({
											axis:"x",
											theme:"bigms-contacts",
											autoExpandScrollbar:true,
											advanced:{autoExpandHorizontalScroll:true},
											scrollbarPosition: "inside",
											mouseWheel: {
											  enable: false
											}
										});
									</script>
							<?else:?>
								<div id="slider<?=$aOffice["ID"]?>" style="display: none;"></div>
							<?endif;?>
							*/?>
							
						  <div class="content-contacts__description contacts-description" <?if ( count($aOffice["PHOTO"]) > 0 ):?>style="height: 420px;"<?endif;?>>
							<span class="contacts-description__close"></span>
							<strong class="contacts-description__title"><?=$aOffice["NAME"]?></strong>
							<div class="contacts-description__row">
							  <span class="contacts-description__subtitle">Адрес:</span>
							  <span class="contacts-description__text"><?=$aOffice["PROPERTY_12"]?></span>
							</div>
							<div class="contacts-description__row">
							  <span class="contacts-description__subtitle">Время работы:</span>
							  <span class="contacts-description__text"><?=$aOffice["PROPERTY_29"]?></span>
							</div>
							<div class="contacts-description__row">
							  <span class="contacts-description__subtitle">Телефон</span>
							  <span class="contacts-description__text <?if ( $aOffice["PROPERTY_625"] ):?>watsup<?endif;?> <?if ( $aOffice["PROPERTY_624"] ):?>viber<?endif;?>"><?=$aOffice["PROPERTY_13"][0]?></span>
							</div>
							<div class="contacts-description__row">
								<a href="<?=$aOffice["DETAIL_PAGE_URL"]?>">Подробнее</a>
							</div>
							
							
							<?/*
							<?if ( $aOffice["PREVIEW_TEXT"] ):?>
								<div class="contacts-description__row">
									<span>
										<?=$aOffice["PREVIEW_TEXT"]?>
									</span>
								</div>
							<?endif;?>
							
							<?if ( $aOffice["PROPERTY_14"] ):?>
								<a data-trigger="youtube" data-youtube='<?=$aOffice["PROPERTY_14"]?>' href="#" class="contacts-description__video popup-trigger">Видео проезда</a>
							<?endif;?>
							
				
							<?if ( $aOffice["PROPERTY_622"] ):?>
								<br><br>
								<a data-trigger="youtube" data-youtube='<img width="600" src="<?=CFile::GetPath($aOffice["PROPERTY_622"]);?>">' href="#" class="contacts-description__video popup-trigger">Схема проезда на общественном транспорте</a>
							<?endif;?>
							
							<?if ( $aOffice["PROPERTY_623"] ):?>
								<br><br>
								<a data-trigger="youtube" data-youtube='<img width="600" src="<?=CFile::GetPath($aOffice["PROPERTY_623"]);?>">' href="#" class="contacts-description__video popup-trigger">Схема проезда на машине</a>
							<?endif;?>
							*/?>
							
						  </div>
						</div>
					<?endforeach;?>
				
						
				  
				
			</div>
	<input type="hidden" id="MAP_SECTION" value="<?=$firstSection?>">
	
							<div class="contacts__requisites">
								<h2>Юридическая информация</h2>	
							  <strong class="contacts-description__title">ООО <span>«Большой Мастер»</span></strong>

							  <div class="contacts-description__row">
								<span class="contacts-description__subtitle">ИНН/КПП:</span>
								<span class="contacts-description__text">7720605468/772001001</span>
							  </div>
							  <div class="contacts-description__row">
								<span class="contacts-description__subtitle">ОГРН:</span>
								<span class="contacts-description__text">1087746107063</span>
							  </div>
							  <div class="contacts-description__row">
								<span class="contacts-description__subtitle">Юр. адрес:</span>
								<span class="contacts-description__text">111024, г. Москва, 2-я ул. Энтузиастов д. 5, корп.1, этаж. 2, комн. 9</span>
							  </div>
						</div>
	
	
<script type="text/javascript">
    ymaps.ready(init);
    var myMap;


    function init(){  
	
		var myCollection = new ymaps.GeoObjectCollection();
        myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 10,
			controls: ['zoomControl']
        }, {suppressMapOpenBlock: true});

		MyIconContentLayout27 = ymaps.templateLayoutFactory.createClass(
				'<div class="bigms-marker"><svg style="width: 47px; height: 60px; fill:#ffa200;" class="bigms-marker__svg">'+
											'<use xlink:href="#icon-marker"></use>'+
										'</svg></div>'
				);
				
		MyIconContentLayout28 = ymaps.templateLayoutFactory.createClass(
				'<div class="bigms-marker"><svg style="width: 47px; height: 60px; fill:#1c6bc4;" class="bigms-marker__svg">'+
											'<use xlink:href="#icon-marker"></use>'+
										'</svg></div>'
				);

		MyIconContentLayout1440 = ymaps.templateLayoutFactory.createClass(
				'<div class="bigms-marker"><svg style="width: 47px; height: 60px; fill:#59ce42;" class="bigms-marker__svg">'+
											'<use xlink:href="#icon-marker"></use>'+
										'</svg></div>'
				);		
		
		section = $('#MAP_SECTION').val();
		i = 0;
		<? foreach( $arResult['ITEMS'] as $iOfficeInd => $aOffice ): ?>
		

			
			if ( section == '0' || section == '<?=$aOffice["IBLOCK_SECTION_ID"]?>' ){
				i++;
				lastCoord = [<?=$aOffice["PROPERTY_15"]?>];
				myCollection.add(new ymaps.Placemark([<?=$aOffice["PROPERTY_15"]?>]));
			
				myPlacemark<?=$aOffice["ID"]?> = new ymaps.Placemark([<?=$aOffice["PROPERTY_15"]?>],{}, {
					iconLayout: 'default#imageWithContent',
					iconImageHref: '', // картинка иконки
					iconImageSize: [47, 64], // размер иконки
					iconImageOffset: [-34, -80], // позиция иконки
					iconContentOffset: [15, 15],
					iconContentLayout: MyIconContentLayout<?=$aOffice["IBLOCK_SECTION_ID"]?>
				});
				

				myPlacemark<?=$aOffice["ID"]?>.options.set('preset', <?=$aOffice["ID"]?>);
				myPlacemark<?=$aOffice["ID"]?>.options.set('coordinate', <?=$aOffice["PROPERTY_15"]?>);
				
				myPlacemark<?=$aOffice["ID"]?>.events.add('click', function(e) {
					var id = myPlacemark<?=$aOffice["ID"]?>.options.get('preset');
					
					$('#slider').html( $('#slider<?=$aOffice["ID"]?>' ).html() );
					var thumbsOwl = $('#slider .popup-slider__container');
					  thumbsOwl.owlCarousel({
						loop: true,
						items: 1,
						thumbs: true,
						thumbImage: true,
						thumbContainerClass: 'popup-nav',
						thumbItemClass: 'popup-nav__item'
					  });
					  $('.popup-nav__item').click(function () {
						thumbsOwl.trigger('to.owl.carousel', [$(this).index(), 300]);
						thumbsOwl.trigger('refresh.owl.carousel', []);
					  });
					
					
					$('.content-contacts__map-wrap').width('65%');
					$('.content-contacts__container').removeClass('active');
					$('#office'+id).addClass('active');
					//$('.content-contacts__requisites').removeClass('active');
					$('.requisites-trigger').removeClass('active');
					myMap.setCenter( [<?=$aOffice["PROPERTY_15"]?>], 13, {
						checkZoomRange	: true,
						duration 		: 300,
						callback 		: function() {
						  
						}
					});
					
					return false;
				});
				myMap.geoObjects.add(myPlacemark<?=$aOffice["ID"]?>);
			}

		<? endforeach; ?> 
				if ( i > 1 ){
					myMap.setBounds(myMap.geoObjects.getBounds());	
				}
				else {
					myMap.setCenter( lastCoord, 13 );
				}
			
    }
	
	  $('.contacts-description__close').click(function() {
		$('.content-contacts__container').removeClass('active');
		$('.content-contacts__map-wrap').width('100%');
				if ( i > 1 ){
					myMap.setBounds(myMap.geoObjects.getBounds());	
				}
				else {
					myMap.setCenter( lastCoord, 13 );
				}
	  });
	  
		$('.sort__link').click(function() {
			
			$('.sort__link').removeClass('active');
			$('.content-contacts__container').removeClass('active');
			$(this).addClass('active');
			$('#map-bl').hide();
			$('.content_contact_block').hide();
			var block = '#'+$(this).data('type');
			$(block).show();
			myMap.destroy();
			init();
			
			
			return false;
		});
	  
	  
		$('.map-trigger').click(function() {
			$('.content-contacts__container').removeClass('active');
			//$('.content-contacts__requisites').removeClass('active');
			$('.requisites-trigger').removeClass('active');
			$('.content-contacts__map-wrap').width('100%');
			$(this).parent().find('.map-trigger').removeClass('active');
			$(this).addClass('active');
			var section = $(this).data('section');
			if ( section == '0' ){
				$('.office_line').addClass('active');
			}
			else {
				$('.office_line').removeClass('active');
				$('[data-section="'+section+'"]').addClass('active');
			}
			
			
			$('#MAP_SECTION').val( $(this).data('section') );
			myMap.destroy();
			init();
		});
		
		  $('.requisites-trigger').click(function() {
			if($(this).hasClass('active')) {
			  //$(this).toggleClass('active');
			  //$('.content-contacts__requisites').removeClass('active');
			  //$('.content-contacts__map-wrap').width('100%');
			} else {
				$(this).parent().find('.map-trigger').removeClass('active');
			  $(this).toggleClass('active');
			  // $('.content-contacts__map-wrap').width('65%');
			  $('.office_line').removeClass('active');
			  //$('.content-contacts__container').removeClass('active');
			  $('.content-contacts__requisites').addClass('active');
			}
		  });	
</script>	
	
