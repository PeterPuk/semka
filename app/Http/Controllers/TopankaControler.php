<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topanka;
use Illuminate\Support\Facades\DB;
class TopankaControler extends Controller
{
    function save(Request $request){
            $request->validate([
                'cena' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                'velkost'=>'required|integer|min:30|max:50',
                'nazov'=>'required|max:50',
                'znacka' => 'required|max:50',
                'obrazok'=> 'required|mimes:jpg,png,jpeg|max:5048'

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
            $zaznamNaUlozenie = $topanka->save();

            if($zaznamNaUlozenie){
                return back()->with('uspesne','Zaznam sa vlozil spravne.');
            }else{
                return back()->with('chyba','Doslo k chybe pri vkladani zaznamu.');
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

}
