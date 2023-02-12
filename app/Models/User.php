<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use SoftDeletes, HasRoles, HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'status',
        'image',
        'user_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    static function statusList($status = "")
    {
        $array = [
            0 => __('Awaiting review'),
            1 => __('Acceptable'),
            2 => __('Disabled'),
        ];

        if ($status === false) {
            return $array;
        }

        if (!is_string($status) and $status != false or $status >= 0) {
            return !empty($array[$status]) ? $array[$status] : $status;
        }

        return $array;
    }

    static function gender($gender = "")
    {
        $array = [
            1 => __('Male'),
            2 => __('Female'),
        ];

        if ($gender == "") {
            return $array;
        } else {
            return !empty($array[$gender]) ? $array[$gender] : $gender;
        }
    }

    public function getRoleIdAttribute()
    {
        return ($this->roles and (!empty($this->roles[0]))) ? $this->roles[0]->id : 0;
    }

    public function getImageAttribute($value)
    {
        return $value ? url('storage/' . $value) : url('dashboard/images/1.png');
    }

}
