<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'domains';

    protected $fillable = ['name', 'status', 'code', 'contLength', 'heading', 'keyContent', 'descContent', 'body'];
}