<?php
$_title = 'Holidays';
require_once __DIR__.'/comp_header.php';
?>

<main>
    <h1>Search and compare package holidays</h1>

    <form id="holidays" class="mt2" onsubmit="return false">
        <div id="holiday">
            <input class="holiday-from" type="text" placeholder="From?">
            <input class="holiday-to" type="text" placeholder="To?">
            <input class="days" type="date" value="2023-07-30" placeholder="From">
            <input class="days" type="date" value="2023-07-30" placeholder="To">
        </div>
        <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="c8LPF-icon" role="img" height="24" cleanup=""><path d="M178.5 171.5l-44.2-44.2c9.8-11.4 15.7-26.1 15.7-42.3c0-35.8-29.2-65-65-65S20 49.2 20 85s29.2 65 65 65c16.1 0 30.9-5.9 42.3-15.7l44.2 44.2c2 2 5.1 2 7.1 0c1.9-1.9 1.9-5.1-.1-7zM30 85c0-30.3 24.7-55 55-55s55 24.7 55 55s-24.7 55-55 55s-55-24.7-55-55z"></path></svg></button>
    </form>


    <div class="card mt2">
        <img src="images/holiday.jpg" alt="">
        <div>
            <h2 class="mt1">Lock in your summer break at today’s prices</h2>
            <p class="mt1">Book with a low deposit of £25pp or £0* when you spread the cost with direct debit</p>
            <button>Book now</button>
        </div>
    </div>

    <div class="card2 mt2">
        <div>
            <div>
                <h2 class="mt1" style="text-align:left">Destinations you can travel to now</h2>
                <p class="mt1">Popular destinations open to most visitors from Denmark</p>
            </div>
            <!-- <button>More inspiration</button> -->
        </div>
        <div class="card2-bottom-container">
            <div class="card2-bottom mt1">
            <div class="next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="JRE_-arrow-svg" role="img" cleanup=""><path d="M79.999 160a5 5 0 0 1-3.698-8.363L123.243 100L76.3 48.363a5 5 0 0 1 7.399-6.727l50 55a5.002 5.002 0 0 1 0 6.727l-50 55a4.986 4.986 0 0 1-3.7 1.637z"></path></svg></div>
                <img src="/images/paris_visit.jpg" alt="">
                <h5>Paris</h5>
                <p>Vaccinated travellers can visit</p>
            </div>
            <div class="card2-bottom mt1">
                <img src="/images/italy_visit.jpg" alt="">
                <h5>Italy</h5>
                <p>Vaccinated travellers can visit</p>
            </div>
            <div class="card2-bottom mt1">
                <img src="/images/cyprus_visit.jpg" alt="">
                <h5>Cyprus</h5>
                <p>Vaccinated travellers can visit</p>
            </div>
            <div class="card2-bottom mt1">
                <img src="/images/greece.jpg" alt="">
                <h5>Greece</h5>
                <p>Vaccinated travellers can visit</p>
            </div>
        </div>
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
</main>
<?php
require_once __DIR__.'/comp_footer.php';
?>