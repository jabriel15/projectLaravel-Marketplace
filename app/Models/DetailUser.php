<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory,SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'update_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'users_id',
        'study_program_id',
        'photo',
        'contact_umber',
        'biography',
        'completion_year',
        'update_at',
        'created_at',
        'deleted_at'
    ];

    // One to one
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    public function study_program()
    {
        return $this->belongsTo('App\Models\StudyProgram', 'study_program_id','id');
    }

    // One to Many
    public function experience_user()
    {
        return $this->hasMany('App\Models\ExperienceUser', 'detail_user_id');
    }

    public function education_user()
    {
        return $this->hasMany('App\Models\EducationUser', 'detail_user_id');
    }

    public function portfolio_user()
    {
        return $this->hasMany('App\Models\PortfolioUser', 'detail_user_id');
    }
}
