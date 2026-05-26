<html>
<head>
<title>Listing 9.14 A file upload script</title>
</head>
<body>
<h1>File Upload Results</h1>
<?php
$upload_dir = "uploads/";
foreach ($_FILES as $file_name => $file_array) {
echo "path: " . $file_array['name'] . "<br>";
echo "name: " . $file_array['name'] . "<br>";
echo "type: " . $file_array['type'] . "<br>";
echo "size: " . $file_array['size'] . "<br><br>";
if (is_uploaded_file($file_array['tmp_name'])) {
$destination = $upload_dir . basename($file_array['name']);
if (move_uploaded_file($file_array['tmp_name'], $destination)) {
echo "file was moved<br><br>";
} else {
echo "Couldn't move file<br><br>";
}
}
}
?>
</body>
</html>