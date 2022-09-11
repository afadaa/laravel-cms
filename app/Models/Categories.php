<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Categories
 * @package App\Models
 * @version September 10, 2022, 1:36 am UTC
 *
 * @property string $tittle
 * @property string $desc
 * @property string $status
 * @property string $link
 * @property string $slug
 * @property integer $parent_id
 * @property string $categoriescol
 */
class Categories extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tittle',
        'desc',
        'status',
        'link',
        'slug',
        'parent_id',
        'categoriescol'
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
        'status' => 'string',
        'link' => 'string',
        'slug' => 'string',
        'parent_id' => 'integer',
        'categoriescol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'tittle' => 'required|string|max:255',
        // 'desc' => 'required|string|max:255',
        // 'status' => 'required|string|max:255',
        // 'link' => 'required|string|max:255',
        // 'slug' => 'required|string|max:255',
        // 'created_at' => 'nullable',
        // 'updated_at' => 'nullable',
        // 'deleted_at' => 'nullable',
        // 'parent_id' => 'required',
        // 'categoriescol' => 'nullable|string|max:45'
    ];


}
