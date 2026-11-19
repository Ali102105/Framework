<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Collection;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;



/**

 * @property int $id

 * @property string $name

 *

 * @property-read Collection<int, Product> $products

 */

class Role extends Model
{

    public $timestamps = false;



    protected $fillable = [

        'name',

    ];



    public function products(): HasMany
    {

        return $this->hasMany(Product::class);

    }


    public function canDelete(): bool
    {
        return !\Illuminate\Support\Facades\DB::table('users')
            ->where('role_id', $this->id)->exists();
    }


}
