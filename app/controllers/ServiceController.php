<?php 

   class ServiceController extends BaseController {
	   
	   /**
	 * Show the service page.
	 *
	 * @return Response
	 */
	public function service()
	{
	   return View::make('pages.services');
	}
	
	
   }

?>