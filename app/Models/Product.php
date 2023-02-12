<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use  SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'file',
        'url_video',
        'time_expiry',
        'service_id',
        'address',
    ];


    static function statusList($status = "")
    {
        $array = [
            0 => __('InActive'),
            1 => __('Active'),
        ];

        if ($status === false) {
            return $array;
        }

        if (array_key_exists($status, $array)) {
            return $array[$status];
        }

        return $array;
    }

    public function getImageAttribute($value)
    {
        if ($value) {
            return url('storage/' . $value);
        }
    }

    public function getFileAttribute($value)
    {
        if ($value) {
            return url('storage/' . $value);
        }
    }

    function service()
    {
        return $this->belongsTo(Service::class);
    }

    function product_descriptions()
    {
        return $this->hasMany(ProductDescription::class);
    }
}
