<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\District;
use App\Models\Position;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Database\Seeders\DistrictSeeder;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $districts = District::get(['id', 'name']);
        $positions = Position::get(['id', 'name']);

        return view('auth.register', compact('districts', 'positions'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(UserRegisterRequest $request)
    {
        $user = new User($request->validated());

        $user->position()->associate($request->position);
        $user->village()->associate($request->village);

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
