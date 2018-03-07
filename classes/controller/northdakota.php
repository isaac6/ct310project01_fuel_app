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

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('northdakota/404'), 404);
	}
}
