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
        $views['authentication'] = View::forge('northdakota/authentication')->render();
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

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
		    $views['authentication'] = View::forge('northdakota/authentication')->render();
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

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
		    $views['authentication'] = View::forge('northdakota/authentication')->render();
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

        $views['header'] = View::forge('northdakota/header')->render();
        $views['navigation'] = View::forge('northdakota/navigation')->render();
		    $views['authentication'] = View::forge('northdakota/authentication')->render();
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
		return Response::forge(Presenter::forge('northdakota/404'), 404);
 /**
   * Authentication
   */
	}
  public function action_loginForm()
	{
		$status = 'success';

		$content = $this->action_index();

		$content -> set_safe('status',$status);

		return $content;
	}

	public function action_checkLogin()
	{
		
		$username = Input::post('username');

		$password = Input::post('password');


		if($username === 'ct310' && md5($password) === '48f2f942692b08ec9de1ef9ada5230a3')
		{
			Session::create(); 
			
			Session::set('username', $username);
			
			Session::set('userid', 12345); 
      
      Session::set('authenticated', true); 
      
      $_SESSION['authentication']= TRUE;  

			$content = $this->action_index();
      
      echo "Login Success";
      
			return $content; 
		}
    elseif($username === 'zach' && md5($password) === '7cf2db5ec261a0fa27a502d3196a6f60')
    {
      Session::create(); 
			
			Session::set('username', $username);
			
			Session::set('userid', 123456);  
      
      $_SESSION['authentication']= TRUE;  

			$content = $this->action_index();
      
      echo "Login Success";
      
			return $content; 
    }
    elseif($username === 'isaach' && md5($password) === '456b7016a916a4b178dd72b947c152b7')
    {
      Session::create(); 
			
			Session::set('username', $username);
			
			Session::set('userid', 1234567);  
      
      $_SESSION['authentication']= TRUE;  

			$content = $this->action_index();
      
      echo "Login Success";
      
			return $content;
    }
		else 
		{

			$content = $this->action_index();
			
			$content->set_safe('status','error');
      
      echo "Login Failure";

			return $content;
		}
	
	}

}
