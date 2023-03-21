<h2>Kondisi If</h2>
<?php
$nama_hari = date("l");
if ($nama_hari == "Saturday") {
echo "Sabtu";
} elseif ($nama_hari == "Friday") {
echo "Jumat";
} else {
echo "Kamis";
}
?>