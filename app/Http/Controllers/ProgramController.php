<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function show()
    {
        $programs = Program::with('user')->get();
        return view('dash_show.program_show', compact('programs'));
    }

    public function create()
    {
        return view('dash.program');
    }

    public function program_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Program::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('home.land')->with('success', 'Program created!');
    }
}
