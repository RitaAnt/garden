<?php
include __DIR__."\Prototype\include.php";




                                        //  Яблоня
$resultApple = 0;
$weightApple = 0;

                                        //Создание первой, оригинальной яблони и вывод информации о ней.
$AppleTree_original = new AppleTree(); 
echo 'Номер яблони: '.$AppleTree_original->getId().'. Количество яблок на ней: '.$AppleTree_original->getAmount().'<BR>';

$resultApple+=$AppleTree_original->getAmount();

                                        //посчитать вес яблок у этой яблони
$apples = $AppleTree_original->harvest();


                                        //Создание клонов яблонь и вывод информации о них.
for($i = 1; $i < 10; $i++){ 
    $AppleTree_clon = clone $AppleTree_original;
    echo 'Номер яблони: '.$AppleTree_clon->getId().'. Количество яблок на ней: '.$AppleTree_clon->getAmount().'<BR>';
    $resultApple+=$AppleTree_original->getAmount();
    array_merge($apples, $AppleTree_clon->harvest());
}
                                        //посчитать вес яблок у каждой яблонь из цикла

foreach($apples as $apple){
    $weightApple += $apple->getWeight();
}
echo "Вес всех яблок: $weightApple <br><br>";

                                        //  Груша
$resultPear = 0;
$weightPear = 0;

                                        //Создание первой, оригинальной груши и вывод информации о ней.
$PearTree_original = new AppleTree(); 
echo 'Номер груши: '.$PearTree_original->getId().'. Количество груш на ней: '.$PearTree_original->getAmount().'<BR>';
$resultPear+=$PearTree_original->getAmount();

                                        //посчитать вес груш у этой груши
$pears = $PearTree_original->harvest();
                                        //Создание клонов груши и вывод информации о них.
for($i = 1; $i < 15; $i++){ 
    $PearTree_clon = clone $PearTree_original;
    echo 'Номер груши: '.$PearTree_clon->getId().'. Количество груш на ней: '.$PearTree_clon->getAmount().'<BR>';
    $resultPear+=$PearTree_original->getAmount();
    array_merge($pears, $PearTree_clon->harvest());
}
                                        //посчитать вес груш у каждой груши из цикла
foreach($pears as $pear){
    $weightPear += $pear->getWeight();
}
echo "Вес всех груш: $weightPear <br><br>";

