<?php

namespace App\Http\Controllers;

use App\Models\Zakaznik;
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
                'pohlavie'=>'required|integer|between:0,1',
                'obrazok'=> 'required|mimes:jpg,png,jpeg|max:5048',
                'mnozstvo'=>'required|integer|between:1,100000'
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

    function detaily(int $id){
        $topanka = DB::table('topankas')->where('id','=', $id)->first();
        return view('/hlavne/detail', ['topanka'=>$topanka]);
    }

    function detailyPrihlaseny(int $id){
        $topanka = DB::table('topankas')->where('id','=', $id)->first();
        $hodnotenia = DB::table('hodnotenies')->where('id_teniska','=', $id)->get();

        $zakaznici = DB::table('zakazniks')->select('meno','id')->get();
        return view('/prihlaseny/detailPrihlaseny', ['topanka'=>$topanka,'hodnotenia'=> $hodnotenia, 'zakaznici' => $zakaznici]);
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
        return view('/prihlaseny/panskePrihlaseny',['topanky'=>$topanky]);
    }
    function getDamske(){
        $topanky = Topanka::all();
        return view('/hlavne/damske',['topanky'=>$topanky]);
    }

    function getDamskePrihlaseny(){
        $topanky = Topanka::all();
        return view('prihlaseny/damskePrihlaseny',['topanky'=>$topanky]);
    }


}
