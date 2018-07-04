<?php
require('vendor/autoload.php');

$filter = new \Zend\Filter\Encrypt(array(
	'adapter' => 'BlockCipher',
	'algorithm' => 'aes',
	'key' => '084fb9260be52c67d479e6aaac7f746e26--'
));


$filterDec = new \Zend\Filter\Decrypt(array(
	'adapter' => 'BlockCipher',
	'algorithm' => 'aes',
	'key' => '084fb9260be52c67d479e6aaac7f746e26--'
));

$dn = $filter->filter('salam');
echo $dn;
echo $filterDec->filter($dn);