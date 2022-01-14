<?php

namespace App\Http\Controllers;

use App\Models\Hodnotenie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HodnotenieControler extends Controller
{
    function save(Request $request, $id, $id_zakaznik){

        $request->validate([
            'hodnotenie'=> 'required|min:3|max:500'
        ]);

        $noveHodnotenie = new Hodnotenie();

        $noveHodnotenie->id_zakaznik = $id_zakaznik;
        $noveHodnotenie->id_teniska = $id;
        $noveHodnotenie->hodnotenie = $request->hodnotenie;

        $zaznamNaUlozenie = $noveHodnotenie->save();

        $hodnotenia = DB::table('hodnotenias')->where('id_teniska','=',$id);

        if($zaznamNaUlozenie){
            return redirect('prihlaseny/detailPrihlaseny/'.$id)->with('uspesne','Vaše hodnotenie bolo úspešne  pridané.');

        }else{
            return redirect('prihlaseny/detailPrihlaseny/'.$id)->with('chyba','Vaše hodnotenie sa nepodarilo pridať.');
        }
    }
}
