<?php
$_title = 'Things to do';
require_once __DIR__.'/comp_header.php';
?>

<main>

    <h1>Find the best things to do for your trip.</h1>
    <form id="things" class="mt1" onsubmit="return false">
        <input type="text" placeholder="Search for a city" class="camera">
        <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="c8LPF-icon" role="img" height="24" cleanup=""><path d="M178.5 171.5l-44.2-44.2c9.8-11.4 15.7-26.1 15.7-42.3c0-35.8-29.2-65-65-65S20 49.2 20 85s29.2 65 65 65c16.1 0 30.9-5.9 42.3-15.7l44.2 44.2c2 2 5.1 2 7.1 0c1.9-1.9 1.9-5.1-.1-7zM30 85c0-30.3 24.7-55 55-55s55 24.7 55 55s-24.7 55-55 55s-55-24.7-55-55z"></path></svg></button>
    </form>

    <div class="card mt2">
        <img src="images/vienna.jpg" alt="">
        <div>
            <h2 class="mt1">Discover the best of Vienna</h2>
            <p class="mt1">From tours and day trips to events and attractions, there are things to do in Vienna for every traveller.</p>
            <button>Find experiences in Vienna</button>
        </div>
    </div>

    <h2 class="mt2">Explore by interest in Vienna</h2>
    <div class="card3">
            <div class="card3-bottom mt1">
                <img src="/images/tours.jpg" alt="">
                <h5>Tours</h5>
            </div>
            <div class="card3-bottom mt1">
                <img src="/images/events.jpg" alt="">
                <div class="next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="JRE_-arrow-svg" role="img" cleanup=""><path d="M79.999 160a5 5 0 0 1-3.698-8.363L123.243 100L76.3 48.363a5 5 0 0 1 7.399-6.727l50 55a5.002 5.002 0 0 1 0 6.727l-50 55a4.986 4.986 0 0 1-3.7 1.637z"></path></svg></div>
                <h5>Events & attractions</h5>
            </div>
            <div class="card3-bottom mt1">
                <img src="/images/outdoors.jpg" alt="">
                <h5>Outdoor Activities</h5>
            </div>
            <div class="card3-bottom mt1">
                <img src="/images/food.jpg" alt="">
                <h5>Food & drinks</h5>
            </div>
    </div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>