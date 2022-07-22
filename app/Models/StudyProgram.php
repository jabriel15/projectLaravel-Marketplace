<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyProgram extends Model
{
    use SoftDeletes;

    public $table = 'study_program';

    protected $dates = [
        'update_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'study_program_name',
        'update_at',
        'created_at',
        'deleted_at'
    ];

    // One to One
    public function detail_user()
    {
        return $this->hasOne('App\Models\detail_user', 'study_program_id');
    }
}
