<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О компании. Большой мастер - интернет-магазин инженерной и бытовой сантехники");
$APPLICATION->SetPageProperty("title", "О компании - Большой мастер");
$APPLICATION->SetTitle("О компании");

?>
<div class="content-about__content">
                  <div class="row">
                    <div class="col-lg-20 col-md-20 col-sm-20 content-about__main">
					<div class="content-delivery__row">
<p>На протяжении многих лет интернет-магазин Большой Мастер специализируется на инженерной сантехнике. Без нее не обойдется обустройство ни одного сооружения – как жилого, так и коммерческого.&nbsp; 	За многолетний опыт работы на отечественном рынке мы смогли подобрать ассортимент продукции, который отвечает требованиям российского потребителя.</p>
		</div>

<div class="content-delivery__row">
	<strong class="content-delivery__subtitle">Сантехника мировых компаний</strong>
	<p class="content-delivery__text">Компания Большой Мастер является партнером многих проверенных поставщиков и производителей инженерной сантехники. Благодаря тесному сотрудничеству сайт&nbsp;<a href="/">https://www.bigms.ru</a>&nbsp;вправе гарантировать высокое качество товаров за приемлемую цену.&nbsp; &nbsp; </p>
	<p class="content-delivery__text">Мы занимаемся продажей сертифицированных товаров от ведущих отечественных и зарубежных производителей. В каталогах нашего магазина мы собрали продукцию, рассчитанную на покупателей разного платежного достатка. Здесь представлен широкий выбор сантехники, котельного оборудования, водонагревателей, отопительных приборов, коллекторов, насосов, фильтров и т.д.</p>
	<p class="content-delivery__text">Сайт регулярно расширяет границы географии работы, пополняет ассортимент современными товарами, создает новые товарные группы. Главной целью работы нашего ресурса была возможность собрать разнообразную продукцию сферы инженерной сантехники в одном месте. В нашем магазине каждый покупатель сможет найти товар, не посещая другие торговые точки.</p>
</div>
<div class="content-delivery__row">
	<strong class="content-delivery__subtitle">Удобный сервис от профессионалов Большого Мастера</strong>
	<p class="content-delivery__text">Мы отвечаем за качество продукции, представленной в каталогах сайта. Профессиональные консультанты всегда рады прийти на помощь. Менеджеры магазина «Большой Мастер» подберут товары, которые соответствуют вашим пожеланиям и ценовой политике. Квалифицированный персонал поможет оформить заказ и быструю доставку любым удобным для вас способом. Вы можете заказать доставку по Москве, в пределах Московской области и в другие регионы России. Для постоянных клиентов действует гибкая система скидок и акции.</p>
	<p class="content-delivery__text">Сайт активно сотрудничает с крупными строительными компаниями. Поэтому при необходимости сможет предложить вам услуги профессиональных мастеров и монтажников. В нашем магазине вы найдете подробные описания и характеристики товаров, фото, видео, ознакомитесь с отзывами благодарных клиентов. Удобный интерфейс и навигация сайта поможет вам при поиске и оформлении заказа.</p>
	<p class="content-delivery__text">Компания «Большой Мастер» – гарант выгодного сотрудничества. У нас каждый клиент получит качественный сервис и необходимый товар. На сайте&nbsp;<a href="/">https://www.bigms.ru</a>&nbsp;вы найдете стандартные и уникальные решения для ремонта и строительства.</p>
	</div>

</div>
<div class="col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 content-about__nav about-nav">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"about",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
</div>
</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>