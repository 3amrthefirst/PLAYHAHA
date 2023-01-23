<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\people;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {

        $user = people::find($request->route('id'));
        if (is_null($user)){
            $user = User::find($request->route('id'));
        }else {
            if (isset($user->patient_id) || is_null($user->patient_id)) {
                $user = people::find($request->route('id'));
            } else {
                $user = User::find($request->route('id'));
            }
        }

        if ($user->hasVerifiedEmail()) {
            return redirect('/email-verified');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        return redirect('/email-verified');
    }
}
