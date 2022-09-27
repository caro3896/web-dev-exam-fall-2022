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
        <div class="card2-top">
            <div>
                <h2 class="mt1">Travel inspiration</h2>
                <p class="mt1">Our latest travel tips, expert hacks and industry insights to help make your journey one to remember</p>
            </div>
            <button>More inspiration</button>
        </div>
        <div class="card2-bottom-container">
            <div class="card2-bottom mt1">
            <div class="next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="JRE_-arrow-svg" role="img" cleanup=""><path d="M79.999 160a5 5 0 0 1-3.698-8.363L123.243 100L76.3 48.363a5 5 0 0 1 7.399-6.727l50 55a5.002 5.002 0 0 1 0 6.727l-50 55a4.986 4.986 0 0 1-3.7 1.637z"></path></svg></div>
                <img src="/images/corona.jpg" alt="">
                <h5>Coronavirus update: What do the US travel restrictions mean for me?</h5>
                <p>May 6, 2020 - 3 min</p>
            </div>
            <div class="card2-bottom mt1">
                <img src="/images/corona2.jpg" alt="">
                <h5>What to know about coronavirus (COVID-19) and travel</h5>
                <p>Jan 7, 2021 - 2 min</p>
            </div>
            <div class="card2-bottom mt1">
                <img src="/images/temple.jpg" alt="">
                <h5>10 sustainable destinations to put on your bucket list</h5>
                <p>May 6, 2020 - 10 min</p>
            </div>
            <div class="card2-bottom mt1">
                <img src="/images/ecotravel.jpg" alt="">
                <h5>10 eco travel trends to look out for</h5>
                <p>Feb 16, 2022 - 8 min</p>
            </div>
        </div>
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