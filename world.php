<?php
    require './functions/restcountries.php';
    include './partials/_head.html.php';
?>


<main>
    <h1 class="big-text">Tous les Pays du Monde</h1>
    <div class="continent-subtitle">
        <!-- Europe -->
        <h3>Europe</h3>
    </div>    
    <ul class="countries">
        <?php  
            listCountriesByContinent('europe')
        ?>
    </ul>
    <!-- Europe -->
    <!-- Afrique -->
    <div class="continent-subtitle">
        <h3>Afrique</h3>
    </div>    
    <ul class="countries">
        <?php  
            listCountriesByContinent('africa')
        ?>
    </ul>
    <!-- Afrique - FIN -->
    <!-- Asie -->
    <div class="continent-subtitle">
        <h3>Asie</h3>
    </div>    
    <ul class="countries">
        <?php  
             listCountriesByContinent('asia')
        ?>
    </ul>
    <!-- Asie - FIN -->
    <!-- Amerique -->
    <div class="continent-subtitle">
        <h3>Amerique</h3>
    </div>    
    <ul class="countries">
        <?php  
             listCountriesByContinent('america')
        ?>
    </ul>
    <!-- Amerique - FIN -->
    <!-- Oceanie -->
    <div class="continent-subtitle">
        <h3>Oceanie</h3>
    </div>    
    <ul class="countries">
        <?php  
             listCountriesByContinent('oceania')
        ?>
    </ul>
    <!-- Oceanie - FIN -->
    <div class="continent-subtitle">
        <h3>Antarctique</h3>
    </div>    
    <ul class="countries">
        <?php  
             listCountriesByContinent('Antarctic')
        ?>
    </ul>
</main>

<?php  include './partials/_footer.html.php'; ?>