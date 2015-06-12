<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    /**
	 * Tabla de la base de datos usada por el modelo.
	 *
	 * @var string
	 */
	protected $table = 'user_profile';
    
    /**
	 * Atributos que se pueden asignar masivamente.
	 *
	 * @var array
	 */    
    protected $fillable = ['birthday', 'bio', 'profession', 'organization', 'address', 'city', 'country', 'phone', 'mobile', 'website'];
    
    /**
     * Vinculación con el modelo User
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
