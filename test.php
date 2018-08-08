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

echo 'hello world';

echo 'hhhh';

