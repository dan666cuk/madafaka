<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2>CERO_ai Development Blog.</h2>
		<h3>lets create AI for better future</h3>
	</div>
</div>
</div>
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
		<!-- start details -->
			<?php $data = $data_news[0];?>
			<div class="details">
			<h2><?= $data['title']; ?></h2>
			<div class="det_pic"><img src="<?php echo base_url().'assets/images/'.$data['picture'];?>"/></div>
			<div class="det_text">
				<p class="para"><?= $data['content']; ?></p>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end details -->
	 </div>
	</div>
</div>
</div>
