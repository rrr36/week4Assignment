<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";
	$line = "This is the sample string";
	echo "$line <br>";
  $rep = str_replace("-","/",$date);
  echo "2. replaced $rep<br>";

	if($rep>$tar){
		echo "3. the Future<br>";
	}
	elseif($date<$rep){
		echo "3. the Past<br>";
		}
	else{
		echo "3. Oops!<br>";
		}

	$pos =strpos($date,"-");
	$sub = substr($date,$pos+1);
	$pos1 = strpos($sub,"-");
	$num = $pos+$pos1+1; 
	echo "4. The position of / are: $pos $num <br>";
	$length = str_word_count($date);
  $l = $length+1;
	echo "5. The number of words in the string are: $l <br>";
  $len = strlen($date);
  echo "6. The length of the string is: $len <br>";	
  $asci = ord($date);
  echo "7. The ascii value of first character of $date is: $asci <br>";  
  $last = substr($date,-2);
  echo "8. The last two character of the date are: $last <br>";
  $dates = explode("-",$date);
  echo "9. ";
  print_r($dates);
    echo "<br>";
  echo "10. Leap years<br>";
  foreach($year as $val){
    if((($val % 4) == 0) && ((($val % 100) != 0) || (($val % 400) == 0))){
      echo "$val: True | ";
      }else{
      echo "$val: False | ";
      }
      }
?>
