<?php

class SiteController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		/*
		$view = View::make('index');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		return $view;
		*/
		$view = View::make('colaboraciones');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'colaboraciones');
		return $view;		
	}
	public function showAboutUs()
	{
		$view = View::make('conoce-whynot');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'whynot');
		return $view;
	}	
	public function showDesarrollo()
	{
		$view = View::make('servicios');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'desarrollo');
		View::share('section', 'dev');
		return $view;
	}	
	public function showDisenio()
	{
		$view = View::make('servicios');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'design');
		View::share('section', 'des');
		return $view;
	}
	public function showSeo()
	{
		$view = View::make('servicios');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'seo');
		View::share('section', 'seo');
		return $view;
	}		
	public function showColaboraciones()
	{
		$view = View::make('colaboraciones');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'colaboraciones');
		return $view;
	}	
	public function showContactanos()
	{
		$view = View::make('contactanos');
		$view->nest('head', 'commons.head');
		$view->nest('top', 'commons.top');
		$view->nest('header', 'commons.header');
		$view->nest('call2action', 'commons.call2action');
		$view->nest('footer', 'commons.footer');
		$view->nest('scripts', 'commons.scripts');
		View::share('option', 'contactanos');
		return $view;
	}		
	public function showContactar()
	{

		  $validator = Validator::make(Input::all(), [
		    "name"     => "required",
		    "email"    => "required",
		    "phone"    => "required",
		    "comments" => "required"
		  ]);
  
  			if ($validator->passes()) {
  
			    Mail::send("emails.contact", Input::all(), function($email) {
			      $email
			        ->to("oscar.quintero@whynot.mx", "Oscar")
			        ->subject("Correo desde www.whynot.mx");
			    });
			    return Redirect::route("contactanos")->with('message' , 'sent');
			}  
    		

 		return Redirect::back()->withErrors($validator)->withInput();
	}		
}
