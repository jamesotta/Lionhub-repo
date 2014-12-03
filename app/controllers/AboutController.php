<?php 

   class AboutController extends BaseController {
	   
	   /**
	 * Show the service page.
	 *
	 * @return Response
	 */
	public function about()
	{
	   return View::make('pages.about_us');
	}
	
	
   }

?>