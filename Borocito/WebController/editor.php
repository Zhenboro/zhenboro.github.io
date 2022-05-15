<?php
// configuration
$url = 'https://chemic-jug.000webhostapp.com/BorocitoCMDWebController/editor.php';
$file = $_POST['filePath'];
// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}
// read the textfile
$text = file_get_contents($file);
?>