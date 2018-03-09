<html>

<head>
	<title>North Dakota | Maah Daah Hey Trail</title>
	<meta charset="utf-8" />
	<?php echo Asset::css('northdakota.css'); ?>
	<meta name= "author" content= "Isaac Hall, Zachary Rule">
	<meta name= "description" content= "This site is part of a CSU CT 310 Course Project.">
</head>

<body>
	<?php echo $header; ?>

    <?php echo $navigation; ?>

    <div id="content">

	    <h1>Maah Daah Hey Trail</h1>
	    <?php echo '<a href="https://www.singletracks.com/blog/mtb-trails/badlands-5-best-day-rides-along-maah-daah-hey-trail/"><img src="http://www.cs.colostate.edu/~zachrule/ct310/assets/img/trail.jpg"/></a> ' ?>
	    <p>The Maah Daah Hey Trail is a 144-mile (232 km) non-motorized single track trail that runs from USFS Burning Coal Vein Campground 30 miles south of Medora, to the USFS CCC campground 16 miles south of Watford City. The Trail winds through the Little Missouri National Grasslands in North Dakota's Badlands to form the longest continuous singletrack mountain biking trail in America. Nine fenced campgrounds are accessible by gravel surfaced roads. The campgrounds include camping spurs, potable water, hitching rails, picnic tables, fire rings and accessible toilets.</p>
	    <h2>Comments</h2>
      <?php $session = Session::instance();
            $authentication = $session->get('authentication');
      ?>
      <?php if ($authentication==TRUE): ?>
        <form action="#" method="post">
        Type to comment: <input type="text" name="usercomment">
        <input type="submit" value="Submit" name="submit">
        </form>
      <?php elseif ($authentication==FALSE): ?>
        You must login to comment on this page. Login <a href='index.php'>here</a>
      <?php endif; ?>       

    </div>
	<?php echo $footer; ?>

</body>
</html>
