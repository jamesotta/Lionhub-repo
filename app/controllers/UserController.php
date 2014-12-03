<?php

class UserController extends BaseController
{


    /**
     * Show the our team page.
     *
     * @return Response
     */
    public function team()
    {
        return View::make('pages.our_team');
    }

    /**
     * Show the form for user login.
     *
     * @return Response
     */
    public function login()
    {
        return View::make('user.login');
    }


    /**
     * Show the form for user signup form.
     *
     * @return Response
     */

    public function registration()
    {
        return View::make('user.registration');


    }


    /**
     * Show the form for user signup form.
     *
     * @return Response
     */

    public function resset()
    {
        return View::make('user.password_reset');
    }

    /**
     * Create a new user
     *
     * @return Response
     */
    public function create_user()
    {


        $validator = Validator::make(Input::all(), array(

            'Yourname' => 'required|alpha|min:2',
            'stateoforigin' => 'required|alpha|min:2',
            'gender' => 'required',
            'dob' => 'required|date',
            'phonenumber' => 'required|numeric|min:11',
            'email' => 'required|email|unique:users',
            'username' => 'required|alpha|min:2|max:10|unique:users',
            'password' => 'required|alpha_num|between:4,8',
            'password_confirm' => 'required|alpha_num|between:4,8|same:password',
            //  'profile' => 'required|alpha',
            // 'productdevelop' => 'required|alpha',
            // 'webprofficient' => 'required|alpha',
            // 'mobileprofficient' => 'required|alpha',
            'aboutyou' => 'required|min:5|max:150',
            'memberwhy' => 'required|min:5|max:150',
            'webtechnology' => 'required|min:5|max:150'));
        if ($validator->fails()) {
            return Redirect::route('account_create')->withErrors($validator);
            // return Redirect::route('account_create')->with('error-register', 'Please! scroll down to fix the errors and continue');

        } else {

            $Yourname = Input::get('Yourname');
            $stateoforigin = Input::get('stateoforigin');
            $gender = Input::get('gender');
            $dob = Input::get('dob');
            $phonenumber = Input::get('phonenumber');
            $email = Input::get('email');
            $username = Input::get('username');
            $password = Input::get('password');
            $password_confirm = Input::get('password_confirm');
            $profile = (serialize(Input::get('profile')));
            $productdevelop = (serialize(Input::get('productdevelop')));
            $webprofficient = (serialize(Input::get('webprofficient')));
            $mobileprofficient = (serialize(Input::get('mobileprofficient')));
            $aboutyou = Input::get('aboutyou');
            $memberwhy = Input::get('memberwhy');
            $webtechnology = Input::get('webtechnology');

            // Activation code

            $code = str_random(60);
            $create = User::create(array(
                'Name' => $Yourname,
                'State' => $stateoforigin,
                'Gender' => $gender,
                'dob' => $dob,
                'phone' => $phonenumber,
                'Email' => $email,
                'Username' => $username,
                'Password' => Hash::make($password),
                'Carrier' => $profile,
                'product_developing' => $productdevelop,
                'web_profficient' => $webprofficient,
                'Moblie_applications' => $mobileprofficient,
                'hopes_aspirations' => $aboutyou,
                'why_member' => $memberwhy,
                'web_technologies' => $webtechnology,
                'activation_code' => $code,
                'active' => 0));

            if ($create) {
                // send an email
                Mail::send('email.auth.activate', array('link' => URL::route('account_activate',
                        $code), 'username' => $username), function ($message) use ($create) {

                        $message->to($create->Email, $create->Username)->subject('Activate your account');
                    }
                );
                return Redirect::route('account_create')->with('success-register',
                    'Congrats! your account has been created, we have sent you an email to activate your account');


            }


        }


    }

    /**
     * Show the account activation page.
     *
     * @return Response
     */

    public function activate($code)
    {
        $user = User::where('activation_code', '=', $code)->where('active', '=', 0);

        if ($user->count()) {
            $user = $user->first();

            //update user to active state

            $user->active = 1;
            $user->activation_code = '';

            if ($user->save()) {
                return Redirect::route('account_login')->with('account_activated',
                    'Your account is now activated you can now sign in');


            }
        }
        return Redirect::route('account_login')->with('account_notactivated',
            'We could not activate your account try again later');



    }

    /**
     * for video download.
     *
     * @return Response
     */

    public function getDownload()
    {

        $file = public_path() . "/video/LionHUB UNN Video Presentation.mp4";
        $header = array('Content-Type:application/mp4');
        return Response::download($file, 'LionHUB UNN Video Presentation.mp4', $header);
    }

}

?>