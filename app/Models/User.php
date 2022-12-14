<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nim',
        'jurusan',
        'angkatan',
        'alamat',
        'nomortlp',
        'level',
        'status',
        'dosenwali'
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
    ];

    public function IRS()
    {
        return $this->belongsTo(IRS::class);
    }

    public function KHS()
    {
        return $this->belongsTo(KHS::class);
    }

    public function PKL()
    {
        return $this->belongsTo(PKL::class);
    }

    public function Skrpsi()
    {
        return $this->belongsTo(Skripsi::class);
    }
}
