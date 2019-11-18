<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    const ACTIVE = 1; //active; peut être utilisé avec la suppression du compte
    const INACTIVE = 0; //inactive; peut être utilisé avec la suppression du compte

    protected $table = 'users';

    protected $fillable = ['id', 'username', 'password', 'email', 'active', 'token', 'is_deleted', 'deleted_at', 'created_at', 'updated_at'];

    public $timestamps = false;

    protected $hidden = ['password', 'remember_token'];

}
