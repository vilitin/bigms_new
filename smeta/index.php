<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Расчёт сметы");
?>

		<p class="content-text">Наши специалисты имеют огромный профессиональный опыт и готовы проконсультировать Вас.</p>
		<section class="promo-adv">
			<h2 class="promo-adv__title">Как быстро получить расчёт сметы на сантехнику</h2>
			<ul class="promo-adv__list">
				<li class="promo-adv__item"><b>Заполните форму</b> на сайте,<br>или отправить данные нам для анализа <br>и пересчета нам на email <a href="mailto:bms@bigms.ru">bms@bigms.ru</a>.<br> В течении <b>30 минут</b> наш специалист свяжется с Вами!</li>
				<li class="promo-adv__item">
					Мы проверим Вашу смету и поможем <b>сэкономить</b> <br>на комплектующих:<br>
					- пересчитаем количество товара;<br>
					- предложим <b>альтернативные цены</b>;<br>
					- детализируем укрупненные позиции;<br>
					- исключим лишнее;<br>
					- добавим необходимое;<br>
				</li>
				<li class="promo-adv__item">Наши специалисты <b>в течении рабочего</b> для проведут анализ Вашей сметы, <br>исправят ошибки, сделают расчёт и, как результат, Вы <b>сэкономьте до 30%</b> на сантехнике.</li>
			</ul>
		</section>
		<section class="text-block">
		
			<h2>Заполните форму</h2>
		
			<?$APPLICATION->IncludeComponent(
				"bitrix:form.result.new",
				"estimate",
				Array(
					"WEB_FORM_ID" => "4",
					"IGNORE_CUSTOM_TEMPLATE" => "N",
					"USE_EXTENDED_ERRORS" => "N",
					"SEF_MODE" => "N",
					"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"","RESULT_ID"=>"",),
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "3600",
					"LIST_URL" => "",
					"EDIT_URL" => "",
					"SUCCESS_URL" => "",
					"CHAIN_ITEM_TEXT" => "",
					"CHAIN_ITEM_LINK" => "",
					"AJAX_MODE" => "Y",
					"AJAX_OPTION_SHADOW" => "N",
					"AJAX_OPTION_JUMP" => "Y",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N"
				)
			);?>

		</section>
		<section class="text-block">
			
			<p class="content-text">Данная услуга для вас абсолютно бесплатна.</p>
		</section>
		<br><br>
		
		
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>