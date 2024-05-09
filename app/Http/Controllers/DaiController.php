<?php

namespace App\Http\Controllers;

use App\Models\Dai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class DaiController extends Controller
{
    //
    public function index()
    {
        $dai = Dai::all();

        return view('tb', compact('dai'));
    }

    public function add()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $dai = Dai::create($request->all());
        return redirect('/');
    }

    public function edit($id)
    {
        $dai = Dai::find($id);
        return view('update.edit', compact(['dai']));
    }

    public function update($id, Request $request)
    {
        $dai = Dai::find($id);
        $dai -> update($request->all());

        return redirect('/');
    }

    public function destroy($id)
    {
        $dai = Dai::find($id);
        $dai -> delete();

        return redirect('/');
    }
}
