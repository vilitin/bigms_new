<?define("WIZARD_DEFAULT_SITE_ID", "tp");require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/wizard.php");$wizard = new CWizard("concept:hameleon");$wizard->Install();require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>