<?php
$_title = 'Things to do';
require_once __DIR__.'/comp_header.php';
?>

<main>

    <h2>Find the best things to do for your trip.</h2>
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

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>