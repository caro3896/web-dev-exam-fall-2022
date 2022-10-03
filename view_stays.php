<?php
$_title = 'Stays';
require_once __DIR__.'/comp_header.php';
?>

<main>
    <h1><?= $dictionary[$lang.'_stays_h1']?></h1>

    <form id="stays" class="mt2" onsubmit="return false">
        <div id="stay">
                <input class="country_stay" type="text" placeholder="Where">
                <input class="days" type="date" value="2023-07-22">
                <input class="days" type="date" value="2023-08-08">
                <input class="guests" type="number" placeholder="Guests">
        </div>
        <button><?= $dictionary[$lang.'_search']?></button>
    </form>

    <div class="card mt2">
        <img src="images/book.jpg" alt="">
        <div>
            <h2 class="mt1">Book your summer break today</h2>
            <p class="mt1">Let the ‘Most Trusted Travel Company’ arrange your flight, transfer and accommodation all in one place</p>
            <button>Book now</button>
        </div>
    </div>

    <h2 class="mt2">Trending cities for hotels</h2>
    <p style="text-align:center" class="mt1">The most searched for hotel destinations on momondo</p>
    <div class="popular_cities">
        <div class="popular_city">
            <img src="images/city_thumbnails/barcelona.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">HOTELS IN</p>
                <p class="popular_city_name">Barcelona</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/london.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">HOTELS IN</p>
                <p class="popular_city_name">London</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/newyork.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">HOTELS IN</p>
                <p class="popular_city_name">New York</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/oslo.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">HOTELS IN</p>
                <p class="popular_city_name">Oslo</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/paris.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">HOTELS IN</p>
                <p class="popular_city_name">Paris</p>
            </div>
        </div>


        <div class="popular_city">
            <img src="images/city_thumbnails/stockholm.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">HOTELS IN</p>
                <p class="popular_city_name">Stockholm</p>
            </div>
        </div>
</main>



<?php
require_once __DIR__.'/comp_footer.php';
?>