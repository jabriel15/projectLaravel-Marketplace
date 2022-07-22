<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelUser extends Model
{
    use SoftDeletes;

    public $table = 'level_user';

    protected $dates = [
        'update_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'level_user_name',
        'update_at',
        'created_at',
        'deleted_at'
    ];

    // One to Many
    public function user()
    {
        return $this->hasMany('App\Models\User', 'level_user_id');
    }
}
