
<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>

</div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
        <h6 style="color:#bdbdbd;"><?php $d = new DateTime( $p['date']); echo $d->format("l, F d, Y h:i:s ")?> - Author: <?php echo $p['first_name'];?> <?php echo $p['last_name'];?> - Category: <?php echo $p['name'];?></h6>
	<p><?php echo $p['content'];?></p>
<?php }?>
</div>




<?php include('views/elements/footer.php');?>