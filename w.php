<div class="rank-panel">
	<div class="rank-panel-detail m-t-60">
		<img src="<?php echo $site['img-kiri'];?>">
		<div class="rank-title round">Website</div>
		<img src="<?php echo $site['img-kanan'];?>">
	</div>
</div>
<p>

<?php
$url = 'https://cdn-k.000webhostapp.com/movi/w.php'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$no = 1;
?>

<?php foreach ($characters as $character) : ?>
    <div class="box-luar round">
		<div class="box round <?php echo $site['tema'] ;?>"><?php echo $no++;?></div>
		<div class="textku pd round"><?php echo $character->txt_web; ?></div>
		<div class="mg"><a class="box kiri round <?php echo $site['btn-link'] ;?>" href="<?php echo $character->l_web; ?>">Watch</a></div>
	</div>
<?php endforeach; ?>
