<?php

namespace App\Http\Controllers;

use App\Models\Objednavka;
use App\Models\Topanka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ObjednavkaControler extends Controller
{

    function presunNaObjednavkuTenisky(int $id){
        $topanka = DB::table('topankas')->where('id','=', $id)->first();
        return view('/prihlaseny/objednavka', ['topanka'=>$topanka]);
    }


    function save(Request $request, $id_topanka, $id_zakaznik){
        $request->validate([
            'meno'=>'required|min:2|max:30',
            'priezvisko'=> 'required|min:2|max:30',
            'adresa'=> 'required|min:3|max:40',
            'mesto'=>'required|min:3|max:40',
            'psc'=> 'required|size:5',
            'doprava'=>'required'
        ]);

        $objednavka = new Objednavka();
        $objednavka->id_teniska = $id_topanka;
        $topanka = DB::table('topankas')->where('id','=', $id_topanka)->first();
        if($topanka->mnozstvo == 1 ){
            DB::table('topankas')->where('id', '=', $id_topanka)->delete();
        }else{
            DB::table('topankas')->where('id','=',$id_topanka)->decrement('mnozstvo');
        }
        $objednavka->id_zakaznik = $id_zakaznik;
        $objednavka->meno = $request->meno;
        $objednavka->priezvisko = $request->priezvisko;
        $objednavka->adresa = $request->adresa;
        $objednavka->mesto = $request->mesto;
        $objednavka->psc = $request->psc;
        $objednavka->doprava = $request->doprava;
        $objednavka->save();
        return view('/prihlaseny/objednavkaInfo');

    }

    function getALl(){
        $objednavky = Objednavka::all();
        return view('/prihlasenyAdmin/objednavky',['objednavky'=>$objednavky]);
    }

    function delete($id){
        DB::table('objednavkas')->where('id','=',$id)->delete();
        return redirect('/prihlasenyAdmin/objednavky');
    }
}
