<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RendezvousController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        $medecins = Medecin::all();
        return view('rendezvous.add', ['medecins'=>$medecins]);
    }

    public function getAll()
    {
       // $liste_rendezvous = Rendezvous::paginate(2);
        $liste_rendezvous = Rendezvous::all();
        return view('rendezvous.list', ['rendezvous'=> $liste_rendezvous]);
    }

    public function edit($id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('rendezvous.edit',['rendezvous'=>$rendezvous]);
    }

    public function update(Request $request)
    {

        $rendezvous = Rendezvous::find($request->id);
        $rendezvous->libelle = $request->libelle;
        $rendezvous->date = $request->date;
        $rendezvous->medecins_id = $request->medecins_id;
        $rendezvous->users_id = Auth::id();

        $result = $rendezvous->save();
        return redirect('/rendezvous/getAll');
    }

    public function delete($id)
    {
        $rendezvous = Rendezvous::find($id);
        if ($rendezvous != null)
        {
            $rendezvous->delete();
        }
        return redirect('/rendezvous/getAll');
    }

    public function persist(Request $request)
    {
        $rendezvous = new Rendezvous();
        $rendezvous->libelle = $request->libelle;
        $rendezvous->date = $request->date;
        $rendezvous->medecins_id = $request->medecins_id;
        $rendezvous->users_id = Auth::id();

        $result = $rendezvous->save();
        $medecins = Medecin::all();
        return view('rendezvous.add', ['confirmation'=>$result,'medecins'=>$medecins]);
    }
}
