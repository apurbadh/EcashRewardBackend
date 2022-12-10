<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{

    public function authenticate(AdminLoginRequest $request){

        return UserResource::make(
            User::where('email', $request->email)->first()
        );
    }

}
