<div id="mybook"><div class="cover"><div class="cover-img"><a target="_blank"  href="../img.php?v=fm_pic/<?php echo $user_row[1]; ?>"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../fm_pic/<?php echo $user_row[1]; ?>);" /></a><br /><span class="yuanc"><br /><a  href="fengmian.php">修改封面>>></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="../code.php">*密码修改*</a></span><br /><?php $dyh="'";echo '<form action="book.php" method="get" style="font-size:14px"><input name="id" type="hidden" value="'.$id.'" />第&nbsp;<select name="bu">';echo '<option value="'.($bu1).'">'.Chinese_Money_Max($bu1).'</option>';for ($i=0;$i<$bu;$i++) { echo '<option value="'.($bu-$i).'">'.Chinese_Money_Max($bu-$i).'</option>';} echo '</select>&nbsp;<button>部 >></button></form>';?><h3 class="eva-zl" ><?php echo '订阅数：'.$user_row[3];?></h3><div id="output" style="right:5%;top:0;position:absolute"></div></div></div><div class="fengdi"><div class="cover-img"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../w.png);" /><h1>封底</h1></div></div></div>