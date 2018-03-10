<div id="comments">
    <h3>Comments</h3>
    <?php
        $authd = Session::get('authenticated');
        if ($authd === true) {
            echo $addcomment;
            if ($comment !== null) {
                echo  Session::get('username') . ': ' . $comment;
            }
        } else {
            $link = Uri::create('index.php/northdakota/login');
            echo '<p>Please <a href=', $link, '>login</a> to view or add comments.</p>';
        }
    ?>
</div>
