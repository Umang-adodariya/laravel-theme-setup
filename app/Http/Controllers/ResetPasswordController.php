<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

use App\Http\Requests\ResetPasswordRequest;

use App\Models\User;

use App\Providers\RouteServiceProvider;

class ResetPasswordController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function reset(ResetPasswordRequest $request)
    {

        $userId = decrypt($request->token);
        $verifyUser = User::where(['id' => $userId, 'otp' => $request->otp])->first();

        if ($verifyUser != null) {
            if ($verifyUser->updated_at > now()->addHour()) {
                $verifyUser->otp = null;
                $verifyUser->save();
                return $this->sendError(trans('messages.custom.otpexpired'));
            }

            $verifyUser->otp = null;
            $verifyUser->password = Hash::make($request->password);
            $verifyUser->save();
            return $this->sendResponse(true, [], trans(
                'messages.custom.change_password_messages',
            ));
        }
        return $this->sendResponse(false, [], trans('messages.custom.otp'));
    }
}
