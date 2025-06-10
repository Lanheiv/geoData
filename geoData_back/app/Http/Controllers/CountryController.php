<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index() {
        $cuntry = Country::all();
        return view("country/index", compact("cuntry"));
    }
    public function create() {
        return view("country/create");
    }
    public function store(Request  $request) {
        $validated = $request->validate([
            "name" => ["required", "string", "max:100"],
            "area_km2" => ["required", "numeric", "between:0,99999999.99"],
            "population" => ["required", "integer", "min:1"]
        ]);

        Country::create($validated);

        return redirect("/list");
    }
    public function show(Country $country) {
        return view("country/show", compact("country"));
    }
    public function edit(Country $country) {
        return view("country/edit", compact("country"));
    }
    public function update(Request $request, Country $country) {
        $validated = $request->validate([
            "name" => ["required", "string", "max:100"],
            "area_km2" => ["required", "numeric", "between:0,99999999.99"],
            "population" => ["required", "integer", "min:1"]
        ]);

        $country->update($validated);

        return redirect("/list");
    }
    public function destroy(Country $country) {
        $country->delete();

        return redirect("/list");
    }
    public function apiIndex() {
        $country = Country::all();
        return response()->json($country);
    }
}
