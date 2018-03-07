<div id="authentication">

    <?php

    Session::create();

    $session = Session::instance();
    $authenticated = $session->get('authenticated');
    //$username = $_POST['username'];
    //$password = $_POST['password'];


    if (!$authenticated) {?>
        <h4>Login</h4>
        <form action="http://www.cs.colostate.edu/~isaach/ct310/index.php/northdakota" method="POST">
            <input type="text" name="username" placeholder="Please enter username" class="bottom_margin_small"/><br/>
            <input type="password" name="password" placeholder="Please enter password" class="bottom_margin_small"/><br/>
            <input type="submit" value="submit">
        </form>
    <?php
    }
    else {
        if(($username === 'ct310') && (md5($password) === 'a6cebbf02cc311177c569525a0f119d7')){
            Session::set('authenticated', true);
        } else if (($username === 'isaach') && (md5($password) === '456b7016a916a4b178dd72b947c152b7')) {
            Session::set('authenticated', true);
        }elseif(($username === 'zachrule') && (md5($password) === '3bc5be6ae2353708a6612962db3e587b')){
            session_start();
            $_SESSION['username'] = 'zachrule';
            $_SESSION['id'] = 123456;
            echo "<strong>Logged in!</strong>";
        }else{
            echo '<strong>Invalid Credentials</strong>';
        }
        echo '<strong>Test</strong>';
    }
    ?>
</div>
