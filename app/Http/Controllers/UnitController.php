<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('back-end.unit.index');
    }

    public function create(Request $request)
    {
        Unit::newUnit($request);
        return back()->with('message', 'Unit info create successfully.');
    }

    public function manage()
    {
        return view('back-end.unit.manage', ['units' => Unit::all()]);
    }

    public function edit($id)
    {
        return view('back-end.unit.edit', ['unit' => Unit::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Unit::updatedUnit($request, $id);
        return redirect('/unit/manage')->with('message', 'Unit info update successfully.');
    }

    public function delete($id)
    {
        Unit::deleteUnit($id);
        return redirect('/unit/manage')->with('message', 'Unit info delete successfully.');
    }
}
