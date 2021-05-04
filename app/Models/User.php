<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
=======

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;
>>>>>>> 39a02aa47d9e35d4cb551ef14ff3e3ebfab7b54b

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
        'two_factor_recovery_codes',
        'two_factor_secret',
=======
>>>>>>> 39a02aa47d9e35d4cb551ef14ff3e3ebfab7b54b
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

=======
>>>>>>> 39a02aa47d9e35d4cb551ef14ff3e3ebfab7b54b
}
