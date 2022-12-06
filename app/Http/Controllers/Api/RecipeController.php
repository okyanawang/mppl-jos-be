<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IngredientResource;
use App\Http\Resources\StepResource;
use App\Http\Resources\RecipeResource;
use App\Models\Ingredient;
use App\Models\Step;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $recipes = Recipe::latest()->get();
        return response()->json([
            'data' => RecipeResource::collection($recipes),
            'message' => 'Fetch all recipes',
            'success' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:155',
            'desc_a' => 'required',
            'desc_b' => 'required',
            'cal' => 'required|integer',
            'url_thumb' => 'required',
            'url_vid' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $recipe = Recipe::create([
            'name' => $request->get('name'),
            'desc_a' => $request->get('desc_a'),
            'desc_b' => $request->get('desc_b'),
            'cal' => $request->get('cal'),
            'url_thumb' => $request->get('url_thumb'),
            'url_vid' => $request->get('url_vid')
        ]);

        $igrds = $request->get('igrds'); // Bagian Front-end, kirim data array ingredient ke sini
        foreach ($igrds as $igrd) {
            $ing_crt[] = Ingredient::create([
                'recipe_id' => $recipe->id,
                'ingredient' => $igrd
            ]);
        }

        $stps = $request->get('stps'); // Bagian Front-end, kirim data array step ke sini
        foreach ($stps as $stp) {
            $stp_crt[] = Step::create([
                'recipe_id' => $recipe->id,
                'step' => $stp
            ]);
        }

        return response()->json([
            'data' => [new RecipeResource($recipe), new IngredientResource($ing_crt), new StepResource($stp_crt)],
            'message' => 'Recipe added successfully.',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Recipe $recipe)
    {
        return response()->json([
            'data' => new RecipeResource($recipe),
            'message' => 'Data recipe found',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Recipe $recipe)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:155',
            'desc_a' => 'required',
            'desc_b' => 'required',
            'cal' => 'required|integer',
            'url_thumb' => 'required|string',
            'url_vid' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $recipe->update([
            'name' => $request->get('name'),
            'desc_a' => $request->get('desc_a'),
            'desc_b' => $request->get('desc_b'),
            'cal' => $request->get('cal'),
            'url_thumb' => $request->get('url_thumb'),
            'url_vid' => $request->get('url_vid')
        ]);

        return response()->json([
            'data' => new RecipeResource($recipe),
            'message' => 'Recipe updated successfully',
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return response()->json([
            'data' => [],
            'message' => 'Recipe deleted successfully',
            'success' => true
        ]);
    }
}
