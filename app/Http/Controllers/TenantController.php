<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tenant;

class TenantController extends Controller
{
   public function index()
    {
        return view('tenants');
    }

    public function show_tenant()
    {
    	$post = Tenant::all();

    	return view('show_tenant',['tenants' => $post]);
    }
}
