<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestAccountController extends Controller
{
    /**
     * Display the Request Account page.
     */
    public function index()
    {
        // Example: Fetch pending accounts from the database if needed
        // $pendingAccounts = User::where('status', 'pending')->get();

        return view('request-account'); // Pass data if needed
    }
}
