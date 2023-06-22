<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'uuid',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->uuid = '100'.mt_rand(100000, 999999);
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    public function todosCount()
    {
        return $this->todos()->count();
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isBanned()
    {
        return $this->is_banned === true;
    }

    public function deadline()
    {
        return $this->hasMany(Todo::class)->whereNotNull('start_date');
    }

    public function done()
    {
        return $this->hasMany(Todo::class)->whereNotNull('due_date');
    }

    public function getUuidAttribute()
    {
        return sprintf('%06d', $this->attributes['uuid']);
    }
}
