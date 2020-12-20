<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Location
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $rating
 * @property string $image_1
 * @property string $image_2
 * @property string $image_3
 * @property string $x_coordinate
 * @property string $y_coordinate
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereXCoordinate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereYCoordinate($value)
 * @mixin \Eloquent
 */
class Location extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function locations() {
        return $this -> belongsTo(Category::class);
    }
}
