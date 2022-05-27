<?php
$array = [
'SKLAD1' => [
   'EDA' => [

        'TOVAR1' => 
        [
            'NAME' => 'Товар1',
            'PRICE' => 11111
        ],

        'TOVAR2' =>
        [
            'NAME' => 'Товар2',
            'PRICE' => 3
        ],
    ],

    'NAPITKI' => [

        'TOVAR55' => [
            'NAME' => 'Товар3',
            'PRICE' => 2
        ],

        'TOVAR54' => 
        [
          'NAME' => 'Товар4',
          'PRICE' => 15
        ],
    ],
],

'SKLAD2' => [
'EDA' => [
'TOVAR66' => [
            'NAME' => 'Товар5',
            'PRICE' => 1234
        ],

        'TOVAR67' => 
        [
            'NAME' => 'Товар6',
            'PRICE' => 12347
        ],
    ],

    'NAPITKI' => [
         'TOVAR77' => 
        [
            'NAME' => 'Товар7',
            'PRICE' => 135
        ],

        'TOVAR78' =>
        [
        'NAME' => 'Товар8',
        'PRICE' => 12
        ],
  ],
 ],
];

 
foreach($array as $sclad){

     foreach($sclad as $k=>$tovar){
        foreach($tovar as $price)
        foreach($tovar as $key=>$price2){
            if($price['PRICE']<$price2['PRICE']){
            $row[]=$key;
            

}
else{
    $row[]=$key;
    
}
     }
}


   
}
var_dump($row);
?>