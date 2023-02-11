<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Info extends Model
{
    use HasFactory;

    //protected $table = 'infos';
    protected $fillable = ['name', 'lastname', 'age', 'email', 'job', 'user_id'];

    public function jobs()
    {
    return $this->belongsToMany(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

   
    protected static function newFactory()
    {
        return \Modules\Company\Database\factories\InfoFactory::new();
    }
}
