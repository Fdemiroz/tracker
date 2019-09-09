<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Role extends Model
{
    //
    public function getRoles() {
        $role = Role::all();
        return $role;
    }
}
