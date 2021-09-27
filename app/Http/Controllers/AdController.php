<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function search() {
        return view('ads.ads', [
            "ads" => Ad::filter(request([
                "order",
                "brand",
                "model",
                "mileageMin",
                "mileageMax",
                "horsesMin",
                "horsesMax",
                "yearMin",
                "yearMax",
                "priceMin",
                "priceMax",
                "displacementMin",
                "displacementMax",
                "fuel",
                "body_type",
                "transmission",
                "images"
            ]))->paginate(10)
        ]);
    }

    public function create() {
        return view("ads.create");
    }

    public function store() {
        // validation for publishing an ad
        $attributes = request()->validate([
            "condition" => ["required", Rule::in(["n", "u", "c"])],
            "model" => ["required", "max:255"],
            "brand" => ["required", "max:255"],
            "price" => ["required", "integer"],
            "body_type" =>
            ["required",
            Rule::in([
                "hb",
                "li",
                "ca",
                "co",
                "mv",
                "cb",
                "su",
                "pu"
            ])],
            "year" => ["required", "integer", "min:1900", "max:". ((int)(date("Y"))+2)],
            "mileage" => ["required", "integer", "min:0", "max:3000000"],
            "displacement" => ["required", "numeric", "min:0.1", "max:10"],
            "horses" => ["required", "integer", "min:1", "max:3000"],
            "fuel" => ["required", Rule::in(["g", "d", "e", "h", "b"])],
            "transmission" => ["required", Rule::in(["m", "a"])],
            "desc" => ["max:10000"],
            "images.*" => ["image"]
        ]);

        $attributes["images"] = "";
        if (request()->hasFile("images")) {
            foreach(request()->file('images') as $key => $file) {
                $attributes["images"] .= " ". $file->store("/images", "public");
            }
        }

        // add id with publisher's id
        $ad = Ad::create(array_merge($attributes, ["user_id" => auth()->user()->id]));

        // store images
        if (request()->hasFile("images")) {
            foreach(request()->file('images') as $key => $file) {

            }
        }

        return redirect("/ad/" . $ad->id)->with("success", "Oglas je bil uspešno ustvarjen.");
    }
}
