<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StaticString
 *
 * @property int $id
 * @property string $text
 * @property string $tag
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StaticString newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StaticString newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StaticString query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StaticString whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StaticString whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StaticString whereText($value)
 * @mixin \Eloquent
 */
class StaticString extends Model
{
    /**
     * StaticString Model
     * Отвечает за статическую информацию на страницах
     */
}