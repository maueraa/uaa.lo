
                  <table border="0" class=Arial9 width=100%>
                     <tr>
                        <th colspan="7">&nbsp;<?php
            $WORKDAY_COLOR  = "000080";
            $BAR_MENU_COLOR = "ffffff";
            $DAYOFF_COLOR   = "f00000";
            $DAYOFF2_COLOR   = "0080f0";
            $ToDayParam=time();//+60*60*13;
            $oy_nomi=Array
                  (
                  "$lng"=> Array ("","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
                  "uz"  => Array ("","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
                  "ru"  => Array ("","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
                  "en"  => Array ("","January","Februar","March","April","May","June","July","August","September","October","November","December")
                  );
            $oy_kunlari=date("t",$ToDayParam);
            $oy = date("m",$ToDayParam)*1;
            echo $oy_nomi[$lng][$oy].", ".date("Y",$ToDayParam);
      ?>&nbsp;</th>
                     </tr>
                     <tr><?php
            $kun_nomi=Array
                  (
                  "$lng"=> Array("Пн","Вт","Ср","Чт","Пт","Сб","Вс"),
                  "uz"  => Array("Ду","Се","Чр","Па","Жу","Ша","Як"),
                  "ru"  => Array("Пн","Вт","Ср","Чт","Пт","Сб","Вс"),
                  "en"  => Array("Mo","Tu","We","Th","Fr","Sa","Su")
                  );
                  echo"
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][0]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][1]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][2]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][3]."</th>
                           <th width=14.29% bgcolor='#$WORKDAY_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][4]."</th>
                           <th width=14.29% bgcolor='#$DAYOFF2_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][5]."</th>
                           <th              bgcolor='#$DAYOFF_COLOR' style='color:#$BAR_MENU_COLOR'>".$kun_nomi[$lng][6]."</th>\r";
           ?>
                     </tr>
                     <tr>
<?php
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
      echo "
                           <td align=right>&nbsp;</td>";
      else
      echo "
                           <td align=right style='color:$DAYCOLOR;$BACKGROUND_DAY_COLOR'>&nbsp;$i&nbsp;</td>";
      if ($j==7&$i<>$oy_kunlari)
      {
      echo "
                     </tr>
                     <tr>";
      $j=0;
      }
}
?>

                     </tr>
                  </table>
