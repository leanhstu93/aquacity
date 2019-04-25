<ul class="breadcrumb">
	<li><a href=""><?php echo $this->ngonngu[37] ?></a></li>
	<?php
	if(count($data)>1)
	{
	for($i = 1;$i < count($data);$i++) { ?>
		<li><a href="<?php echo $data[$i]['Href'] ?>"> <span class="noi"> »</span>  <?php echo $data[$i]['Name'] ?></a></li>
<?php }
}
	?>
	
	<li><span> <span class="noi"> »</span>  <?php echo $data[0]['Name'] ?></span></li>
</ul>
<style type="text/css">
ul.breadcrumb li span{color: #737171;}
ul.breadcrumb li a{    color: black;}
	ul.breadcrumb li{float: left;    text-transform: none;}
	ul.breadcrumb li .noi{position: relative;    top: -1px; margin-right: 5px; margin-left: 5px;}
	ul.breadcrumb{width: 100%;
    float: left;
    margin-bottom: 5px;padding-top: 3%}
</style>