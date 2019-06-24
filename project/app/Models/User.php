<?php

namespace App\Models;

use App\Scopes\Search as SearchScope;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use HasApiTokens, Notifiable, HasRoles, SearchScope, MustVerifyEmail;

    protected $searchBy = [
        'name', 'email',
    ];

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected static $logAttributes = [
        'name', 'email',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUserTypesListAttribute()
    {
        return $this->userTypes()
            ->get()->map->type->toArray();
    }

    public function userTypes()
    {
        return $this->hasMany(UserType::class);
    }
}
