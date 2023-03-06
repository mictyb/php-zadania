


$date = strtotime($birthDate);

echo "urodziles sie w " .date("l",$date)  ." dniu tygodnia "."<br>";


             



return $birthDate;


}




$birthDate= '26.8.1975 12:00:00';

 var_dump(dayOfBirth($birthDate));
