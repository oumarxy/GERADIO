<?php

namespace Ventes\VentesBundle\Modules;

/**
 * Description of ChiffreLettre
 *
 * @author Bosoftcno
 */
class ChiffreLettre {

public function convert_number_to_words($number) {
       
    $hyphen      = '-';
    $conjunction = ' et ';
    $separator   = ' ';
    $negative    = 'negative ';
    $decimal     = ' virgule ';
    $dictionary  = array(
	    0                   => 'zero',
        1                   => 'un',
        2                   => 'deux',
        3                   => 'trois',
        4                   => 'quatre',
        5                   => 'cinq',
        6                   => 'six',
        7                   => 'sept',
        8                   => 'huit',
        9                   => 'neuf',
        10                  => 'dix',
        11                  => 'onze',
        12                  => 'douze',
        13                  => 'treize',
        14                  => 'quatorze',
        15                  => 'quinze',
        16                  => 'seize',
        17                  => 'dix sept',
        18                  => 'dix-huit',
        19                  => 'dix neuf',
        20                  => 'vingt',
        30                  => 'trente',
        40                  => 'quarante',
        50                  => 'cinquante',
        60                  => 'soixante',
        70                  => 'soixante-dix',
        80                  => 'quatre-vingt',
        90                  => 'quatre-vingt dix',
        100                 => 'cent',
        1000                => 'mille',
        1000000             => 'million',
        1000000000          => 'milliard',
        1000000000000       => 'billion',
        1000000000000000    => 'billiard',
        1000000000000000000 => 'trillion'
    );
    
    if (!is_numeric($number)) {
        return false;
    }
    
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'la conversion est possible que pour les nombres compris entre -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . $this->convert_number_to_words(abs($number));
    }
    
    $string = $fraction = null;
    
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
			if(($tens == 70 || $tens == 90)&&($units)){
				 $string = $dictionary[$tens - 10];
                $string .= $hyphen . $dictionary[$units + 10];
			}else{
              $string = $dictionary[$tens];
					if (($tens == 80) && $units == 0) {
						$string = $dictionary[$tens].'s';
					}
				  if ($units == 1) {
					   $string .= $conjunction  . $dictionary[$units];
				  }elseif($units !== 0) {
					$string .= $hyphen . $dictionary[$units];
					}
			}
            break;
        case $number < 1000:
            $hundreds  = (int)($number / 100);
            $remainder = $number % 100;
			 $string =  ($hundreds == 1) ? $dictionary[100] : $dictionary[$hundreds] . ' ' . $dictionary[100];
			if (($hundreds !== 1 ) && ($remainder == 0)) {
				 $string =  $dictionary[$hundreds] .' '. $dictionary[100].'s';
			
			}
            if ($remainder) {
                $string .= ' '.  $this->convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
			if($baseUnit == 1000 && $numBaseUnits == 1){
				 $string =  $dictionary[$baseUnit];
			}else{
            $string = $this->convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
			}
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= $this->convert_number_to_words($remainder);
            }
            break;
    }
    
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    
    return $string;
}

}
