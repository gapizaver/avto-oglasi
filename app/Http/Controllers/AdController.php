<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
                "images",
                "imgUpdate",
            ]))->paginate(10)
        ]);
    }

    public function myAds() {
        return view("ads.my", [
            "ads" => Ad::where("user_id", "=", auth()->user()->id)->paginate(10)
        ]);
    }

    public function create() {
        return view("ads.create");
    }

    private function validateRequest() {
        return request()->validate([
            "condition" => ["required", Rule::in(["n", "u", "c"])],
            "model" => ["required", "max:255"],
            "brand" => ["required", "max:255"],
            "price" => ["required", "integer", "max:20000000"],
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
            "images.*" => ["image"],
        ]);
    }

    public function update(Ad $ad) {
        $attributes = $this->validateRequest();

        // delete old and store new images
        if (request()->hasFile("images")) {
            $attributes["images"] = "";

            foreach(request()->file('images') as $key => $file) {
                $attributes["images"] .= " ". $file->store("/images", "public");
            }

            // delete old images
            if ($ad->images != "") {
                // make array of images paths
                $oldImages = explode(" ", trim($ad->images));

                // delete old images
                Storage::disk("public")->delete($oldImages);
            }
        }

        // save updates
        Ad::find($ad->id)->update($attributes);

        return redirect("/ad/" . $ad->id)->with("success", "Oglas je bil uspešno posodobljen.");
    }

    public function updateView(Ad $ad) {
        return view("ads.update", [
            "ad" => $ad
        ]);
    }

    public function store() {
        // validation for publishing an ad
        $attributes = $this->validateRequest();

        // store images
        $attributes["images"] = "";
        if (request()->hasFile("images")) {
            foreach(request()->file('images') as $key => $file) {
                $attributes["images"] .= " ". $file->store("/images", "public");
            }
        }

        // add id with publisher's id
        $ad = Ad::create(array_merge($attributes, ["user_id" => auth()->user()->id]));

        return redirect("/ad/" . $ad->id)->with("success", "Oglas je bil uspešno ustvarjen.");
    }

    public function delete(Ad $ad) {
        // delete images
        if ($ad->images != "") {
            // make array of images paths
            $oldImages = explode(" ", trim($ad->images));

            // delete old images
            Storage::disk("public")->delete($oldImages);
        }

        $ad->delete();

        return redirect()->back()->with("success", "Oglas je bil uspešno izbrisan");
    }
}
