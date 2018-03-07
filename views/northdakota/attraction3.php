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
	    <?php echo Asset::img('trail.jpg', array('id' => 'biketrail')); ?>
	    <p>The Maah Daah Hey Trail is a 144-mile (232 km) non-motorized single track trail that runs from USFS Burning Coal Vein Campground 30 miles south of Medora, to the USFS CCC campground 16 miles south of Watford City. The Trail winds through the Little Missouri National Grasslands in North Dakota's Badlands to form the longest continuous singletrack mountain biking trail in America. Nine fenced campgrounds are accessible by gravel surfaced roads. The campgrounds include camping spurs, potable water, hitching rails, picnic tables, fire rings and accessible toilets.</p>
	    <h2>Comments</h2>
            <?php
            session_start();


            if(!isset($_SESSION['username']))
            echo "You must login to view this page. Login <a href='index.php'>here</a>";
            else {
            }
            ?>

    </div>

	<?php echo $footer; ?>

</body>
</html>
