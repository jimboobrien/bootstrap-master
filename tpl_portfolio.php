<?php
/*
Template Name: Portfolio Template
*/
?>
	<?php get_header(); ?>
	
	<style>
	
		body { background: #dedede; }
	
		/**
		 * Form & Checkbox Styles
		 */

		h4{
		
		color: white;
		}
		 
		label{
		  font-weight: 300;
		}
		 
		button{
		  display: inline-block;
		  vertical-align: top;
		  padding: 5px;
		  margin: 3px; 
		  background: #68b8c4;
		  border: 0;
		  color: #333;
		  font-size: 14px;
		  font-weight: 700;
		  border-radius: 4px;
		  cursor: pointer;
		}
		 
		button:focus{
		  outline: 0 none;
		}
		 
		.controls{
		  background: #333;
		  padding: 2%;
		}
		 
		fieldset{
		  display: inline-block;
		  vertical-align: top;
		  
		  background: #666;
		  padding: .5em;
		  border-radius: 3px;
		}

		.checkbox{
		  display: block;
		  position: relative;
		  cursor: pointer;
		  margin-bottom: 8px;
		}

		.checkbox input[type="checkbox"]{
		  position: absolute;
		  display: block;
		  top: 0;
		  left: 0;
		  height: 100%;
		  width: 100%;
		  cursor: pointer;
		  margin: 0;
		  opacity: 0;
		  z-index: 1;
		}

		.checkbox label{
		  display: inline-block;
		  vertical-align: top;
		  text-align: left;
		  padding-left: 1.5em;
		}

		.checkbox label:before,
		.checkbox label:after{
		  content: '';
		  display: block;
		  position: absolute;
		}

		.checkbox label:before{
		  left: 0;
		  top: 0;
		  width: 18px;
		  height: 18px;
		  margin-right: 10px;
		  background: #ddd;
		  border-radius: 3px;
		}

		.checkbox label:after{
		  content: '';
		  position: absolute;
		  top: 4px;
		  left: 4px;
		  width: 10px;
		  height: 10px;
		  border-radius: 2px;
		  background: #68b8c4;
		  opacity: 0;
		  pointer-events: none;
		}

		.checkbox input:checked ~ label:after{
		  opacity: 1;
		}

		.checkbox input:focus ~ label:before{
		  background: #eee;
		}

		/**
		 * Container/Target Styles
		 */

		.mix-container{
		  padding: 2%;
		  
		  text-align: justify;
		  position: relative;
		}
		/**
		 * Fail message styles
		 */

		.mix-container .fail-message{
		  position: absolute;
		  top: 0;
		  left: 0;
		  bottom: 0;
		  right: 0;
		  text-align: center;
		  opacity: 0;
		  pointer-events: none;
		  
		  -webkit-transition: 150ms;
		  -moz-transition: 150ms;
		  transition: 150ms;
		}

		.mix-container .fail-message:before{
		  content: '';
		  display: inline-block;
		  vertical-align: middle;
		  height: 100%;
		}

		.mix-container .fail-message span{
		  display: inline-block;
		  vertical-align: middle;
		  font-size: 20px;
		  font-weight: 700;
		}

		.mix-container.fail .fail-message{
		  opacity: 1;
		  pointer-events: auto;
		}

		
		
		
		
		
		
		
		
		
		
		
		
		
		
.card {
    overflow: hidden;
    border-radius: 6px;
    position: relative;
    background-color: #FFFFFF;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    margin-bottom: 30px
}

.card .thumbnail {
    border: 0 none;
    padding: 0;
    margin: 0;
    min-height: 270px;
    position: relative
}

.card-small .thumbnail {
    min-height: 200px
}

.card .thumbnail img {
    width: 100%;
	min-height: 270px;
}

.card .thumb-cover {
    padding: 15px 20px;
    height: 100%;
    top: 0;
    position: absolute;
    bottom: 0;
    opacity: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.95)
}

