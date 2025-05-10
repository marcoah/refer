<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'password',
        'last_login_at',
        'last_login_ip_address',
        'status'
    ];

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
        'last_login_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function getFullnameAttribute()
    {
        $fullname = $this->firstname . ' ' . $this->lastname;
        return $fullname;
    }

    public function getAvatarUrlAttribute()
    {
        $imagen = 'assets/img/profile-img.jpg';

        if ($this->avatar) {
            if (Storage::disk('public')->exists($this->avatar)) {
                $imagen = $this->avatar;
            }
        }

        return asset($imagen);
    }

    public function getJobAttribute()
    {
        return $this->profile ? $this->profile->profile_job : null;
    }
}
