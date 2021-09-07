PHP
<ul class="nav nav-tabs">
  	<li class="nav-item">
    	<a class="nav-link active" data-toggle="tab" href="#home">Tất cả</a>
  	</li>
  	<?php $args = array( 
	    'hide_empty' => 0,
	    'taxonomy' => 'product_cat',
	    'parent' => 0
	    ); 
	    $cates = get_categories( $args ); 
	    foreach ( $cates as $cate ) {  ?>
			<li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#<?php echo $cate->slug; ?>"><?php echo $cate->name; ?></a>
			</li>
	<?php } ?>
</ul>
<div class="tab-content">
	<div class="tab-pane container active" id="home">
		<?php
			$args = array( 
				'post_type' => 'product',
				'posts_per_page' => 8 
			); 
		?>
		<?php $getposts = new WP_query( $args);?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
		<?php global $product; ?>
			<div class="item-product">
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
				</a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<div class="price-product"><?php echo $product->get_price_html(); ?></div>
				<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a>
			</div>
		<?php endwhile; wp_reset_postdata();?>
	</div>
  	<?php $args = array( 
	    'hide_empty' => 0,
	    'taxonomy' => 'product_cat',
	    'parent' => 0
	    ); 
	    $cates = get_categories( $args ); 
	    foreach ( $cates as $cate ) {  ?>
			<div class="tab-pane container fade" id="<?php echo $cate->slug; ?>">
				<?php
					$args = array( 
						'post_type' => 'product',
						'posts_per_page' => 8,
						'product_cat' => $cate->slug
					); 
				?>
				<?php $getposts = new WP_query( $args);?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php global $product; ?>
					<div class="item-product">
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
						</a>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="price-product"><?php echo $product->get_price_html(); ?></div>
						<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a>
					</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
	<?php } ?>
  	
</div>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
<ul class="nav nav-tabs">
  	<li class="nav-item">
    	<a class="nav-link active" data-toggle="tab" href="#home">Tất cả</a>
  	</li>
  	<?php $args = array( 
	    'hide_empty' => 0,
	    'taxonomy' => 'product_cat',
	    'parent' => 0
	    ); 
	    $cates = get_categories( $args ); 
	    foreach ( $cates as $cate ) {  ?>
			<li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#<?php echo $cate->slug; ?>"><?php echo $cate->name; ?></a>
			</li>
	<?php } ?>
</ul>
<div class="tab-content">
	<div class="tab-pane container active" id="home">
		<?php
			$args = array( 
				'post_type' => 'product',
				'posts_per_page' => 8 
			); 
		?>
		<?php $getposts = new WP_query( $args);?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
		<?php global $product; ?>
			<div class="item-product">
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
				</a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<div class="price-product"><?php echo $product->get_price_html(); ?></div>
				<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a>
			</div>
		<?php endwhile; wp_reset_postdata();?>
	</div>
  	<?php $args = array( 
	    'hide_empty' => 0,
	    'taxonomy' => 'product_cat',
	    'parent' => 0
	    ); 
	    $cates = get_categories( $args ); 
	    foreach ( $cates as $cate ) {  ?>
			<div class="tab-pane container fade" id="<?php echo $cate->slug; ?>">
				<?php
					$args = array( 
						'post_type' => 'product',
						'posts_per_page' => 8,
						'product_cat' => $cate->slug
					); 
				?>
				<?php $getposts = new WP_query( $args);?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php global $product; ?>
					<div class="item-product">
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
						</a>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="price-product"><?php echo $product->get_price_html(); ?></div>
						<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a>
					</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
	<?php } ?>
  	
</div>