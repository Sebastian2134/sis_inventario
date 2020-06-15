<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class proveedores
 * @package App\Models
 * @version June 15, 2020, 5:44 pm UTC
 *
 * @property string $rut
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 */
class proveedores extends Model
{
    use SoftDeletes;

    public $table = 'proveedores';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rut',
        'nombre',
        'direccion',
        'telefono',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rut' => 'string',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rut' => 'required',
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'correo' => 'required'
    ];

    
}
