<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Slide
 * @package App\Models
 * @version September 11, 2022, 3:11 am UTC
 *
 * @property string $tittle
 * @property string $thumbnail
 * @property string $status
 */
class Slide extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'slides';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tittle',
        'thumbnail',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tittle' => 'string',
        'thumbnail' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tittle' => 'nullable|string|max:255',
        // 'thumbnail' => 'nullable|string|max:255',
        'status' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
