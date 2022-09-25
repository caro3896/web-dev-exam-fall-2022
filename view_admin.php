<?php
$_title = 'Admin';
require_once __DIR__.'/comp_header.php';
try{
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM flights');
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($flights);
} catch(Exception $ex){
    echo 'Sorry, something went wrong';
    exit();
};
?>

<section>
    <h2 class="mt1">Welcome, <?= $_SESSION['user_first_name'] ?>!</h2>

    <h3 class="mt1">Manage flights</h3>
    <div class="mt1">
        <?php
            foreach($flights as $flight){
        ?>
            <div class="all-flights-container">
                <div class="all-flights">
                <h4>Departure</h4>
                    <div class="departure">
                        <div>
                            <img src="images/city_thumbnails/<?=$flight['from_city_img']?>" alt="the image">
                        </div>
                        <div>
                            <p><?= $flight['from_city_name'] ?></p>
                            <p><?= $flight['from_city_airport_name']?></p>
                            <p>Departure date: <?= $flight['departure_date'] ?></p>
                            <p>Departure time: <?= $flight['departure_time'] ?></p>
                        </div>
                    </div>
                    <h4>Arrival</h4>
                    <div class="arrival">
                        <div>
                            <img src="images/city_thumbnails/<?=$flight['to_city_img']?>" alt="the image">
                        </div>
                        <div>
                            <p><?= $flight['to_city_name'] ?></p>
                            <p><?= $flight['to_city_airport_name'] ?></p>
                            <p>Arrival date: <?= $flight['arrival_date'] ?></p>
                            <p>Arrival time: <?= $flight['arrival_time'] ?></p>
                        </div>
                    </div>
                </div>             
                <form>
                    <input style="display:none" type="text" name="flight_id" value="<?= $flight['flight_id'] ?>">
                    <button id="delete" onclick="deleteFlight(); return false">🗑️ Delete</button>
                </form>
            </div>
        <?php
        }
        ?>
    </div>

    <h3 class="mt1">Upload photo</h3>
    <div class ="mt1" id="photo-upload">
        <form id="upload-image" enctype="multipart/form-data" onsubmit="validateImage(uploadImage); return false" >
            <Label for="fileToUpload">Select image to upload</Label>
            <input type="file" name="fileToUpload" id="fileToUpload" onchange="clearImageInput()">
            <input  type="submit" value="Upload image" name="submit">
            <p class="image-error">Image not allowed</p>
        </form>
    </div>
</section>

<?php
require_once __DIR__.'/comp_footer.php';
?>