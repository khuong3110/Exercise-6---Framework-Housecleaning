<?php include('views/elements/header.php');?>
<?php $message; ?>
<div class="container">
	<div class="page-header">
   <h1> Post Manager </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message;?>
    </div>
  <?php }?>
    <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $_SESSION['message']?>
            <?php unset($_SESSION['message']); ?>
        </div>
    <?php }?>
  <div class="row">
      <div class="span8">
        <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add a New Post</a>
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

