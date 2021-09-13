<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $with = ["publisher"];


    // search filters
    public function scopeFilter($query, array $filters) {
        //dd($filters);
        // SORTING BY
        // latest
        if (!isset($filters["order"])) {
            $query->latest();
        } else {
            // year
            $query->when($filters["order"] == "year", fn($query, $search) =>
                $query->orderBy("year"));
            $query->when($filters["order"] == "yearDesc", fn($query, $search) =>
                $query->orderByDesc("year"));

            // mileage
            $query->when($filters["order"] == "mileage", fn($query, $search) =>
                $query->orderBy("mileage"));
            $query->when($filters["order"] == "mileageDesc", fn($query, $search) =>
                $query->orderByDesc("mileage"));

            // price
            $query->when($filters["order"] == "price", fn($query, $search) =>
                $query->orderBy("price"));
            $query->when($filters["order"] == "priceDesc", fn($query, $search) =>
                $query->orderByDesc("price"));

            // horsepower
            $query->when($filters["order"] == "horses", fn($query, $search) =>
                $query->orderBy("horses"));
            $query->when($filters["order"] == "horsesDesc", fn($query, $search) =>
                $query->orderByDesc("horses"));

            // oldest first
            $query->when($filters["order"] == "oldestFirst", fn($query, $search) =>
                $query->oldest());
        }

        // CAR PARAMETERS
        // brand
        $query->when($filters["brand"] ?? false, fn($query, $search) =>
            $query->where("brand", $search));

        // model
        $query->when($filters["model"] ?? false, fn($query, $search) =>
            $query->where("model", "like", "%".$search."%"));

        // horsepower
        $query->whereBetween("horses", [
            $filters["horsesMin"] ?? 0,
            $filters["horsesMax"] ?? PHP_INT_MAX
        ]);

        // mileage
        $query->whereBetween("mileage", [
            $filters["mileageMin"] ?? 0,
            $filters["mileageMax"] ?? PHP_INT_MAX
        ]);

        // year
        $query->whereBetween("year", [
            $filters["yearMin"] ?? 0,
            $filters["yearMax"] ?? PHP_INT_MAX
        ]);

        // price
        $query->whereBetween("price", [
            $filters["priceMin"] ?? 0,
            $filters["priceMax"] ?? PHP_INT_MAX
        ]);

        // displacement
        $query->whereBetween("displacement", [
            $filters["displacementMin"] ?? 0,
            $filters["displacementMax"] ?? PHP_INT_MAX
        ]);

        // fuel
        $query->when($filters["fuel"] ?? false, fn($query, $search) =>
            $query->whereIn("fuel", str_split($search)));

        // body type
        $query->when($filters["body_type"] ?? false, fn($query, $search) =>
            $query->whereIn("body_type", str_split($search, 2)));

        // transmission
        $query->when($filters["transmission"] ?? false, fn($query, $search) =>
            $query->where("transmission", $search[0]));
    }

    // get the publisher (user)
    public function publisher() {
        return $this->belongsTo(User::class, "user_id");
    }


}
