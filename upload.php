<?php
// Avatar upload for the user profile.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['avatar'])) {
    $name = $_FILES['avatar']['name'];
    $dest = __DIR__ . '/uploads/' . $name;
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dest)) {
        echo 'Uploaded to uploads/' . $name;
    } else {
        echo 'Upload failed';
    }
}
?>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="avatar">
  <button type="submit">Upload avatar</button>
</form>
