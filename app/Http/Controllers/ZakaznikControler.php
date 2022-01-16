<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakaznik;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ZakaznikControler extends Controller
{
    function logout(){
            if(session()->has('idPrihlaseneho')){
                session()->pull('idPrihlaseneho');
                return redirect('/hlavne/prihlasenie');
            }
    }

    function save(Request $request){
        $request->validate([
            'meno'=>'required|between:1,255',
            'priezvisko'=>'required|between:1,255',
            'mail'=>'required|email|unique:zakazniks',
            'tel_cislo'=>'required|size:10',
            'heslo'=>'required|between:6,15'
        ]);

        $zakaznik = new Zakaznik();
        $zakaznik->meno = $request->meno;
        $zakaznik->priezvisko = $request->priezvisko;
        $zakaznik->mail = $request->mail;
        $zakaznik->tel_cislo = $request->tel_cislo;
        $zakaznik->heslo = Hash::make($request->heslo);
        $zaznamNaUlozenie = $zakaznik->save();

        if($zaznamNaUlozenie){
            return back()->with('uspesne','Vaša registrácia prebehla úspešne.');
        }else{
            return back()->with('chyba','Pri registrácií nastala chyba.');
        }
    }

    function check(Request $request){
        $request->validate([
            'mail'=> 'required|email',
            'heslo' =>'required|between:6,15'
        ]);
        $nasielSaAdmin = DB::table('zakazniks')->where('mail','=',$request->mail)
            ->where('id','=', 10)->first();

        $zakaznik = DB::table('zakazniks')->where('mail','=',$request->mail)->first();

        if($nasielSaAdmin){
            if(Hash::check($request->heslo,$nasielSaAdmin->heslo)){
                $request->session()->put('idPrihlaseneho', $nasielSaAdmin->id);
                return redirect('/prihlasenyAdmin/uvodPrihlasenyAdmin');
            }else{
                return back()->with('chyba','Zadali ste zlé prihlasovacie údaje.');
            }

        }else if($zakaznik){
            if(Hash::check($request->heslo,$zakaznik->heslo)){
                $request->session()->put('idPrihlaseneho', $zakaznik->id);
                return redirect('/prihlaseny/uvodPrihlaseny');
            }else{
                return back()->with('chyba','Zadali ste zlé prihlasovacie údaje.');
            }
        }

    }

    function getAll(){
            $zakaznici = Zakaznik::all();
            return view('/prihlaseny/profil',['zakaznici'=>$zakaznici]);
    }

    function getAllAdmin(){
        $zakaznici = Zakaznik::all();
        return view('/prihlasenyAdmin/profilAdmin',['zakaznici'=>$zakaznici]);

    }

    function getAllZakaznici(){
        $zakaznici = Zakaznik::all();
        return view('/prihlasenyAdmin/Zakaznici',['zakaznici'=>$zakaznici]);

    }

    function updateMeno(Request $request){
        $request->validate(['meno'=>'required|between:1,255']);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['meno' => $request->meno]);
        return redirect('/prihlaseny/profil');

    }

    function updatePriezvisko(Request $request){
        $request->validate(['priezvisko'=>'required|between:1,255']);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['priezvisko' => $request->priezvisko]);
        return redirect('/prihlaseny/profil');
    }
    function updateMail(Request $request){
        $request->validate(['mail'=>'required|email|unique:zakazniks']);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['mail' => $request->mail]);
        return redirect('/prihlaseny/profil');
    }
    function updateTelCislo(Request $request){
        $request->validate(['tel_cislo'=>'required|size:10']);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['tel_cislo' => $request->tel_cislo]);
        return redirect('/prihlaseny/profil');
    }

    function updateHeslo(Request $request){
        $request->validate(['heslo'=>'required|between:6,15']);
        $hesloNaZmenu = Hash::make($request->heslo);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['heslo' => $hesloNaZmenu]);
        return redirect('/prihlaseny/profil');
    }

    function updateMailAdmin(Request $request){
        $request->validate(['mail'=>'required|email|unique:zakazniks']);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['mail' => $request->mail]);
        return redirect('/prihlasenyAdmin/profilAdmin');
    }

    function updateHesloAdmin(Request $request){
        $request->validate(['heslo'=>'required|between:6,15']);
        DB::table('zakazniks')
            ->where('id', $request->id)
            ->update(['heslo' => $request->heslo]);
        return redirect('/prihlasenyAdmin/profilAdmin');
    }


    function delete($id){
        DB::table('zakazniks')->where('id', '=', $id)->delete();
        return redirect('/prihlasenyAdmin/Zakaznici');
    }


}
