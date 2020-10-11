<?php
$size = 200;
$type = "PNG";
$counter = 0;
$file2=$_GET["image"].".PNG";
$line = "return require 'map_gen.maps." . htmlspecialchars($_GET["image"])."'";
echo "<center>";
echo "<table><form action=". "./lista2.php" . ">";
foreach(glob("*.".$type) as $file){
$file = basename($file,".".$type);
echo "<label for=".$file.">".$file."</label>";
echo "<input type=". "radio" . " name=" . "image" ." value=". $file . ">";
echo "<img src=" . $file . " " ."width=" . $size . "height=" . $size .">";
echo "<br>";
echo "<br>";
}
echo "<input type=" . "submit" . " value=" . "Submit" ."></form><br>";
echo "<br>";
if (file_exists($file2)) {
    $file = fopen("map_selection.lua","w");
	fwrite($file,$line);
	fclose($file);
	echo "map_selection.lua is writed<br>";
} else {
    echo "Try selecting map<br>";
}
print($line);
?>
