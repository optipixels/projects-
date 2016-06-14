<?php
include_once('php/header.php');
?>
	<div id="main">
		<div class="holder">
			<?php if(isset($_GET['id']) && isset($_GET['page'])){
				$id = $_GET['id'];
				$page = $_GET['page'];

				// Slider Edit Section
				if( $page == 'slider'){
					forms('slider-edit', $page, $id);
					table('slider'); 
				}
				// About Edit Section 
				if( $page == 'about'){
					forms('about-edit', $page, $id);
					table('about'); 
				}
				// Team Edit Section 
				if( $page == 'team'){
					forms('team-edit', $page, $id);
					table('team'); 
				}
				// Category Edit Section 
				if( $page == 'cat'){
					forms('cat-edit', $page, $id);
					table('cat'); 
				}
				// Process Edit Section 
				if( $page == 'process'){
					forms('process-edit', $page, $id);
					table('process'); 
				}
				// Products Edit Section 
				if( $page == 'prod'){
					forms('prod-edit', $page, $id);
					table('prod'); 
				}
				// Certifications Edit Section 
				if( $page == 'certification'){
					forms('certification-edit', $page, $id);
					table('certification'); 
				}
				// Contact Edit Section 
				if( $page == 'contact'){
					forms('contact-edit', $page, $id);
					table('contact'); 
				}
				// Special Announcements Add Section 
				if( $page == 'special'){
					forms('special-edit', $page, $id);
					table('special'); 
				}
			}?>
		</div>
	</div>
</body>
</html>