.card .details {
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjM3Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjYyJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjEyIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjkxJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
    background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.75)), color-stop(62%, rgba(0, 0, 0, 0.36)), color-stop(100%, rgba(0, 0, 0, 0)));
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
    background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#5e000000', endColorstr='#00000000', GradientType=0);
    top: 0;
    display: block;
    height: 60px;
    padding: 10px 15px 0;
    position: absolute;
    width: 100%
}

.card .header,
.card .main,
.card .footer {
    display: block
}

.card .time {
    color: #888888;
    font-size: 14px;
    float: left;
    margin-top: 4px
}

.card .numbers {
    color: #FFFFFF;
    float: right;
    margin-top: 6px;
	position: absolute;
    top: 0;
    right: 5px;
}

.card .numbers .downloads,
.card .numbers .comments-icon {
    margin-left: 6px;
    font-size: 15px;
    font-weight: 500
}

.card .numbers .fa {
    font-size: 18px
}

.card .description {
    color: #FFFFFF;
    margin-top: 40px;
    height: 125px;
    font-size: 18px;
    opacity: 0.7
}

.card a:hover .description {
    opacity: 1
}

.card .actions {
    background-color: #FFFFFF;
    bottom: -80px;
    color: rgba(33, 33, 33, 0.79);
    display: block;
    height: 80px;
    left: 0;
    opacity: 1;
    position: absolute;
    text-align: center;
    width: 100%;
    font-size: 18px
}

.card-small .actions {
    height: 55px;
    font-size: 14px
}

.card:hover .actions {
    opacity: 1
}

.card .actions a {
    font-weight: 400
}

.card .actions a:hover {
    opacity: 1
}

.card .separator {
    padding: 0 7px;
    font-weight: 400;
    color: #CCCCCC
}

.card .title {
    margin-top: 45px;
    min-height: 115px
}

.card a .title h3 {
    color: #FFFFFF;
    font-size: 24px;
    font-weight: 400;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.57)
}

.card .user {
    font-weight: 400;
    color: #FFFFFF;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.23);
    line-height: 20px;
    display: block
}

.card .user .name {
    line-height: 35px;
    margin-left: 10px;
    font-size: 16px;
    float: left
}

.card .user .user-photo {
    width: 35px;
    height: 35px;
    border: 2px solid #FFFFFF;
    border-radius: 50%;
    overflow: hidden;
    float: left
}

.card .user-photo img {
    width: 33px
}

.card-info {
    background-color: #FFFFFF;
    position: relative;
    height: 120px
}

.card-info a {
    color: #434343
}

.card-info a:hover {
    color: #232323
}

.card-info .actions a {
    color: #777777
}

.card-info .actions a:hover {
    color: #555555
}

.card-info .actions .blue-text {
    color: #00bbff
}

.card-info .actions .blue-text:hover {
    color: #3883c4
}

.card-info h3 {
    margin-top: 0;
    font-size: 22px
}

.card-small .card-info h3 {
    font-size: 18px
}

.card-info p {
    font-size: 14px;
    font-style: italic;
    margin: 0;
    color: #666666;
    height: 60px
}

.card .card-info .moving {
	 padding: 15px;
    background-color: #FFFFFF;
    position: relative;
}

.card .moving {
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
	-webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    -o-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
	
    -webkit-animation-name: returnBounce;
    -moz-animation-name: returnBounce;
    -ms-animation-name: returnBounce;
    -o-animation-name: returnBounce;
    animation-name: returnBounce 
}


.being-mixed .card .moving { animation: none !important; }

.card:hover .moving {
    -webkit-animation-name: bounces;
    -moz-animation-name: bounces;
    -ms-animation-name: bounces;
    -o-animation-name: bounces;
    animation-name: bounces;
	-webkit-animation-play-state: paused;
	-moz-animation-play-state: paused;
    -o-animation-play-state: paused;
    animation-play-state: paused;
    transition: top 200ms ease-out;
    -webkit-transition: top 200ms ease-out;
    -moz-transition: top 200ms ease-out 
}

    -webkit-animation-name: returnBounce;

