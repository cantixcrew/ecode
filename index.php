<!DOCTYPE html>
<!-- Name            : Cantix Encode & Decode Tools -->
<!-- Author          : Rex4 -->
<!-- Team            : Cantix Crew -->
<!-- Release Date    : 19-02-2024 -->
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
    <p style="text-align: center;">Base64 Encode & Decode</p>
    <form action="process.php" method="post">
        <label for="input-text">Input Text:</label>
        <textarea id="input-text" name="inputText" rows="4" cols="50" required></textarea><br>

        <input type="radio" name="cantix" value="encode" checked> Encode
        <input type="radio" name="cantix" value="decode"> Decode<br>

        <button type="submit">Submit</button>
    </form>
   <div class="social">
        <a href="https://www.instagram.com/cantix_crew" target="_blank"><img src="img/ig.png" height="12px"> Instagram</a>
        <a href="https://github.com/cantixcrew" target="_blank"><img src="img/git.png" height="17px"> Github</a>
        <a href="https://www.youtube.com/user/cantixcrew" target="_blank"><img src="img/yt.png" height="10px"> Youtube</a>
    </div>

    <div class="footer">
        <p>Encode & Decode Tools by @cantixcrew</p>
    </div>
</body>
</html>
