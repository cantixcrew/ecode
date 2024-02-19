<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base64 Encoder & Decoder</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="cantix">
        <img src="img/cantix.png">
    </div>
    <center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST["inputText"];
    $cantix = $_POST["cantix"];
    
    echo '<div class="result-container">'; // Container for the result

    if ($cantix == "encode") {
    $encodedText = base64_encode($inputText);
    echo "Encoded Result: <br><span style='color: green;'>" . $encodedText . "</span>";
} elseif ($cantix == "decode") {
    $decodedText = base64_decode($inputText);
    echo "Decoded Result: <br><span style='color: green;'>" . $decodedText . "</span>";
}

    echo '</div>'; // Close the result container
}
?>
<a href='./index.php' class='btn btn-primary'><img src="img/back.png" height="50px"></a>
</center>
<div class="footer">
    <p>Encode & Decode Tools by @cantixcrew</p>
</div>
</body>
</html>
