<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;
use Exception;
use App\Mail\SendCodeMail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function isBlocked()
    {
        return $this->is_blocked;
    }

    public function updateProfile(int $id, array $fields = [])
    {
        return $this->where('id', $id)->update($fields);
    }

    public function createAccount(array $fields = [])
    {
        return $this->create($fields);
    }

    public function findUser(string $key, string $value)
    {
        return $this->where($key, $value)->first();
    }


    // Eloquent Relationship
    public function credential()
    {
        return $this->hasOne(Credential::class);
    }

    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }

    public function withdraw()
    {
        return $this->hasMany(Withdraw::class);
    }

    public function wallet()
    {
        return $this->hasMany(Wallet::class);
    }

    public function investment()
    {
        return $this->hasMany(Investment::class);
    }

    public function adminWallet()
    {
        return $this->hasMany(AdminWallet::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function referralBonus()
    {
        return $this->hasMany(ReferralBonus::class);
    }


//    public function generateCode()
//    {
//        $code = rand(1000, 9999);
//
//        UserCode::updateOrCreate(
//            [ 'user_id' => auth()->id() ],
//            [ 'code' => $code ]
//        );
//
//        try {
//
//            $details = [
//                'title' => 'Mail from'. env('APP_NAME') ,
//                'code' => $code
//            ];
//
//            Mail::to(auth()->user()->email)->send(new SendCodeMail($details));
//
//        } catch (Exception $e) {
//            info("Error: ". $e->getMessage());
//        }
//    }

}
