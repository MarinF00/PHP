<?php

$favouriteAnime = "Bleach";
$numberOfEpisodes = 365;
$viewers = 79.8;
$isBleachTheBest = true;
$array = [
    $favouriteAnime,
    $numberOfEpisodes,
    $viewers,
    $isBleachTheBest
];
$array1 = [
  "title" =>  $favouriteAnime,
   "number" => $numberOfEpisodes,
   "viewers" => $viewers,
   "Anime"  => $isBleachTheBest
];
print_r($array1);
"<br>";
for($i = 0; $i < sizeof($array); $i++)
{
    echo $array[$i];
   echo "<br>";
}
$key = "title";
$counter = 0;
while($counter <= 3)
{
    echo $array[$counter];
    echo "<br>";
    $counter++;
}
foreach ($array1 as $key => $item) {
    echo $key;
    echo " ";
    echo $item;
    echo "<br>";
}
function WhatIsMyFavouriteAnime($name)
{
    if($name === "Joro")
    {
        echo "Naruto";
    }
    else if($name === "Marin")
    {
        echo "Naruto";
    }
    else echo "No person";
}
echo WhatIsMyFavouriteAnime("Marin");
