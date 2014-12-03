<?php 

   class ContactController extends BaseController {
	   
	   /**
	 * Show the service page.
	 *
	 * @return Response
	 */
	public function contact()
	{
	   return View::make('pages.contact_us');
	}
	
	
   }

?>