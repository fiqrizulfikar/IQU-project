<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;  // Untuk notifikasi jika diperlukan
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'pin',  // Kolom pin yang baru Anda tambahkan
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Optional: Jika Anda ingin meng-hash PIN atau melakukan sesuatu pada atribut sebelum disimpan
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Misalnya Anda ingin meng-hash PIN sebelum disimpan
            $user->pin = bcrypt($user->pin);
        });
    }
    

    /**
     * Validasi atau aturan khusus untuk model ini dapat ditambahkan di sini jika perlu
     */
}
