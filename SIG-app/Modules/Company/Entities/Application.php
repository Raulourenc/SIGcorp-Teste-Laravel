<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['info_id', 'job_id'];


    protected static function newFactory()
    {
        return \Modules\Company\Database\factories\ApplicationFactory::new();
    }
}
