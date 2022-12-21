<?php

// Include the QR code library
require_once 'phpqrcode/qrlib.php';

// Check if the form has been submitted
if (isset($_POST['text'])) {
  // Get the text from the form
  $text = $_POST['text'];

  // Set the filename and filepath for the QR code image
  $filename = 'custom.png';
  $filepath = 'qr-codes/' . $filename;

  // Generate the QR code image
  QRcode::png($text, $filepath);

  // Display the QR code image
  echo '<img src="' . $filepath . '" alt="QR code">';
} else {
  // Display the form
  echo '
  <form method="post">
    <label for="text">Text:</label><br>
    <input type="text" id="text" name="text"><br>
    <input type="submit" value="Generate QR code">
  </form> 
  ';
}

?>