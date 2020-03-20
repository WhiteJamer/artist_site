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

    public function getShortDescription()
    {
        return mb_strimwidth($this->description, 0,1000, ' ...');
    }

    public function getCreatedAt() {
        return \Carbon\Carbon::parse($this->created_at)->format('d.m.Y H:i');
    }

    public function getUpdatedAt() {
        return \Carbon\Carbon::parse($this->updated_at)->format('d.m.Y H:i');
    }

}