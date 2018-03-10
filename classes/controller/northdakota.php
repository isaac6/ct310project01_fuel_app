<?php

/**
 * North Dakota Controller
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_NorthDakota extends Controller
{
	/**
	 * Index page
	 *
	 * @access  public
	 * @return  View
	 */
	public function action_index()
	{
		$views = array();

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
        $views['footer'] = View::forge('northdakota/footer')->render();

        return View::forge('northdakota/index', $views);
	}

    /*
    About Us page
    @access public
    @return View
    */
    public function action_aboutus(){
        $views = array();

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
        $views['footer'] = View::forge('northdakota/footer')->render();

        return View::forge('northdakota/aboutus', $views);
    }

	/*
    Theodore Roosevelt National Park page
    @access public
    @return View
    */
    public function action_attraction1(){
        $views = array();
		$comment_views = array();
		$data = array();
		$data['pagename'] = 'attraction1';
		$comment_views['addcomment'] = View::forge('northdakota/addcomment', $data)->render();
		$comment_views['comment'] = Input::post('comment');

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
		$views['comments'] = View::forge('northdakota/comments', $comment_views)->render();
        $views['footer'] = View::forge('northdakota/footer')->render();

        return View::forge('northdakota/attraction1', $views);
    }

	/*
    International Peace Garden page
    @access public
    @return View
    */
    public function action_attraction2(){
        $views = array();
		$comment_views = array();
		$data = array();
		$data['pagename'] = 'attraction2';
		$comment_views['addcomment'] = View::forge('northdakota/addcomment', $data)->render();
		$comment_views['comment'] = Input::post('comment');

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
		$views['comments'] = View::forge('northdakota/comments', $comment_views)->render();
        $views['footer'] = View::forge('northdakota/footer')->render();

        return View::forge('northdakota/attraction2', $views);
    }

	/*
    Maah Daah Hey Trail page
    @access public
    @return View
    */
    public function action_attraction3(){
        $views = array();
		$comment_views = array();
		$data = array();
		$data['pagename'] = 'attraction3';
		$comment_views['addcomment'] = View::forge('northdakota/addcomment', $data)->render();
		$comment_views['comment'] = Input::post('comment');

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
		$views['comments'] = View::forge('northdakota/comments', $comment_views)->render();
        $views['footer'] = View::forge('northdakota/footer')->render();

        return View::forge('northdakota/attraction3', $views);
    }

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(View::forge('northdakota/404'), 404);
	}

	/**
	  * Authentication forms
	  */

	public function action_login()
  	{
  		$views = array();
		$views['loginmsg'] = null;
		$username = Input::post('username');
		$password = Input::post('password');
		if ($password === null && $username === null) {
			if (Session::get('authenticated') === true) {
				$views['authentication'] = View::forge('northdakota/loggedin')->render();
			} else {
				$views['authentication'] = View::forge('northdakota/authentication')->render();
			}
		} else {
			if($username === 'ct310' && md5($password) === '48f2f942692b08ec9de1ef9ada5230a3')
			{
				Session::create();
				Session::set('username', $username);
				Session::set('userid', 12345);
		      	Session::set('authenticated', true);
				$views['authentication'] = View::forge('northdakota/loggedin')->render();
				$data = array();
				$data['loginmsg'] = 'User ' . $username . ' logged in successfully at: ' . date("Y.m.d h:i:sa");
				$views['loginmsg'] = View::forge('northdakota/loginmsg', $data)->render();
			}
	    	elseif($username === 'zach' && md5($password) === '7cf2db5ec261a0fa27a502d3196a6f60')
	    	{
	      		Session::create();
				Session::set('username', $username);
				Session::set('userid', 123456);
				Session::set('authenticated', true);
				$views['authentication'] = View::forge('northdakota/loggedin')->render();
				$data = array();
				$data['loginmsg'] = 'User ' . $username . ' logged in successfully at: ' . date("Y.m.d h:i:sa");
				$views['loginmsg'] = View::forge('northdakota/loginmsg', $data)->render();
	    	}
	    	elseif($username === 'isaac' && md5($password) === '21232f297a57a5a743894a0e4a801fc3')
	    	{
	      		Session::create();
				Session::set('username', $username);
				Session::set('userid', 1234567);
				Session::set('authenticated', true);
				$views['authentication'] = View::forge('northdakota/loggedin')->render();
				$data = array();
				$data['loginmsg'] = 'User ' . $username . ' logged in successfully at: ' . date("Y.m.d h:i:sa");
				$views['loginmsg'] = View::forge('northdakota/loginmsg', $data)->render();
	    	}
			else
			{
				$views['authentication'] = View::forge('northdakota/authentication')->render();
				$data = array();
				$data['loginmsg'] = 'User ' . $username . ' failed to login at: ' . date("Y.m.d h:i:sa");
				$views['loginmsg'] = View::forge('northdakota/loginmsg', $data)->render();
			}
		}

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
        $views['footer'] = View::forge('northdakota/footer')->render();

        return View::forge('northdakota/login', $views);
  	}

	public function action_logout() {
		Session::destroy();
		$content = $this->action_login();
		return $content;
	}

}
