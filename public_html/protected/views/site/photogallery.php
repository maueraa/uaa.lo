<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="column-center">
   &nbsp;
    <div class="corner-left-top"><div class="corner-right-top"><div class="corner-left-bot"><div class="corner-right-bot">
        <div class="post-4 post hentry category-etiam-cursus-leo category-nulla-facilisi category-quisque-nulla-vestibu category-lum-libero-nisl category-porta-vel-scelerisque tag-accusan tag-aperiam tag-dolor tag-eaque tag-eor tag-inven tag-ipsa tag-iste tag-laudant tag-natus tag-omnis tag-perspiciatis tag-sed tag-sit tag-tore tag-totam tag-unde tag-veritat tag-volupt" id="post-4">
            <div class="indent">
                <div class="title">
                    <h2><a href="#" rel="bookmark" style="font-variant: small-caps"><b style="font-size:12pt">Ф<span style="color:#777777">отогалерея</span></b></a></h2><br>
                </div>
                <div class="text-box">
					<?php
					$files_photo = glob("gallery/*.jpg");
					$file_comment = glob("gallery/comments.php");
					include_once($file_comment[0]);
                    echo "<table width='100%'>
                    <tr>";
                    $j=1;
					foreach ($files_photo as $key => $value)
                    {
                        $indexname = substr($value,8);
                        if (isset($return_com[$indexname])) $iname = Yii::t('strings',$return_com[$indexname]); else $iname="&nbsp";
                        echo "<td align='center'><img src='$value' width='120' height='80'><br />$iname</td><td>&nbsp;</td>";
                        if ($j%4==0) echo "</tr><tr><td colspan='4'>&nbsp;</td></tr><tr>";
                        $j=$j+1;
                    }
					echo "</tr></table>";
					?>
					<div class="link-edit"></div>
                </div>
            </div>
            <div class="post-1 post hentry category-etiam-cursus-leo category-quisque-nulla-vestibu category-malesuad-neque-vivamus category-orci-luctus-et-ultrices category-primis-in-faucibus tag-ipsa tag-sed" id="post-1">
            </div>
            <div class="navigation nav-top">
                <div class="alignright"></div>
            </div>
        </div></div></div></div>
    </div>
</div>