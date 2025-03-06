<!-- format du footer -->

<footer>
    <div class="piedpage global">
        <?php wp_nav_menu(array(
            "menu"=> "externe",
            "container" => "nav",
            "container_class" => "piedpage__s1__externe"
        )); ?>

        <section class="piedpage__s1">
            <div class="piedpage__s1__adresse">
                  <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form() ?>
                  </div>

                  <p class="piedpage__s1__coord">Arik Malenfant-Lacombe</p>
                  <p class="piedpage__s1__coord">2901 rue Sherbrooke E</p> 
                  <p class="piedpage__s1__coord">123-456-7899</p> 
                  <p class="piedpage__s1__coord">info@cmaisonneuve.qc.ca</p> 
                  
                  <div class="piedpage__s1__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="18" height="18">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="18" height="18">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="18" height="18">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="18" height="18">
                  </div>  
            </div>

            <div class="piedpage__s1__externe">
              <h2>Liens externes</h2>
              <div class="menu__ext">
                <a href="https://www.airtransat.com/en-CA/home?search=flight&flightType=RT&gateway=AIRPORT_YYZ&pax=1-0-0-0" target="_blank">Air Transat</a>
                <a href="https://www.saq.com/?srsltid=AfmBOorIdKty25df1X8VK8CAMqCJo3zkJwhloS13WzESJ8zVKAM9EFvK" target="_blank">SAQ</a>
                <a href="https://kodub.itch.io/polytrack" target="_blank">McDonald's</a>
                <a href="https://kodub.itch.io/polytrack" target="_blank">PolyTrack</a>
              </div>
            </div>

            <div class="piedpage__s1__description">
                Notre site comprends des microtransactions. Ne pas utiliser la barre de recherche tant que vous n'avez pas payé 50$ à Arik Malenfant-Lacombe. Requis pour chaque utilisation.
            </div>
        </section>
        
        <section class="piedpage__s2">
        </section>
    </div>
</footer>
<?php wp_footer() ?>