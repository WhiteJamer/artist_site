<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

/**
 * App\Models\Art
 *
 * @property int $id
 * @property string $image_url
 * @property string|null $title
 * @property string|null $description
 * @property int $views
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Art whereViews($value)
 * @mixin \Eloquent
 */
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

    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function getCreatedAt()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('d.m.Y H:i');
    }

    public function getUpdatedAt()
    {
        return \Carbon\Carbon::parse($this->updated_at)->format('d.m.Y H:i');
    }
    public function getImageUrl()
    {
        return asset('/storage/' . $this->image_url);
    }

}