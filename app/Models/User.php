<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'position_id',
        'hub_id',
        'division_id',
        'salary_id',
        'workday_id',
        'uuid',
        'name',
        'nik',
        'email',
        'password',
        'joined_at',
        'status',
        'inactive_at',
        'client_ip',
        'last_login_at',
    ];

    /**
     * Get the position that owns the user.
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * Get the hub that owns the user.
     */
    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }

    /**
     * Get the workday that owns the user.
     */
    public function workday()
    {
        return $this->belongsTo(WorkDay::class);
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
    ];
}