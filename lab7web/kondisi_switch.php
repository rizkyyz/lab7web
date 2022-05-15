<h1> KONDISI SWITCH </h1>
<?php
$nama_hari = date("1");
switch ($nama_hari) {
case "Sunday":
echo "Minggu";
break;
case "Monday":
echo "Senin";
break;
case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
}
    ?>