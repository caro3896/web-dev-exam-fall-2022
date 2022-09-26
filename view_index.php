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
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup=""><path d="M135 80c-8.271 0-15-6.729-15-15s6.729-15 15-15s15 6.729 15 15s-6.729 15-15 15zm0-20c-2.757 0-5 2.243-5 5s2.243 5 5 5s5-2.243 5-5s-2.243-5-5-5zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45s45 20.187 45 45s-20.187 45-45 45zm0-80c-19.299 0-35 15.701-35 35s15.701 35 35 35s35-15.701 35-35s-15.701-35-35-35zm-67.021 75.05L24.95 132.021c-6.643-6.643-6.645-17.396 0-24.041l70.657-70.657C100.328 32.601 106.605 30 113.284 30H155c8.271 0 15 6.729 15 15v38.027a5 5 0 1 1-10 0V45c0-2.757-2.243-5-5-5h-41.716a14.9 14.9 0 0 0-10.606 4.393L32.021 115.05a6.997 6.997 0 0 0 0 9.9l43.029 43.029c2.583 2.582 6.768 2.738 9.524.35a4.998 4.998 0 0 1 7.053.506a5 5 0 0 1-.506 7.053c-6.706 5.808-16.872 5.432-23.142-.838zm64.191-15.927l-14.943-9.963a5 5 0 0 1-1.387-6.934a4.999 4.999 0 0 1 6.934-1.387l7.227 4.817V115c0-2.762 2.238-5 5-5s5 2.238 5 5v30.657l7.227-4.817c2.299-1.534 5.401-.911 6.934 1.387s.911 5.402-1.387 6.934l-14.943 9.963a5.009 5.009 0 0 1-5.662-.001z"></path></svg>
            </div>
            <div class="right">
                <p class="top">Best car hire deals</p>
                <p class="bottom">See deals from hire companies in 70,000+ locations.</p>
            </div>
        </div>

        <div class="option">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup=""><path d="M100 140c-22.1 0-40-17.9-40-40s17.9-40 40-40s40 17.9 40 40s-17.9 40-40 40zm0-70c-16.5 0-30 13.5-30 30s13.5 30 30 30s30-13.5 30-30s-13.5-30-30-30zm0 90c-23.8 0-46.8-10-66.6-28.9C18.7 117 10.9 103 10.6 102.4a5.1 5.1 0 0 1 0-4.8c.3-.6 8-14.6 22.8-28.7C53.2 50 76.2 40 100 40s46.8 10 66.6 28.9C181.3 83 189.1 97 189.4 97.6c.8 1.5.8 3.3 0 4.8c-.3.6-8 14.6-22.8 28.7C146.8 150 123.8 160 100 160zm-79.2-60c6.4 10.3 34.3 50 79.2 50c44.9 0 72.7-39.7 79.2-50c-6.4-10.3-34.3-50-79.2-50c-44.9 0-72.7 39.7-79.2 50zm79.2 20c-2.8 0-5-2.2-5-5s2.2-5 5-5c5.5 0 10-4.5 10-10c0-2.8 2.2-5 5-5s5 2.2 5 5c0 11-9 20-20 20z"></path></svg>
            </div>
            <div class="right">
                <p class="top">Price transparency</p>
                <p class="bottom">See the total cost up front so there are no surprises.</p>
            </div>
        </div>

        <div class="option">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup=""><path d="M87.1 168.8c-35-6.5-59.5-38.2-57-73.7c.2-2.8 2.6-4.8 5.3-4.6c2.8.2 4.8 2.6 4.6 5.3c-2.2 30.4 18.8 57.5 48.8 63.1c2.7.5 4.5 3.1 4 5.8c-.4 2.8-3 4.6-5.7 4.1zm54.4-5.3l-15-15c-2-2-2-5.1 0-7.1s5.1-2 7.1 0l10.1 10.1l11.9-23.8c1.2-2.5 4.2-3.5 6.7-2.2c2.5 1.2 3.5 4.2 2.2 6.7l-15 30c-1.6 3.1-5.6 3.7-8 1.3zM159 89c-4.5-24.5-24-43.8-48.5-48.1c-21-3.7-41.8 3.7-55.5 19.1h30c2.8 0 5 2.2 5 5s-2.2 5-5 5H45c-2.8 0-5-2.2-5-5V25c0-2.8 2.2-5 5-5s5 2.2 5 5v25.7C65.9 34.6 89 27 112.2 31.1c28.6 5 51.4 27.6 56.6 56.1c.5 2.7-1.3 5.3-4 5.8s-5.3-1.3-5.8-4zm-14 101c-24.8 0-45-20.2-45-45s20.2-45 45-45s45 20.2 45 45s-20.2 45-45 45zm0-80c-19.3 0-35 15.7-35 35s15.7 35 35 35s35-15.7 35-35s-15.7-35-35-35z"></path></svg>
            </div>
            <div class="right">
                <p class="top">Book with flexibility</p>
                <p class="bottom">Find cars with free cancellation and enhanced cleaning..</p>
            </div>
        </div>

        <div class="option">
            <div class="left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup=""><path d="M33.389 179.733c-2.614-0.89-4.012-3.73-3.122-6.345c2.59-7.607 5.371-14.857 8.365-21.785 C32.903 135.298 30 120.406 30 107.312c0-31.385 13.929-54.718 41.399-69.351C93.774 26.043 125.266 20 165 20 c5.257 0 6.938 7.121 2.236 9.472c-17.541 8.77-18.18 28.942-18.919 52.3c-0.366 11.581-0.745 23.556-3.467 34.441 c-8.634 34.536-52.98 41.838-71.646 43.375c-2.757 0.208-5.167-1.822-5.393-4.573c-0.227-2.752 1.821-5.167 4.573-5.394 c16.518-1.359 55.699-7.573 62.765-35.834c2.461-9.846 2.823-21.276 3.173-32.332c0.596-18.798 1.207-38.09 12.002-51.167 C77.096 33.256 40 59.13 40 107.312c0 9.281 1.632 19.652 4.863 30.949c11.059-21.933 24.686-40.457 41.665-56.857 c1.985-1.918 5.151-1.864 7.07 0.123s1.864 5.151-0.123 7.07c-25.968 25.082-42.226 54.18-53.742 88.015 C38.843 179.227 36.002 180.622 33.389 179.733z"></path></svg>
            </div>
            <div class="right">
                <p class="top">Eco-friendly options</p>
                <p class="bottom">Filter your search to easily see hybrids and electric cars.</p>
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
    <div class="popular_cities">
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

        <div class="popular_city">
            <img src="images/city_thumbnails/oslo.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">FLIGHT TO</p>
                <p class="popular_city_name">Oslo</p>
            </div>
        </div>

        <div class="popular_city">
            <img src="images/city_thumbnails/paris.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">FLIGHT TO</p>
                <p class="popular_city_name">Paris</p>
            </div>
        </div>


        <div class="popular_city">
            <img src="images/city_thumbnails/stockholm.jpg" alt="">
            <div class="popular_city_right">
                <p class="popular_city_to">FLIGHT TO</p>
                <p class="popular_city_name">Stockholm</p>
            </div>
        </div>
</div>
    
</main>
<?php
require_once __DIR__.'/comp_footer.php';
?>