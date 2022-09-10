<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Berita
 * @package App\Models
 * @version September 10, 2022, 1:23 am UTC
 *
 * @property string $tittle
 * @property string $desc
 * @property string $photo
 */
class Berita extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'beritas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tittle',
        'desc',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tittle' => 'string',
        'desc' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tittle' => 'required|string|max:255',
        'desc' => 'required|string|max:255',
        'photo' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
