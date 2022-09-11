<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Galeri
 * @package App\Models
 * @version September 10, 2022, 4:39 am UTC
 *
 * @property string $tittle
 * @property string $photo
 */
class Galeri extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'galeris';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tittle',
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
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'tittle' => 'required|string|max:255',
        // 'photo' => 'required|string',
        // 'created_at' => 'nullable',
        // 'updated_at' => 'nullable'
    ];


}
