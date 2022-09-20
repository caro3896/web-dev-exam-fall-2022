<?php
$_title = 'Admin';
require_once __DIR__.'/comp_header.php';
?>

<section>
    <h2 class="mt1">Welcome, <?= $_SESSION['user_first_name'] ?>!</h2>

    <h3 class="mt1">Manage flights</h3>
    <div id="all-flights"></div>
    <h3 class="mt1">Upload photo</h3>
    <div class ="mt1" id="photo-upload">
        <form action="api-upload-photo" method="post" enctype="multipart/form-data">
            <Label for="fileToUpload">Select image to upload</Label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload image" name="submit">
        </form>
    </div>
</section>

<?php
require_once __DIR__.'/comp_footer.php';
?>