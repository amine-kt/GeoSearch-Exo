<?php
/**
 * Gestion des appels API REST COUNTRIES
 * Définitions des functions
 */

 //Récuperation de la liste des pays par continent

 function listCountriesByContinent($continent){
    $url = "https://restcountries.com/v3.1/region/$continent";
    $json = file_get_contents($url);
    $countries = json_decode($json, true);
    // return $countries;

    foreach ($countries as $country) {
        echo '<li style = "background: url(\''.$country['flags']['svg'].'\')">';
        echo '<a href="/country.php?cca2='.$country['cca2'].'">';
        echo $country['translations']['fra']['common'];
        echo '</a>';
        echo '</li>';
    }
 }









?>