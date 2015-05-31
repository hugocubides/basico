<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_profile';
    
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */    
    protected $fillable = ['first_name', 'last_name', 'display_name', 'birthday'];
    
    /**
     * [[Description]]
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

}
