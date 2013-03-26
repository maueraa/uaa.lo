<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    public function init()
    {
        Yii::import('ext.LangPick.ELangPick');
        ELangPick::setLanguage();
        parent::init();
    }
    public function calendar($lng)
    {
$return = "        <table border='0' class=Arial9 width=100%>
                     <tr>
                        <th colspan='7' style='color:#000000;'>&nbsp;";
    $WORKDAY_COLOR  = "000000";
    $BAR_MENU_COLOR = "ffffff";
    $DAYOFF_COLOR   = "ff0000";
    $DAYOFF2_COLOR   = "ff5555";
    $ToDayParam=time()+120;
    $oy_nomi=Array
    (
    "$lng"=> Array ("","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
    "uz"  => Array ("","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
    "ru"  => Array ("","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
    "en"  => Array ("","January","Februar","March","April","May","June","July","August","September","October","November","December")
    );
    $oy_kunlari=date("t",$ToDayParam);
    $oy = date("m",$ToDayParam)*1;
$return .= $oy_nomi[$lng][$oy].", ".date("Y",$ToDayParam);
$return .= "   &nbsp;</th>
                     </tr>
                     <tr><th colspan='7'>&nbsp</th></tr><tr>";
        $kun_nomi=Array
        (
        "$lng"=> Array("Пн","Вт","Ср","Чт","Пт","Сб","Вс"),
        "uz"  => Array("Ду","Се","Чр","Па","Жу","Ша","Як"),
        "ru"  => Array("Пн","Вт","Ср","Чт","Пт","Сб","Вс"),
        "en"  => Array("Mo","Tu","We","Th","Fr","Sa","Su")
        );
$return .= "
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][0]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][1]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][2]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][3]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][4]."</th>
                           <th width=14.29% bgcolor='#$DAYOFF2_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][5]."</th>
                           <th              bgcolor='#$DAYOFF_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][6]."</th>\r";
$return .="                     </tr>
                     <tr>";
    $first_date = getdate(strtotime(date("Y",$ToDayParam)."-".date("m",$ToDayParam)."-01"));
    $first_day  = $first_date["wday"];
    $j=0;
    for ($i=2-$first_day; $i<=$oy_kunlari; $i++)
    {
    $j++;
    $BACKGROUND_DAY_COLOR="";
    if ($j==6) $DAYCOLOR = "#$DAYOFF2_COLOR;font-weight:bold"; else $DAYCOLOR = "#$WORKDAY_COLOR";
    if ($j==7) $DAYCOLOR = "#$DAYOFF_COLOR;font-weight:bold";
    if ($i==date("d",$ToDayParam)) {$BACKGROUND_DAY_COLOR="background-color:$DAYCOLOR"; $DAYCOLOR = "#$BAR_MENU_COLOR";}
      if ($i<=0)
          $return.= "
                           <td align=right>&nbsp;</td>";
      else
          $return.= "
                           <td align=right style='color:$DAYCOLOR;$BACKGROUND_DAY_COLOR'>&nbsp;$i&nbsp;</td>";
      if ($j==7&$i<>$oy_kunlari)
      {
          $return.= "
                     </tr>
                     <tr>";
          $j=0;
      }
}
$return .="
                     </tr>
                  </table>";

    return $return;
    }
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
}