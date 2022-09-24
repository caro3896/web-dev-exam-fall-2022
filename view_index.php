<?php
$_title = 'Momondo';
require_once __DIR__.'/comp_header.php';
?>

<main>

    <h1 class="mt2"><?= $dictionary[$lang.'_welcome']?></h1>

    <form id="search_flight" class="mt2" onsubmit="getFlights(); return false">
        <div id="form_container">
            <div id="from-container">
                <input id="from-input" type="text" placeholder="<?= $dictionary[$lang.'_from']?>"
                oninput="showFromResults()">
                <div id="from-results">
                </div>
            </div>
    
            <div id="to-container">
                <input id="to-input" type="text" placeholder="<?= $dictionary[$lang.'_to']?>"
                oninput="showToResults()">
                <div id="to-results"></div>
            </div>
        </div>
        <button><?= $dictionary[$lang.'_search']?></button>
    </form>

    <div id="flight-results">

    </div>

    <h2 class="mt3">Here's why travellers choose Momondo</h2>

    <div id="options" class="mt1">

        <div class="option">
            <div class="left">🚀</div>
            <div class="right">
                <p class="top">Best travel deals</p>
                <p class="bottom">Find the best deals avaliable from 900+ travel sites.</p>
            </div>
        </div>

        <div class="option">
            <div class="left">🚀</div>
            <div class="right">
                <p class="top">Best travel deals</p>
                <p class="bottom">Find the best deals avaliable from 900+ travel sites.</p>
            </div>
        </div>

        <div class="option">
            <div class="left">🚀</div>
            <div class="right">
                <p class="top">Best travel deals</p>
                <p class="bottom">Find the best deals avaliable from 900+ travel sites.</p>
            </div>
        </div>

        <div class="option">
            <div class="left">🚀</div>
            <div class="right">
                <p class="top">Best travel deals</p>
                <p class="bottom">Find the best deals avaliable from 900+ travel sites.</p>
            </div>
        </div>

    </div>

    <div class="card mt2">
        <img src="images/travel.jpg" alt="">
        <div>
            <h2 class="mt1">Destinations you can travel to now</h2>
            <p class="mt1">Popular destinations open to most visitors from Denmark</p>
            <button>Read article</button>
        </div>
    </div>

    
    <h2 class="mt2">Popular cities</h2>
    <p style="text-align:center" class="mt1">Most searched cities on Momondo</p>
    <div id="popular_cities">
        <div class="popular_city">
            <img src="images/city_thumbnails/barcelona.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">FLIGHT TO</p>
                <p class="popular_city_name">Barcelona</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/london.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">FLIGHT TO</p>
                <p class="popular_city_name">London</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/newyork.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">FLIGHT TO</p>
                <p class="popular_city_name">New York</p>
            </div>
        </div>
</div>
    
</main>
<?php
require_once __DIR__.'/comp_footer.php';
?>