@-moz-keyframes bounces {
    0% {
        top: -10px
    }
    8% {
        top: -77px
    }
    26% {
        top: -65px
    }
    38% {
        top: -73px
    }
    65% {
        top: -70px
    }
    75% {
        top: -70px
    }
    100% {
        top: -70px
    }
}

@-moz-keyframes miniBounce {
    0% {
        top: 0px
    }
    15% {
        top: -5px
    }
    30% {
        top: 3px
    }
    45% {
        top: -2px
    }
    60% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-moz-keyframes returnBounce {
    0% {
        top: -70px
    }
    17% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-webkit-keyframes bounces {
    0% {
        top: -10px
    }
    8% {
        top: -77px
    }
    26% {
        top: -65px
    }
    38% {
        top: -73px
    }
    65% {
        top: -70px
    }
    75% {
        top: -70px
    }
    100% {
        top: -70px
    }
}

@-webkit-keyframes miniBounce {
    0% {
        top: 0px
    }
    15% {
        top: -5px
    }
    30% {
        top: 3px
    }
    45% {
        top: -2px
    }
    60% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-webkit-keyframes returnBounce {
    0% {
        top: -70px
    }
    17% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-o-keyframes bounces {
    0% {
        top: -10px
    }
    8% {
        top: -77px
    }
    26% {
        top: -65px
    }
    38% {
        top: -73px
    }
    65% {
        top: -70px
    }
    75% {
        top: -70px
    }
    100% {
        top: -70px
    }
}

@-o-keyframes miniBounce {
    0% {
        top: 0px
    }
    15% {
        top: -5px
    }
    30% {
        top: 3px
    }
    45% {
        top: -2px
    }
    60% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-o-keyframes returnBounce {
    0% {
        top: -70px
    }
    17% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-ms-keyframes bounces {
    0% {
        top: -10px
    }
    8% {
        top: -77px
    }
    26% {
        top: -65px
    }
    38% {
        top: -73px
    }
    65% {
        top: -70px
    }
    75% {
        top: -70px
    }
    100% {
        top: -70px
    }
}

@-ms-keyframes miniBounce {
    0% {
        top: 0px
    }
    15% {
        top: -5px
    }
    30% {
        top: 3px
    }
    45% {
        top: -2px
    }
    60% {
        top: 0px
    }
    100% {
        top: 0px
    }
}

@-ms-keyframes returnBounce {
    0% {
        top: -70px
    }
    17% {
        top: 0px
    }
    100% {
        top: 0px
    }
}






#top .avia_styleswitcher {
    border: 1px solid #e1e1e1;
    position: fixed;
    left: -75px;
    top: 50%;
    margin-top: -225px;
    padding: 20px 20px 20px 99px;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    font-size: 11px;
    color: #777;
    line-height: 16px;
    min-height: 280px
}

#top .switcher_right.avia_styleswitcher {
    right: -75px;
    left: auto;
    top: 100px;
    padding: 19px 99px 19px 19px;
    position: fixed
}

#top .display_switch_false {
    left: -320px
}

#top .switcher_right.display_switch_false {
    right: -320px;
    left: auto
}

.avia_styleswitch_form {
    width: 220px;
    position: relative
}



.avia_styleswitcher .openclose {
    cursor: pointer;
    display: block;
    height: 50px;
    position: absolute;
    right: -50px;
    width: 50px;
    background: #fff;
    border: 1px solid #e1e1e1;
    border-left: none;
    margin-top: -25px;
    top: 50%;
    -webkit-border-top-right-radius: 2px;
    -webkit-border-bottom-right-radius: 2px;
    -moz-border-radius-topright: 2px;
    -moz-border-radius-bottomright: 2px;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px
}

.avia_styleswitcher .openclose>span {
    display: block;
    position: absolute;
    background: transparent url(http://visionquestdev.com/portfolio/wp-content/themes/octane-bootstrap/images/gear-button.png) no-repeat center center;
    top: 0px;
    left: 1px;
    bottom: 0;
    right: 0;
    -webkit-animation: spin 4s infinite linear;
    -moz-animation: spin 4s infinite linear;
    animation: spin 4s infinite linear
}

@-moz-keyframes spin {
    from {
        -moz-transform: rotate(0deg)
    }
    to {
        -moz-transform: rotate(360deg)
    }
}

@-webkit-keyframes spin {
    from {
        -webkit-transform: rotate(0deg)
    }
    to {
        -webkit-transform: rotate(360deg)
    }
}

@keyframes spin {
    from {
        transform: rotate(0deg)
    }
    to {
        transform: rotate(360deg)
    }
}

.avia_styleswitcher.switcher_right .openclose {
    left: -50px;
    right: auto;
    border: 1px solid #e1e1e1;
    border-right: none
}

#top .openclosedisplay_switch {}

#top .openclosedisplay_switch_false {}


.avia_styleswitcher .avia_loader {
    height: 12px;
    width: 12px;
    display: block;
    position: absolute;
    background: transparent url(/themes/wp-content/plugins/avia_cachable_style_switch/loading.gif) no-repeat top left;
    bottom: 21px;
    right: 25px;
    visibility: hidden;
}



@-webkit-keyframes buffering-stripes {
    from {
        background-position: 0 0
    }
    to {
        background-position: 30px 0
    }
}

@-moz-keyframes buffering-stripes {
    from {
        background-position: 0 0
    }
    to {
        background-position: 30px 0
    }
}

@keyframes buffering-stripes {
    from {
        background-position: 0 0
    }
    to {
        background-position: 30px 0
    }
}



.avia_mobile .mejs-overlay-button {
    display: none
}




#filters fieldset { display: inline-block; margin: 0 !important; }

.port-cats, .tech {
	margin: 0; 
	padding: 0;
	list-style-type: none;
}

.tech li i { text-align: right; display: block;  }

.port-cats li i, .tech li i { text-shadow: 2px 2px 2px #000; }

.being-mixed .card .card-info .moving { animation-name: none !important; }




.animation-holder { position: relative; }


.bing-mixed .card .card-info .moving { top: -70px !important; }

.card .card-info:hover .moving { }

	.mix { display: none; }

	
</style>
    <div id="top" class="container">
		<hr>
		
		<label>Filter:</label>
		<select id="filter-select">
		<?php
				$tax = 'portcats';
				$tax_terms = get_terms($tax);
				if ($tax_terms) {
				echo '<option value="all" title="">All</option>';
				foreach ($tax_terms  as $tax_term) {

					$termname = strtolower($tax_term->name);
					$termname = str_replace(' ', '-', $termname);
					echo '<option value=".'.$termname.'" >'.$tax_term->name.'</option>';
				}
			}//end if
			
			?>
		
			</select>
			
			
		
			<label>Sort:</label>
			<select id="sort-select">
				<option value="custom-order:asc">Ascending order</option>
				<option value="custom-order:desc">Descending order</option>
				<option value="random">Random</option>
			</select>
		<hr>
					
									<?php
			/*====================
				FILTER CATEGORIES
			====================*/
			$tax = 'portcats';
			$tax_terms = get_terms($tax);
			if ($tax_terms) {
				echo '<h4>Filter Categories:</h4>';
				echo '<button class="filter" href="#all" data-filter="all" title="">All</button>';
				foreach ($tax_terms  as $tax_term) {

					$termname = strtolower($tax_term->name);
					$termname = str_replace(' ', '-', $termname);
					echo '<button class="filter" data-filter=".'.$termname.'" >'.$tax_term->name.'</button>';
				}
			}//end if
		?>
		
			<?php
		
			$tax2 = 'feattag';
			$tax_terms2 = get_terms($tax2);
			if ($tax_terms2) {
				echo '<h4>Filter Technology:</h4>';
				echo '<button class="filter" href="#all" data-filter="all" title="">All</button>';
				foreach ($tax_terms2  as $tax_term2) {

					$termname = strtolower($tax_term2->name);
					$termname = str_replace(' ', '-', $termname);
					echo '<button class="filter" data-filter=".'.$termname.'" >'.$tax_term2->name.'</button>';
				}
			}//end if
		
		?>
		
	<hr>
	
	
<div id="Container" class="mix-container">
  <div class="fail-message"><span>No items were found matching the selected filters</span></div>
  

  
  <?php 
				$loop = new WP_Query(
					array(
						'post_type' => 'portfolio', 
						'posts_per_page' => -1,
						'order'                  => 'ASC',
					)
				);
				$count = 1; 
				
			?>
			
			<div class="">

				<?php if ( $loop ) : 
					  
					while ( $loop->have_posts() ) : $loop->the_post(); 
						$temp_tax_term = get_terms($tax);
						
					 ?>
						
						
						<?php $terms = get_the_terms( $post->ID, array('portcats','feattag') ); ?>
						<div class="<?php foreach( $terms as $term ) echo ' ' . $term->slug; ?> all mix col-xs-12 col-sm-6 col-md-4 col-lg-4" data-custom-order="<?php echo $count; ?>">
							<div class="animation-holder">	
								<article class="article-<?php the_ID(); ?> block-inner card">
									<div class="thumbnail">           
										<!-- output the thumbnail -->
										<?php 
												//$meta = get_post_meta($post->ID);  
												//echo "<pre>";  var_dump($meta); echo "</pre><hr>";
												$the_alt_img = get_post_meta(get_the_ID(), 'alternate_image', true ); 
												
											?>
										<?php if ( $the_alt_img ) { ?>
											<img src="<?php echo $the_alt_img; ?>">
											<a  class="" href="<?php the_permalink(); ?>">
												<div class="thumb-cover"></div>
											</a>
											
											<?php
										}else{ ?>
											
											<?php the_post_thumbnail ( 'medium', array ('class' => 'octane-blog-thumbnail ') ); ?>
											<a class="" href="<?php the_permalink(); ?>">
												<div class="thumb-cover"></div>
											</a>
											
										<?php }//end else and if
										?> 
										
										<div class="details">
											<div class="user ">
												 <!--<div class="user-photo">
													  <img alt="Thumb" src="#">
												 </div>-->
												 Category: 
												
													 <ul class="port-cats"><?php 
														 $terms3 = get_the_terms( $post->ID, 'portcats' ); 
														 foreach( $terms3 as $term ) echo '<li><i>' . $term->slug . '</i></li>'; 
														 ?>
													 </ul>
												 
												 <!--<div class="name">Tim </div>-->
											</div> 
											<div class="numbers">
												<b class="downloads">
													Technology: 
													
														<ul class="tech"><?php 
															$terms6 = get_the_terms( $post->ID, 'feattag' );
															foreach( $terms6 as $term ) echo '<li><i>' . $term->slug . '</i></li>'; ?>
														</ul>
													
												</b>
												<!--<b class="comments-icon">
													<i class="fa fa-comment"></i>
													
												</b>-->
											</div>
											<div class="clearfix"></div>
										</div>            
									</div>
									<div class="card-info">
										<div class="moving">
											<!-- the permalink and title -->
											<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
												<h3 class=""><?php the_title(); ?><div class="time pull-right"><?php the_date('M j Y') ?></div></h3> 
											</a>
											
											<!-- output the excerpt, and if no excerpt then output content-->
											<div class="trimmed-content ">
												<?php  
													$octane_excerpt = get_the_excerpt(); 
													if(isset($octane_excerpt)) { ?>
														<p>
															<?php 
																$temporary_excerpt = substr(strip_tags($octane_excerpt), 0, 130);
																echo $temporary_excerpt; 
															?>
														</p>
													<?php }else{  
														$more = 0; 
														$octane_content = get_the_content(); 
														$temporary = substr(strip_tags($octane_content), 0, 130); ?>
														<p>
															<?php echo $temporary; ?>
														</p>
												<?php }	?>
											</div>
											<b class="actions">
												<!-- output a read more button -->
												<a class="button cbp-vm-icon cbp-vm-add" href="<?php the_permalink(); ?>"> Read More </a>
								
												<b class="separator">|</b>
												<?php 
													//$meta = get_post_meta($post->ID);  
													$the_url = get_post_meta(get_the_ID(), '_url', true ); 
													//echo "<pre>";  var_dump($meta); echo "</pre><hr>";
													//echo '<p>' . $the_url . '</p>';
												?>
												<a <?php if($the_url){ echo 'target="_blank"'; } ?> class="blue-text" href="<?php if($the_url){ echo $the_url; }else{ echo '#'; } ?>" >Live Preview</a>
											</b>
										</div>
									</div>
									
								</article>
							</div>
						</div>
						
						
						
						
						
								 
						<?php 
						$count = $count + 1;
					endwhile; else: ?>
							  
						<li class="error-not-found">Sorry, no portfolio entries found.</li>
								 
				<?php endif; ?>
			 
				
			 
				
			</div>
  
  
  
  
  
  <div class="gap"></div>
  <div class="gap"></div>
  <div class="gap"></div>
  <div class="gap"></div>
</div>
    
	  <div class='avia_styleswitcher display_switch '>
			  <div class='ie6fix openclose openclosedisplay_switch'>
				<span></span>
			  </div>
					  <div class='avia_styleswitch_form' >
							
							<h4>Sort:</h4>
							<button class="sort" data-sort="custom-order:asc">Ascending order</button>
							<button class="sort" data-sort="custom-order:desc">Descending order</button>
							<button class="sort" data-sort="random">Random</button>
							
							<h4>Clear Filters / Randomize</h4>
							<button class="multimix-button" id="Reset">Clear Filters</button>
					
							
							<form class="controls" id="Filters">
								  <!-- We can add an unlimited number of "filter groups" using the following format: -->
								  
								  <fieldset>
									<h4>Categories</h4>
									
									<?php 
										
										if ($tax_terms) {
											echo '<div class="checkbox">';
											echo '<input type="checkbox" value=".all" />';
											echo ' <label>all</label>';
											echo '</div>';
										foreach ($tax_terms  as $tax_term) {

											$termname = strtolower($tax_term->name);
											$termname = str_replace(' ', '-', $termname);
											echo '<div class="checkbox">';
											echo '<input type="checkbox" value=".'.$termname.'" />';
											echo ' <label>'.$tax_term->name.'</label>';
											echo '</div>';
										}
									}//end if
									
									?>
								  </fieldset>
								  <fieldset>
									<h4>Technology</h4>
									
									<?php 
										$tax3 = 'feattag';
										$tax_terms3 = get_terms($tax3);
										if ($tax_terms3) {
											echo '<div class="checkbox">';
											echo '<input type="checkbox" value=".all" />';
											echo ' <label>all</label>';
											echo '</div>';
										foreach ($tax_terms3  as $tax_term3) {

											$termname = strtolower($tax_term3->name);
											$termname = str_replace(' ', '-', $termname);
											echo '<div class="checkbox">';
											echo '<input type="checkbox" value=".'.$termname.'" />';
											echo ' <label>'.$tax_term3->name.'</label>';
											echo '</div>';
										}
									}//end if
									
									?>
								  </fieldset>
								  
								
								  
								</form>
										
					
					
					
					
					
					
					  </div>
		  </div>
    </div> <!-- end container -->
	<script>
	
		jQuery( function($) {
			
			
			
			// To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "checkboxFilter".

			var checkboxFilter = {
			  
			  // Declare any variables we will need as properties of the object
			  
			  $filters: null,
			  $reset: null,
			  groups: [],
			  outputArray: [],
			  outputString: '',
			  
			  // The "init" method will run on document ready and cache any jQuery objects we will need.
			  
			  init: function(){
				var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.
				
				self.$filters = $('#Filters');
				self.$reset = $('#Reset');
				self.$container = $('#Container');
				
				self.$filters.find('fieldset').each(function(){
				  self.groups.push({
					$inputs: $(this).find('input'),
					active: [],
						tracker: false
				  });
				});
				
				self.bindHandlers();
			  },
			  
			  // The "bindHandlers" method will listen for whenever a form value changes. 
			  
			  bindHandlers: function(){
				var self = this;
				
				self.$filters.on('change', function(){
				  self.parseFilters();
				});
				
				self.$reset.on('click', function(e){
				  e.preventDefault();
				  self.$filters[0].reset();
				  self.parseFilters();
				});
			  },
			  
			  // The parseFilters method checks which filters are active in each group:
			  
			  parseFilters: function(){
				var self = this;
			 
				// loop through each filter group and add active filters to arrays
				
				for(var i = 0, group; group = self.groups[i]; i++){
				  group.active = []; // reset arrays
				  group.$inputs.each(function(){ 
					$(this).is(':checked') && group.active.push(this.value);
				  });
					group.active.length && (group.tracker = 0);
				}
				
				self.concatenate();
			  },
			  
			  // The "concatenate" method will crawl through each group, concatenating filters as desired:
			  
			  concatenate: function(){
				var self = this,
					  cache = '',
					  crawled = false,
					  checkTrackers = function(){
					var done = 0;
					
					for(var i = 0, group; group = self.groups[i]; i++){
					  (group.tracker === false) && done++;
					}

					return (done < self.groups.length);
				  },
				  crawl = function(){
					for(var i = 0, group; group = self.groups[i]; i++){
					  group.active[group.tracker] && (cache += group.active[group.tracker]);

					  if(i === self.groups.length - 1){
						self.outputArray.push(cache);
						cache = '';
						updateTrackers();
					  }
					}
				  },
				  updateTrackers = function(){
					for(var i = self.groups.length - 1; i > -1; i--){
					  var group = self.groups[i];

					  if(group.active[group.tracker + 1]){
						group.tracker++; 
						break;
					  } else if(i > 0){
						group.tracker && (group.tracker = 0);
					  } else {
						crawled = true;
					  }
					}
				  };
				
				self.outputArray = []; // reset output array

				  do{
					  crawl();
				  }
				  while(!crawled && checkTrackers());

				self.outputString = self.outputArray.join();
				
				// If the output string is empty, show all rather than none:
				
				!self.outputString.length && (self.outputString = 'all'); 
				
				//console.log(self.outputString); 
				
				// ^ we can check the console here to take a look at the filter string that is produced
				
				// Send the output string to MixItUp via the 'filter' method:
				
				  if(self.$container.mixItUp('isLoaded')){
					self.$container.mixItUp('filter', self.outputString);
				  }
			  }
			};
			  
			// On document ready, initialise our code.

			$(function(){
				  
			  // Initialize checkboxFilter code
			  checkboxFilter.init();
				  
			  // Instantiate MixItUp
			  $('#Container').mixItUp({
				// controls: {
					// enable:
					// false // we won't be needing these
				// },
					animation: {
					  easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
					  duration: 600
					},
					selectors: {
							target: '.mix',
							filter: '.filter',
							sort: '.sort'
					},
					layout: {
						//display: 'block',
						containerClass: 'master-container'
					},
					callbacks: {
						onMixStart: function(state){
							state.$targets.addClass('being-mixed');
						},
						onMixEnd: function(state){
							state.$targets.removeClass('being-mixed');
						}						
					}
					
			    });    
				
				
					
					$("#filter-select").on("change", function() {
						$("#Container").mixItUp( 'filter', this.value );
					});
					$("#sort-select").on("change", function() {
						$("#Container").mixItUp( 'sort', this.value );
					});
					
					/* clear filters button */
					$('.multimix-button').click(function(){
						$('#Container').mixItUp('multiMix', {
							filter: 'all',
							sort: 'date:asc'
						});
					});
				
				
			});

			
			
			
		} ); //end of jquery document ready function 

	
	</script>
	
	<script>
	
	/**
		 * Cookie plugin
		 *
		 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
		 * Dual licensed under the MIT and GPL licenses:
		 * http://www.opensource.org/licenses/mit-license.php
		 * http://www.gnu.org/licenses/gpl.html
		 *
		 */

		/**
		 * Create a cookie with the given name and value and other optional parameters.
		 *
		 * @example $.cookie('the_cookie', 'the_value');
		 * @desc Set the value of a cookie.
		 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
		 * @desc Create a cookie with all available options.
		 * @example $.cookie('the_cookie', 'the_value');
		 * @desc Create a session cookie.
		 * @example $.cookie('the_cookie', null);
		 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
		 *       used when the cookie was set.
		 *
		 * @param String name The name of the cookie.
		 * @param String value The value of the cookie.
		 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
		 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
		 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
		 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
		 *                             when the the browser exits.
		 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
		 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
		 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
		 *                        require a secure protocol (like HTTPS).
		 * @type undefined
		 *
		 * @name $.cookie
		 * @cat Plugins/Cookie
		 * @author Klaus Hartl/klaus.hartl@stilbuero.de
		 */

		/**
		 * Get the value of a cookie with the given name.
		 *
		 * @example $.cookie('the_cookie');
		 * @desc Get the value of a cookie.
		 *
		 * @param String name The name of the cookie.
		 * @return The value of the cookie.
		 * @type String
		 *
		 * @name $.cookie
		 * @cat Plugins/Cookie
		 * @author Klaus Hartl/klaus.hartl@stilbuero.de
		 */

		jQuery.cookie = function(name, value, options) {
			if (typeof value != 'undefined') { // name and value given, set cookie
				options = options || {};
				if (value === null) {
					value = '';
					options.expires = -1;
				}
				var expires = '';
				if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
					var date;
					if (typeof options.expires == 'number') {
						date = new Date();
						date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
					} else {
						date = options.expires;
					}
					expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
				}
				// CAUTION: Needed to parenthesize options.path and options.domain
				// in the following expressions, otherwise they evaluate to undefined
				// in the packed version for some reason...
				var path = options.path ? '; path=' + (options.path) : '';
				var domain = options.domain ? '; domain=' + (options.domain) : '';
				var secure = options.secure ? '; secure' : '';
				document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
			} else { // only name given, get cookie
				var cookieValue = null;
				if (document.cookie && document.cookie != '') {
					var cookies = document.cookie.split(';');
					for (var i = 0; i < cookies.length; i++) {
						var cookie = jQuery.trim(cookies[i]);
						// Does this cookie string begin with the name we want?
						if (cookie.substring(0, name.length + 1) == (name + '=')) {
							cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
							break;
						}
					}
				}
				return cookieValue;
			}
		};


		jQuery.noConflict();

		jQuery(document).ready(function($){


			
			
			$(".card").hover(
			  function() {
				$( this ).addClass( "hover" );
			  }, function() {
				$( this ).removeClass( "hover" );
			  }
			);


			var target = jQuery('.avia_styleswitcher');
			if(jQuery.cookie('avia_display_switch') == 'display_switch_false')
			{
				target.removeClass('display_switch').addClass('display_switch_false');
			}
			else if(jQuery.cookie('avia_display_switch') == 'display_switch')
			{
				target.removeClass('display_switch_false').addClass('display_switch');
			}
			
			

			jQuery('.avia_styleswitcher .openclose').click(function()
			{
				var target = jQuery(this).parent('.avia_styleswitcher');
				var animator = {left: "-320"};
				var animator2 = {left: "-75"};
				
				if(target.is('.display_switch'))
				{
					if(target.is('.switcher_right')) 
					{
						animator = {right: "-320"};
						animator2 = {right: "-75"};
					}
					target.animate(animator, function()
					{
						target.removeClass('display_switch').addClass('display_switch_false');
					});
					
					
					jQuery.cookie('avia_display_switch', 'display_switch_false', { expires: 7, path: '/' });
				}
				else
				{
					if(target.is('.switcher_right')) 
					{
						animator = {right: "-320"};
						animator2 = {right: "-75"};
					}
				
					target.animate(animator2, function()
					{
						target.removeClass('display_switch_false').addClass('display_switch');
					});
					jQuery.cookie('avia_display_switch', 'display_switch', { expires: 7, path: '/' });
				}
			});
			
			
			if( typeof jQuery.cookie('avia_display_switch') != "string")
			{
				setTimeout(function(){jQuery('.avia_styleswitcher .openclose').trigger('click');}, 1000);
			}
			

			
		});


	
	
	</script>
	
	
	
      <?php get_footer(); ?>