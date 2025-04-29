<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    public function create()
    {
        return view('things.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'expiry_date' => 'required|date',
        ]);

        Thing::create($request->only('name', 'expiry_date'));

        return redirect()->back()->with('success', 'Thing saved successfully!');
    }

    public function index()
    {
        $things = Thing::all();
        return view('things.index', compact('things'));
    }

    public function edit($id)
    {
        $thing = Thing::findOrFail($id);
        return view('things.edit', compact('thing'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'expiry_date' => 'required|date',
        ]);

        $thing = Thing::findOrFail($id);
        $thing->update($request->only('name', 'expiry_date'));

        return redirect()->route('things.index')->with('success', 'Thing updated successfully!');
    }

    public function destroy($id)
    {
        $thing = Thing::findOrFail($id);
        $thing->delete();

        return redirect()->route('things.index')->with('success', 'Thing deleted successfully!');
    }
}
