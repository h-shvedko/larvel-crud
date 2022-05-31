<?php

namespace App\Models;

use Couchbase\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
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

    public function hasRole(string $role){
        $roles = DB::table('users')
            ->leftJoin('user_to_groups', 'users.id', '=', 'user_to_groups.user_id')
            ->leftJoin('user_groups', 'user_groups.id', '=', 'user_to_groups.group_id')
            ->leftJoin('roles_to_groups', 'roles_to_groups.group_id', '=', 'user_to_groups.group_id')
            ->leftJoin('roles', 'roles.id', '=', 'roles_to_groups.role_id')
            ->where('users.id', '=', $this->id)
            ->get();

        foreach ($roles as $roleDB) {
            if($roleDB->group_name == $role){
                return true;
            }
        }

        return false;
    }
}
