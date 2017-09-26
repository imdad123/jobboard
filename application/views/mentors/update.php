<?php include "inc/header.php"; ?>

<?php include "inc/sidebar.php";?>

<div class="col-md-7 col-md-offset-3 mgr-top-40">

	<?php echo form_open_multipart("Blog/update/".$this->uri->segment(3));?>
	<?php foreach($update as $update):?>
	<?php echo form_label("Title");?>
	<?php echo form_input(array(
		"name"=>"title",
		"type"=>"text",
		"value" => set_value("title",$update->title),
		"class"=>"form-control"
	));?>
	<?php echo form_label("Description"); ?>
 <?php 
echo form_textarea(array(
	"name"=>"description",
	"class" => "form-control",
	"value" => set_value("title",$update->description),
	));

 ?>
 <?php 

echo form_upload(array(
	"name"=>"userfile",
	"class" => "btn btn-primary",

	))

 ?>
 <img src="<?php echo $update->image; ?>"  width="80" height="80" alt="">
<select name="c_id" class="form-control">
 <?php foreach($cat as $cate):?>
<option value="<?php echo $cate->id;?>"><?php echo $cate->name;?></option>
<?php endforeach; ?>
 </select>

 <?php 
echo form_submit("submit","Add Blog",array("class" => "btn-success form-control"))

 ?>
  <?php endforeach; ?>
	<?php form_close();?>

</div>
</div>
</div>

		

<?php include "inc/footer.php"; ?>
