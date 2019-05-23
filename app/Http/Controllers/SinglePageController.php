<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class SinglePageController extends Controller
{
    public function index() {
        return view('app');
    }

    public function showAll() {
        $recipes = Recipe::all();
        return $recipes;
    }

    public function addrecipe(Request $request) {
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->image_url = $request->image_url;
        $recipe->cooking_time = $request->cooking_time;
        $recipe->ingredients = $request->ingredients;
        $recipe->cooking = $request->cooking;
        $recipe->save();

        return redirect('/');
    }

    public function show(Request $request, $id) {
        $recipe = Recipe::where('id', $id)->first();
        if ($recipe == NULL) 
            return 'NULL';
        else 
            return $recipe;
    }
}
