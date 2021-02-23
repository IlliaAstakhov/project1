<?php
	$str = '+380 (68)-672-3111';
	$str = preg_replace('/[^0-9]/', '', $str);
{
   echo '<pre>';
	print_r($str);
   echo '</pre>';
}
?>


VALUE_TYPE


$phone  = "{{[ZP] Доп. телефон}}";
$phone = preg_replace('/[^0-9]/', '', $str);
$phone = explode(",", $phone);

if ($phone)
	{
                $this->setVariable('phone', $phone);
	}

$phone  = "{{[ZP] Доп. телефон}}";
$phone = explode(",", $phone);

if ($phone)
	{
                $this->setVariable('phone', $phone);
	}