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

class Review extends Model

{

    public $timestamps = false;



    protected $fillable = [

        'comment', 'userId', 'productId'

    ];



    public function products(): HasMany

    {

        return $this->hasMany(Product::class);

    }

}
