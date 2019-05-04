<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>About Us</h4>
				<p>It is a long established fact that a reader will looking layout. There are many variations of passages of Lorem Ipsum available words.</p>
				<span>Address</span>
				<p class="top">jl. Kakaktua blok T no.13</p>
				<p>Wiradesa, kab. Pekalongan</p>
				<p>Indonesia</p>
				<p>WhatsApp : 0821-3304-1413</p>
				<p>E-mail : energenesis121@gmail.com</p>
				<p>session : <?php echo $this->session->userdata('email'); ?></p>
				<div class="f_icons">
					<ul>
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
					</ul>
				</div>
			</div>

			<div class="span1_of_4">
				<h4>latest posts</h4>
				<?php
					$news1 = $this->db->query('select * from news order by id desc limit 3')->result_array();
					foreach ($news1 as $data1) {
				?>
				<span><?= $data1['title']; ?></span>
				<p><?= $data1['date']; ?></p>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>

		<div class="footer_top">
			<div class="f_nav1">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">features</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
</body>
</html>
