<?php
$_title = 'Admin';
require_once __DIR__.'/comp_header.php';
?>

<section>
    <h2 class="mt1">Welcome, <?= $_SESSION['user_first_name'] ?>!</h2>

    <h3>Manage flights</h3>
    <div id="all_flights"></div>
    <h3>Upload photo</h3>
    <div id="photo_upload">
        <form action="api-upload-photo" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
</section>