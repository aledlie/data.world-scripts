<?php

cencusAPI();

function cencusAPI() {
    $file = file_get_contents("https://api.census.gov/data/2021/acs/acs1/pums?get=MIGSP");
    $obj = json_decode($file);
    var_dump($obj[0]);
}

?>