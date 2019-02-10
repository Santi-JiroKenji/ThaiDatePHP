<html>
<head>
	<title>Thai_Date</title>
</head>
<body>
	<font face="Arial">
	<center>
	<fieldset style="width:550px" align="left">
	<legend><b>การแสดงวัน-เวลา ภาษาไทย</b></legend>
	<table width="90%" align="center">
		<tr><td>
			<?php
				$dateData=time();
				$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
				$thai_month_arr=array(
    				"0"=>"",
    				"1"=>"มกราคม",
    				"2"=>"กุมภาพันธ์",
    				"3"=>"มีนาคม",
    				"4"=>"เมษายน",
    				"5"=>"พฤษภาคม",
    				"6"=>"มิถุนายน", 
    				"7"=>"กรกฎาคม",
    				"8"=>"สิงหาคม",
    				"9"=>"กันยายน",
    				"10"=>"ตุลาคม",
    				"11"=>"พฤศจิกายน",
    				"12"=>"ธันวาคม"                 
				);
				$eng_month_arr=array(
    				"0"=>"",
    				"1"=>"Jan",
    				"2"=>"Feb",
    				"3"=>"Mar",
    				"4"=>"Apr",
    				"5"=>"May",
    				"6"=>"Jun",
    				"7"=>"Jul",
    				"8"=>"Aug",
    				"9"=>"Sep",
    				"10"=>"Oct",
    				"11"=>"Nov",
    				"12"=>"Dec"           
				);
				function eng_date($time){   // 19-12-56
    			global $eng_month_arr;
   				$eng_date_return = date("d",$time);   
    			$eng_date_return.="-".$eng_month_arr[date("n",$time)];   
    			$eng_date_return.="-".(date("Y",$time));
    			$eng_date_return.="<br> Now it is ".date("h:i:s A",$time);
    			return $eng_date_return;
				}

				
				function thai_date($time){
    			global $thai_day_arr,$thai_month_arr;
    				$thai_date_return="วัน ".$thai_day_arr[date("w",$time)];
    				$thai_date_return.= " ที่ ".date("j",$time);
    				$thai_date_return.=" เดือน ".$thai_month_arr[date("n",$time)];
    				$thai_date_return.= " พ.ศ.".(date("Y",$time)+543);
    				$thai_date_return.= "<br> เวลา ".date("H นาฬิกา i นาที s วินาที",$time);
    			return $thai_date_return;
				}
				echo "<hr width='100%' size='2' noshade>";
				echo "Today is ";
				echo eng_date(time());
				
				echo "<hr width='100%' size='2' noshade>";
				
				echo "วันนี้คือ ";
				echo thai_date($dateData);
			?>

		</td></tr>
	</table>
	</fieldset>
</center>
</font>
</body>
</html>