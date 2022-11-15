<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\RegisteredTenantRequest;

class RegisteredTenantController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisteredTenantRequest $request)
    {
        $tenant = Tenant::create($request->validated());
    }

}
