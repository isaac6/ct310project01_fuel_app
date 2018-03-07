<div id="authentication">
	<?php
    if (!(isset($_POST['username']) || isset ($_POST['password']))) {?>
        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="Please enter username"/>
            <input type="password" name="password" placeholder="Please enter password"/>
            <input type="submit" value="submit">
        </form>
    <?php
    }
    else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(($username === 'ct310') && (md5($password) === 'a6cebbf02cc311177c569525a0f119d7')){
            session_start();
            $_SESSION['username'] = 'ct310';
            $_SESSION['id'] = 12345;
            echo "<strong>Logged in!</strong>";
        }elseif(($username === 'zachrule') && (md5($password) === '3bc5be6ae2353708a6612962db3e587b')){
            session_start();
            $_SESSION['username'] = 'zachrule';
            $_SESSION['id'] = 123456;
            echo "<strong>Logged in!</strong>";
        }else{
            echo '<strong>Invalid Credentials</strong>';
        }
    }
    ?>
</div>
