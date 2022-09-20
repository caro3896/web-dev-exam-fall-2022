<?php
$_title = 'Momondo';
require_once __DIR__.'/comp_header.php';
?>

<main>

    <h1 class="mt2">Welcome! Find a flexible flight for your next trip.</h1>

    <form id="search_flight" class="mt2" onsubmit="getFlights(); return false">
        <div id="form_container">
            <div id="from-container">
                <input id="from-input" type="text" placeholder="From?"
                oninput="showFromResults()">
                <div id="from-results">
                </div>
            </div>
    
            <div id="to-container">
                <input id="to-input" type="text" placeholder="To?"
                oninput="showToResults()">
                <div id="to-results"></div>
            </div>
        </div>
        <button>Search</button>
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

    
</main>
<?php
require_once __DIR__.'/comp_footer.php';
?>