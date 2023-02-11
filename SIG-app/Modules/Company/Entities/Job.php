<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'remuneration', 'type', 'user_id', 'status'];

    public function infos()
    {
        return $this->belongsToMany(info::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\Company\Database\factories\JobFactory::new();
    }
}
