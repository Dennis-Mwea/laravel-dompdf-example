<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'street1_id' => 'required',
            'city_id' => 'required',
            'zip' => 'required',
        ]);

        $user = UserDetail::create([
            'full_name' => $request->get('full_name'),
            'street_address' => $request->get('street1_id'),
            'city' => $request->get('city_id'),
            'zip' => request('zip'),
        ]);

        return redirect('/index');
    }

    public function index()
    {
        $users = UserDetail::all();

        return view('index', compact('users'));
    }

    public function downloadPDF($id)
    {
        $user = UserDetail::find($id);

        $pdf = PDF::loadView('pdf', compact('user'));

        return $pdf->stream();
    }
}
