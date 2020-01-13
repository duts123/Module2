<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Avatar;
use DB;
class manageUsersController extends Controller
{
	public function index() {

	}

    public function manageUsers() 
    {
    	return view('pages.users.create_users');
    }

    public function manageTenants() 
    {
    	$data = db::select("call sp_get_users()");
    	return view('pages.users.tenants', compact('data'));
    }

    public function tenantForm()
    {
    	return view('pages.users.tenant_form');
    }

    public function addTenant()
    {
    	db::select("call sp_manage_user(?,?,?,?,?,?,?,?,?,?,?)",
    		[
    			"insert",
    			request('fname'),
    			request('mname'),
    			request('lname'),
    			request('email'),
    			request('company'),
    			request('owner'),
    			request('number'),
    			request('floor'),
    			request('unit'),
    			"",
    		]);

    	$data = db::select("call sp_get_users()");
    	return view('pages.users.tenants', compact('data'));
    }

    public function deactivateUser()
    {
    	db::select("call sp_manage_user(?,?,?,?,?,?,?,?,?,?,?)",
    		[
    			"deactivate", "", "", "", "", "", "", "", "", "", request('id'),
    		]);
    }

    public function activateUser()
    {
    	db::select("call sp_manage_user(?,?,?,?,?,?,?,?,?,?,?)",
    		[
    			"activate", "", "", "", "", "", "", "", "", "", request('id'),
    		]);
    }
}
