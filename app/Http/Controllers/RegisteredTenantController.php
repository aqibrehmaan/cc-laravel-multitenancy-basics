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
        return view('auth.register-tenant');
    }

    public function store(RegisteredTenantRequest $request)
    {
        $tenant = Tenant::create($request->validated());

        $tenant->createDomain([ 'domain' => $request->domain]);

        return redirect(tenant_route($tenant->domains->first()->domain, 'tenant.login'));
    }

}
