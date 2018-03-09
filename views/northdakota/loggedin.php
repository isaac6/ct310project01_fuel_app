<div id="authentication">
    <h4>Logged in! Username: <?php echo Session::get('username'); ?></h4>
    <p><form action="<?php echo Uri::create('index.php/northdakota/logout'); ?>" method="POST">
        <input type="submit" value="Logout">
    </form></p>
</div>
