<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Program;
use App\Models\User;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('programs')->get();
        return view('land.clients', compact('clients'));
    }
    public function client_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable',
            'gender' => 'nullable|in:male,female,other',
            'dob' => 'nullable|date',
        ]);

        Client::create($request->all());

        return redirect()->route('home.land')->with('success', 'Client registered!');
    }

    public function show()
    {
        $clients = Client::with('programs')->get();
        $programs = Program::all();
        return view('dash_show/client_show', compact('clients','programs'));
    }
    public function enrollClientToPrograms(Request $request, $clientId)
{
    $clients = Client::findOrFail($clientId);
    $programs = Program::all();

    $programIds = $request->input('program_ids');

    $clients->programs()->attach($programIds);
    return view('dash_show.program_show', [
        'clients' => $clients,
        'programs' => $programs
    ]);
    // return view('dash_show/program_show', 'clients','programs');
}
public function showEnrollForm($id)
{
    $clients = Client::findOrFail($id);
    $programs = Program::all();

    return view('dash_show.enrollment_show', compact('clients', 'programs'));
}
}
