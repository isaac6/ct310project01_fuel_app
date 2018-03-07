<html>

<head>
	<title>North Dakota | Theodore Roosevelt National Park</title>
	<meta charset="utf-8" />
	<?php echo Asset::css('northdakota.css'); ?>
	<meta name= "author" content= "Isaac Hall, Zachary Rule">
	<meta name= "description" content= "This site is part of a CSU CT 310 Course Project.">
</head>

<body>
	<?php echo $header; ?>

    <?php echo $navigation; ?>

    <div id="content">

	    <h1>Theodore Roosevelt National Park</h1>
	    <?php echo Asset::img('teddy.jpg', array('id' => 'teddyportrait')); ?>
	    <?php echo Asset::img('buffalo.jpg', array('id' => 'buffalograss')); ?>
	    <p>Theodore Roosevelt National Park is a United States National Park comprising three geographically separated areas of badlands in western North Dakota. The park was named for U.S. President Theodore Roosevelt. The park covers 70,446 acres of land in three sections: the North Unit, the South Unit, and the Elkhorn Ranch Unit.

The park's larger South Unit lies alongside Interstate 94 near Medora, North Dakota. The smaller North Unit is situated about 80 mi (130 km) north of the South Unit, on U.S. Highway 85, just south of Watford City, North Dakota. Roosevelt's Elkhorn Ranch is located between the North and South units, approximately 20 mi (32 km) west of US 85 and Fairfield, North Dakota. The Little Missouri River flows through all three units of the park. The Maah Daah Hey Trail connects all three units.</p>
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
