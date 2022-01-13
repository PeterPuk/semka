<?php

namespace App\Http\Controllers;

use App\Rules\PohlavieRule;
use Illuminate\Http\Request;
use App\Models\Topanka;
use Illuminate\Support\Facades\DB;
class TopankaControler extends Controller
{
    function save(Request $request){
            $request->validate([
                'cena' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                'velkost'=>'required|integer|between:30,50',
                'nazov'=>'required|max:50',
                'znacka' => 'required|max:50',
                'pohlavie'=>'required|integer|between:0,1',
                'obrazok'=> 'required|mimes:jpg,png,jpeg|max:5048',
                'mnozstvo'=>'required|integer'
            ]);

            $novyNazovObrazku =   time() . '-' . $request->nazov . '.' .
                $request->obrazok->extension();

            $request->obrazok->move(public_path('Obrazky'),$novyNazovObrazku);

            $topanka = new Topanka();
            $topanka->cena =$request->cena;
            $topanka->velkost = $request->velkost;
            $topanka->nazov = $request->nazov;
            $topanka->znacka = $request->znacka;
            $topanka->obrazok = $novyNazovObrazku;
            $topanka->pohlavie = $request->pohlavie;
            $topanka->mnozstvo = $request->mnozstvo;
            $zaznamNaUlozenie = $topanka->save();

            if($zaznamNaUlozenie){
                return back()->with('uspesne','Tenisky boli vložené do vašej databázy.');
            }else{
                return back()->with('chyba','Došlo k chybe pri vkladaní do databázy.');
            }
    }

    function delete(int $id){
        DB::table('topankas')->where('id', '=', $id)->delete();
        return redirect('/prihlasenyAdmin/Tenisky');
    }

    function update(Request $request){

    }
    function getALl(){
        $topanky = Topanka::all();
        return view('/prihlasenyAdmin/Tenisky',['topanky'=>$topanky]);
    }

    function getPanske(){
        $topanky = Topanka::all();
        return view('/hlavne/panske',['topanky'=>$topanky]);
    }

    function getPanskePrihlaseny(){
        $topanky = Topanka::all();
        return view('/prihlaseny/panskeprihlaseny',['topanky'=>$topanky]);
    }
    function getDamske(){
        $topanky = Topanka::all();
        return view('/prihlaseny/damskePrihlaseny',['topanky'=>$topanky]);
    }


}
