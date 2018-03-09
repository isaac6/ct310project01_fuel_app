<div id="authentication">
	<form action="<?php echo Uri::create('index.php/northdakota/login'); ?>" method="POST">
		Username:<input type="text" name="username" placeholder="Please enter username"/><br/><br/>
		Password:<input type="password" name="password" placeholder="Please enter password"/><br/><br/>
		<input type="submit" value="Login">
	</form>
</div>
