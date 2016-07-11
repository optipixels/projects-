<?php
include_once('php/header.php');
?>
	<div id="main">
		<div class="holder">
			<?php if(isset($_GET['add'])){
				$page = $_GET['add'];

				// Slider Add Section
				if( $page == 'slider'){
					forms('slider-add');
					table('slider'); 
				}
				// News Add Section
				if( $page == 'news'){
					forms('news-add');
					table('news'); 
				}
				// About Add Section 
				if( $page == 'about'){
					forms('about-add');
					table('about'); 
				}
				// Team Add Section 
				if( $page == 'team'){
					forms('team-add');
					table('team'); 
				}
				// Category Add Section 
				if( $page == 'cat'){
					forms('cat-add');
					table('cat'); 
				}
				// Sub Category Add Section 
				if( $page == 'sub-cat'){
					forms('sub-cat-add');
					table('sub-cat'); 
				}
				// Process Add Section 
				if( $page == 'process'){
					forms('process-add');
					table('process'); 
				}
				// Products Add Section 
				if( $page == 'prod'){
					forms('prod-add');
					table('prod'); 
				}
				// Certifications Add Section 
				if( $page == 'certification'){
					forms('certification-add');
					table('certification'); 
				}
				// Special Announcements Add Section 
				if( $page == 'special'){
					forms('special-add');
					table('special'); 
				}
				
			} ?>
		</div>
	</div>
</body>
</html>