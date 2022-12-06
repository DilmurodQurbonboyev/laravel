<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property $name
 * @property $email
 * @property $password
 * @property $remember_token
 * @property $email_verified_at
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userData(): HasOne
    {
        return $this->hasOne(UserData::class, 'userid');
    }

    public function userRoleLink(): BelongsToMany
    {
        return $this->belongsToMany(Authority::class, 'user_role_links');
    }

    public static function create($name, $email, $password): static
    {
        $user = new static();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        return $user;
    }
}
