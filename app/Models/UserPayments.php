<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $amount
 * @property string $date
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPayments whereUserId($value)
 * @mixin \Eloquent
 */
class UserPayments extends Model
{
    protected $table = 'user_payments';
    use HasFactory;
    protected $casts = [

    ];
}
