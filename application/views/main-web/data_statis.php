<div id="content-tengah">
<?php
foreach($detail->result_array() as $b)
{
echo "<div id='title-isi'>".$b['title']." SMA Al ISLAM</div>";
?>
<?php
	echo"<br><br>";
echo $b['content'];
}
?>
</div>

