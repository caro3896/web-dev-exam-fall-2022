<?php
$_title = 'Car Hire';
require_once __DIR__.'/comp_header.php';
?>

<main>
    <h1>Hire a car with free cancellation - search now. </h1>

    <form id="cars" class="mt2" onsubmit="return false">
        <div id="car">
                <input class="country_car" type="text" placeholder="Where">
                <input class="days" type="date" value="2023-07-22" placeholder="From">
                <input class="days" type="date" value="2023-07-30" placeholder="To">
        </div>
        <button><?= $dictionary[$lang.'_search']?></button>
    </form>

    <h2>The right price—no matter where.</h2>
    <p>See our partners' Vienna [VIE] options below.</p>
    <div class="ad mt1">
        <div>
            <img src="/images/rentalcars.png" alt="">
            <div><span>Ad</span> | Rentalcars.com</div>
        </div>
        <span>Check Price</span>
    </div>

    <div class="card2 mt2">
        <div>
            <h2 class="mt1">Travel inspiration</h2>
            <p class="mt1">Our latest travel tips, expert hacks and industry insights to help make your journey one to remember</p>
        </div>
        <button>More inspiration</button>
    </div>

    <h2 class="mt2">Trending cities</h2>
    <p style="text-align:center" class="mt1">The most searched for cities on momondo</p>
    <div class="popular_cities">
        <div class="popular_city">
            <img src="images/city_thumbnails/barcelona.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">CAR HIRE IN</p>
                <p class="popular_city_name">Barcelona</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/london.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">CAR HIRE IN</p>
                <p class="popular_city_name">London</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/newyork.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">CAR HIRE IN</p>
                <p class="popular_city_name">New York</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/oslo.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">CAR HIRE IN</p>
                <p class="popular_city_name">Oslo</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/paris.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">CAR HIRE IN</p>
                <p class="popular_city_name">Paris</p>
            </div>
        </div>


        <div class="popular_city">
            <img src="images/city_thumbnails/stockholm.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">CAR HIRE IN</p>
                <p class="popular_city_name">Stockholm</p>
            </div>
        </div>
</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>