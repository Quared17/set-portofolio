<?php

	$list_nav_link = [
						[
							'title' => 'About',
							'target' => 'about-section'
						],

						[
							'title' => 'My Skill',
							'target' => 'skill-section'
						],

						[
							'title' => 'My Portofolio',
							'target' => 'portofolio-section'
						],

						[
							'title' => 'Contact Me',
							'target' => 'contact-section'
						]
					 ];

	if (isset($_GET['active-section'])){
		$active_section = $_GET['active-section'];
	}

	else {
		$active_section = 'About';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="responsive.css" rel="stylesheet" type="text/css">
	<link href="fontAwesome/css/all.min.css" rel="stylesheet">
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<title> Hello World </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="container-navbar">
		<h2 id="logo">
			Quared.id
		</h2>

		<div class="container-nav-link">
			<?php foreach ($list_nav_link as $nav_link) : ?>
				<?php $title = $nav_link['title']; ?>

				<?php if ($active_section === $title) : ?>
					<a class="active" href="?active-section=<?= $nav_link['title']; ?>#<?= $nav_link['target']; ?>"> 	
						<?= $nav_link['title']; ?> 
					</a>

				<?php else : ?>
					<a href="?active-section=<?= $nav_link['title']; ?>#<?= $nav_link['target']; ?>"> 	
						<?= $nav_link['title']; ?> 
					</a>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="container-content" id="about-section"> </div>

	<div class="container-content" id="skill-section"> 
		<h1 class="container-title-section">
			My Skill
		</h1>

		<div class="container-grid">
			<div class="list-skill-item"> 
				<div class="container-logo-skill">
					<img src="Image/test.png">
				</div>
				<!-- <i class="fab fa-html5 item-html"></i> -->

				<h3> HTML 5 </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/css.png">
				</div>
				<!-- <i class="fab fa-css3-alt item-css"></i> -->

				<h3> CSS 3 </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/php.png">
				</div>

				<h3> PHP </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/sql.png">
				</div>

				<h3> MySQL </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/api.png">
				</div>

				<h3> API </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/javascript.png">
				</div>
				<!-- <i class="fab fa-js-square item-javascript"></i> -->

				<h3> Javascript </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/jquery.png">
				</div>
				<!-- <i class="fab fa-js-square item-javascript"></i> -->

				<h3> Jquery </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/git.png">
				</div>
				<!-- <i class="fab fa-js-square item-javascript"></i> -->

				<h3> Git </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/github.png">
				</div>
				<!-- <i class="fab fa-js-square item-javascript"></i> -->

				<h3> Github </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/seo.png">
				</div>
				<!-- <i class="fab fa-laravel item-laravel"></i> -->

				<h3> SEO </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/figma.png">
				</div>
				<!-- <i class="fab fa-laravel item-laravel"></i> -->

				<h3> Figma </h3>
			</div>

			<div class="list-skill-item">
				<i class="fab fa-bootstrap item-boostrap"></i>

				<h3> Boostrap </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/laravel.png">
				</div>
				<!-- <i class="fab fa-laravel item-laravel"></i> -->

				<h3> Laravel </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/codeIgniter.png">
				</div>
				<!-- <i class="fab fa-js-square item-javascript"></i> -->

				<h3> CodeIgniter </h3>
			</div>

			<div class="list-skill-item">
				<div class="container-logo-skill">
					<img src="Image/wordpress.png">
				</div>
				<!-- <i class="fab fa-laravel item-laravel"></i> -->

				<h3> Wordpress </h3>
			</div>
		</div>
	</div>

	<div class="container-content" id="portofolio-section"> </div>
	<div class="container-content" id="contact-section"> </div>

	<script type="text/javascript">
		// $(document).ready(function(){
		// 	$('.nav-link').click(function(){
		// 		$('.nav-link').siblings('active');
		// 	})
		// });
	</script>
</body>
</html>

































