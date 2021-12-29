<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakaznik;
use Illuminate\Support\Facades\DB;

class LoginRegisterControler extends Controller
{
    function login(){

        return view('hlavne.prihlasenie');
    }

    function register(){

        return view('hlavne.registracia');
    }


    function save(Request $request){
        //return $request->input();
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
        $zakaznik->heslo = $request->heslo;
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
        $nasielSaAdmin = false;
        $nasielSaZakaznik = DB::table('zakazniks')->where('mail','=',$request->mail)
                                                       ->where('heslo','=',$request->heslo)
                                                       ->get()->first();
        if($request->mail == 'admin@gmail.com' && $request->heslo == 'admin123'){
            $nasielSaAdmin = true;
        }

        if($nasielSaAdmin){
            return redirect('/prihlasenyAdmin/uvodPrihlasenyAdmin');
        }else if($nasielSaZakaznik){
            $request>session()->put('idPrihlaseneho', $nasielSaZakaznik->id);
            return redirect('/prihlaseny/uvodPrihlaseny');
        }else{
            return back()->with('chyba','Zadali ste zlé prihlasovacie údaje.');
        }
    }

    function uvodPrihlaseny(){
        return view('prihlaseny.uvodPrihlaseny');
    }

    function uvodPrihlasenyAdmin(){
        return view('prihlasenyAdmin.uvodPrihlasenyAdmin');
    }


}
