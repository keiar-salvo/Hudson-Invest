<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users'; // Specify the table name if it's not pluralized

    protected $fillable = [
        'last_login', // Ensure this is included
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

    /** generate id */
    // protected static function boot()
    // {
    //     parent::boot();

    //     self::creating(function ($model) {
    //         $latestUser = self::orderBy('user_id', 'desc')->first();
    //         $nextID = $latestUser ? intval(substr($latestUser->user_id, 9)) + 1 : 1;
    //         $model->user_id = 'HHHI' . sprintf("%010d", $nextID);

    //         // Ensure the user_id is unique
    //         while (self::where('user_id', $model->user_id)->exists()) {
    //             $nextID++;
    //             $model->user_id = 'HHHI' . sprintf("%010d", $nextID);
    //         }
    //     });
    // }

    /** Insert New Users */
    public function saveNewuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'username'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email',
            'password'  => 'required|string|min:8|confirmed',
        ], [
            'email.unique' => 'This email is already registered. Please use another.',
        ]);

        if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please fix the errors below.');
        //       return response()->json([
        //     'status' => 'error',
        //     'errors' => $validator->errors()
        // ], 400); // Or redirect back with error
        
        }

        try {
            $todayDate = Carbon::now()->toDayDateTimeString();
            $save             = new User;
            $save->user_id = "sip-". uniqid();
            $save->name       = $request->name;
            $save->email      = $request->email;
            $save->status     = 'Active';
            $save->role_name  = 'User';
            $save->username     = $request->username;
            $save->password   = Hash::make($request->password);
            $save->save();
            return redirect('login')->with('success', 'Account created successfully :)');
        } catch (QueryException $e) {
             $errorMessage = $e->getMessage(); 
            // return response()->json($errorMessage);
             return redirect()->back()->with('error', 'Failed to Create Account. Please try again.');
        }
    }
}