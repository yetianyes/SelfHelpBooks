<div id="mybook"><div class="cover"><div class="cover-img"><a target="_blank" href="../img.php?v=fm_pic/<?php echo $user_row[1]; ?>"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../fm_pic/<?php echo $user_row[1]; ?>);" /></a><br /><br /><?php $dyh="'";echo '<form action="book.php" method="get" style="font-size:14px"><input name="id" type="hidden" value="'.$id.'" />第&nbsp;<select name="bu">';echo '<option value="'.($bu1).'">'.Chinese_Money_Max($bu1).'</option>';for ($i=0;$i<$bu;$i++) { echo '<option value="'.($bu-$i).'">'.Chinese_Money_Max($bu-$i).'</option>';} echo '</select>&nbsp;<button>部 >></button></form>';?><h3>作者：<?php echo $user_row[2]; ?></h3><h3><?php if (!$session_id) {echo '订阅数：'.$user_row[3]; }else { if($check_dy_row[0]==null){echo '<span class="dy yuanc"><a action-data="'.$id.'">订阅数：'.$user_row[3].'&nbsp;&nbsp;(&nbsp;订阅+1&nbsp;)</a></span>';}else{ echo '订阅数：'.$user_row[3].' 已订阅';}}?></h3><div id="output" style="right:5%;top:0;position:absolute"></div></div></div><div class="fengdi"><div class="cover-img"><img src="ui/ui_pic/transparent.gif" style="background-image:url(../w.png);" /><h1>封底</h1></div></div></div></div>