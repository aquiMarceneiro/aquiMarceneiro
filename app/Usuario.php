<?php

namespace aquiMarceneiro;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'users';

    protected $guarded = ['id'];

}
