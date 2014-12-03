<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;


class User extends Eloquent implements UserInterface, RemindableInterface
{

    protected $fillable = array(
        'Name',
        'State',
        'Gender',
        'dob',
        'phone',
        'Email',
        'Username',
        'Password',
        'Password_temp',
        'Carrier',
        'product_developing',
        'web_profficient',
        'Moblie_applications',
        'hopes_aspirations',
        'why_member',
        'web_technologies',
        'activation_code',
        'active');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

}
