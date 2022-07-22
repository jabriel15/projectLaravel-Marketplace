<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioUser extends Model
{
    use SoftDeletes;

    public $table = 'portfolio_user';

    protected $dates = [
        'update_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'detail_user_id',
        'title',
        'description',
        'project',
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    // One to Many
    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser', 'detail_user_id', 'id');
    } 
}
