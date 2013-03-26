<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>css/style.css" media="screen"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="main">
<div class="main-bgr"><div class="bgr">
<div class="main-width">
<div class="header">
    <div class="main-menu">
        <div class="corner-left"><div class="corner-right">
            <div class="menu">
                <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>Yii::t('strings','Бош саҳифа'), 'url'=>array('/site/index')),
                    array('label'=>Yii::t('strings','Янгиликлар'), 'url'=>array('/news/index')),
                    array('label'=>Yii::t('strings','Ишлаб чиқариш'), 'url'=>array('/site/cobalt')),
                    array('label'=>Yii::t('strings','Фотогалерея'), 'url'=>array('/site/photogallery')),
                    array('label'=>Yii::t('strings','Алоқалар'), 'url'=>array('/site/contact')),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            )); ?>
            </div>
        </div></div>
    </div>
    <div class="logo">
        <?php $this->widget('ext.LanguagePicker.ELangPick', array()); ?>
        <div class="indent">
            <h1>O'z Auto Austem</h1>
        </div>
    </div>
</div>
<div class="content">
<div class="column-right">
    <div class="search">
        <div>
            <center>
                <object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj1" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="220" height="58">
                    <param name="movie" value="/images/clock.swf">
                    <param name="quality" value="High">
                    <param name="wmode" value="transparent">
                    <embed src="/images/clock.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj1" width="220" height="58" quality="High" wmode="transparent">
                </object>
            </center>
        </div>
    </div>
    <div class="widget widget_categories">
        <div class="widget-bgr">
            <?php
            $lng = isset($_POST["languagePicker"]) ? $_POST["languagePicker"] : (isset($_COOKIE["language"])?$_COOKIE["language"]:"uz");
            echo($this->calendar($lng));
            ?>
        </div>
    </div>
    <div class="widget">
        <div class="widget-bgr">
            <div align="center">
                <div><div>
                    <h2><?=Yii::t("strings","ОБ-ХАВО")?></h2>
                </div>
                </div>
                <!-- Pogoda.uz -->
                <a href="http://www.ob-havo.uz/uz/andijan.html" target="_blank">
                    <img width="200" height="100" src="http://www.ob-havo.uz/uz/andijan-200x100-4.png" border="0" title="Все о погоде - Pogoda.uz" alt="Все о погоде - Pogoda.uz"/></a>
                <!-- Pogoda.uz -->
            </div>
        </div>
    </div>
    <div class="widget widget_meta">
        <div class="widget-bgr">
            <div align="center">
                <div><div>
                    <h2><?=Yii::t("strings","Валюталар курси")?></h2>
                    <A href="http://www.bankir.uz/custom/currency.php?token=BPH77-VS99" target="_blank"><IMG src="http://www.bankir.uz/labels/currency.php?transparent" alt="Валютный информер Банкир.UZ курсов Центрального Банка" width="99" height="45" border="0"></A>
                    </div>
                </div>
                <!-- Gismeteo informer START --
                <link rel="stylesheet" type="text/css" href="http://www.gismeteo.ru/static/css/informer2/gs_informerClient.min.css">
                <div id="gsInformerID-6Ocubg4RGdJ1lr" class="gsInformer" style="width:209px;height:257px">
                    <div class="gsIContent">
                        <div id="cityLink">
                            <a href="http://www.gismeteo.ru/city/daily/5333/" target="_blank">Погода в Андижане</a>
                        </div>
                        <div class="gsLinks">
                            <table>
                                <tr>
                                    <td>
                                        <div class="leftCol">
                                            <a href="http://www.gismeteo.ru" target="_blank">
                                                <img alt="Gismeteo" title="Gismeteo" src="http://www.gismeteo.ru/static/images/informer2/logo-mini2.png" align="absmiddle" border="0" />
                                                <span>Gismeteo</span>
                                            </a>
                                        </div>
                                        <div class="rightCol">
                                            <a href="http://www.gismeteo.ru/city/weekly/5333/" target="_blank">Прогноз на 2 недели</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <script src="http://www.gismeteo.ru/ajax/getInformer/?hash=6Ocubg4RGdJ1lr" type="text/javascript"></script>
                <!-- Gismeteo informer END -->
            </div>

        </div>
    </div>
</div>
    <?php echo $content; ?>
</div>
</div></div>
<div class="clear"></div>
<div class="footer">
    <div class="width">
        <div class="indent">
            Copyright &copy; 2013, JV "O‘ZAUTO-AUSTEM" LLC
        </div>
</body>
</html>
