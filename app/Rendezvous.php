<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    protected $fillable = array('medecins_id','users_id','libelle','date');
    public static $rules = array('medecins_id'=>'required|integer',
                                'users_id'=>'required|bigInteger',
                                'libelle'=>'required|min:20',
                                'date'=>'required|min:3'
                                 );

    public function medecin()
    {
        return $this->belongsTo('App\Medecin');
    }
}
