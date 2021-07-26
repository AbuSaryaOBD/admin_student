<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    use CrudTrait, HasTranslations;

    protected $fillable = ['name', 'guard_name', 'updated_at', 'created_at'];

    /**
     * The attributes that should be translate to supported languages.
     *
     * @var array
     */
    protected $translatable  = ['name'];
}
