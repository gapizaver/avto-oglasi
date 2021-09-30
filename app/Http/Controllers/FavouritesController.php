<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\DB;

class FavouritesController extends Controller
{
    public function show() {
        return view("ads.fav", [
            "ads" => auth()->user()->favs()->paginate(10)
        ]);
    }

    public function store(Ad $ad) {
        DB::table('ad_user')->insert([
            "ad_id" => $ad->id,
            "user_id" => auth()->user()->id,
        ]);

        return redirect()->back()->with(
            "success", "Oglas je bil uspešno dodan med priljubljene."
        );
    }

    public function delete(Ad $ad) {
        DB::table('ad_user')
            ->where("ad_id", $ad->id)
            ->where("user_id", auth()->user()->id)
            ->delete();

        return redirect()->back()->with(
            "success", "Oglas je bil uspešno odstranjen od priljubljenih."
        );
    }
}
