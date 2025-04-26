<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Program;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request)
{
    // users search
    $query = $request->input('query');

    $users = User::where('name', 'like', "%$query%")
                 ->orWhere('email', 'like', "%$query%")
                 ->get();
    // clients search
    $clients = Client::with('programs')
                 ->where('name', 'like', "%$query%")
                 ->orWhere('email', 'like', "%$query%")
                 ->orWhere('gender', 'like', "%$query%")
                 ->get();
    // programs search
    $programs = Program::all();
    $programs = Program::with('user')
                 ->where('name', 'like', "%$query%")
                 ->orWhere('description', 'like', "%$query%")
                 ->get();

    return view('dash_show.search_show', compact('users', 'clients', 'programs', 'query'));
}
}
