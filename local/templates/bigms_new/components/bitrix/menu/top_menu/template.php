<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
<ul class="top-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="top-menu__item"><a href="<?=$arItem["LINK"]?>" class="top-menu__link"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="top-menu__item"><a href="<?=$arItem["LINK"]?>" class="top-menu__link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul> 
<?endif?> 