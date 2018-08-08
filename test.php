<?php
function createCode($userId)
{
	static $sourceString = [
		'q','5','e','8','t','4','u','7','a','3'
	];
    static $a = [
               's','8','r','3','5'
            ];
    static $b = [
               '3','a','4','f','8'
            ];
    static $c = [
               't','7','q','8','4'
            ];
    static $d = [
               '5','a','4','f','6'
            ];
    static $e = [
               'h','5','b','2','8'
            ];
	//1040000以下肯定不会超过5位
	$onesix = dechex($userId);
	$onesix = (string)$onesix.'h';
	$len = strlen($onesix);
	$jia = 6-$len;

	$arrid = (string)$userId;  // 将int型转换成string
	$arr = str_split($arrid); 
	var_dump($arr);

	for ($i=0; $i < $jia; $i++) { 

		if (!empty($arr[$i])) {
			//存在
			$onesix .= $sourceString[$arr[$i]];
		}else{
			//不存在
			if ($i==0) {
				$onesix .= $a[$i];
			}elseif ($i==1) {
				$onesix .= $b[$i];
			}elseif ($i==2) {
				$onesix .= $c[$i];
			}elseif ($i==3) {
				$onesix .= $d[$i];
			}elseif ($i==4) {
				$onesix .= $e[$i];
			}
			
		}
	}

	return  strtoupper($onesix);

}

echo createCode(1040000);