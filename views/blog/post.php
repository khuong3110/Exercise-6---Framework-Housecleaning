
<?php include('views/elements/header.php');?>
<?php 
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">
        <?php
            if($isAdmin){
                echo'<a href="'.BASE_URL.'manageposts/edit/'.$pID.'"  style="float:right"><small>Edit Post</small></a>';
            }
        ?>


        <h1><?php echo $title;?></h1>
        <h6 style="color:#bdbdbd;"><?php $d = new DateTime( $date); echo $d->format("l, F d, Y h:i:s ")?> - Author: <?php echo $first_name;?> <?php echo $last_name;?> - Category: <?php echo $name;?></h6>
  </div>

<?php echo $content;?>
    <br>
    <a href="<?php echo BASE_URL?>blog" ><small><< Back to Blog</small></a>
</div>
<?php }?>



<?php include('views/elements/footer.php');?>