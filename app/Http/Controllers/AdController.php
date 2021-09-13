<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function search() {
        return view('ads', [
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
                "transmission"
            ]))->paginate(10)
        ]);
    }
}
