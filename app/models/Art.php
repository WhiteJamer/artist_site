<?php


namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    /**
     * Art Model
     * @int id
     * @text image_url
     * @text description
     * @integer views
     * @integer user_id
     */

    protected $guarded = ['views', 'user_id'];

    public function owner()
    {
        return $this->hasOne('App\models\User');
    }
    // Получить недавние работы
    static function getRecentArts($count)
    {
        return static::orderBy('updated_at', 'desc')->paginate($count);
    }

}