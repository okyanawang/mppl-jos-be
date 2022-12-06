<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $ingredients = Ingredient::latest()->get();
        return response()->json([
            'data' => IngredientResource::collection($ingredients),
            'message' => 'Fetch all ingredients',
            'success' => true
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function findex($id)
    {
        // $ingredients = Ingredient::latest()->get();

        $items = DB::table('ingredients')
                     ->where('recipe_id', $id)
                     ->get();

        return response()->json([
            'data' => IngredientResource::collection($items),
            'message' => 'Fetch all ingredients by recipe id',
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
            'recipe_id' => 'required|integer|',
            'ingredient' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $ingredient = Ingredient::create([
            'recipe_id' => $request->get('recipe_id'),
            'ingredient' => $request->get('ingredient')
        ]);

        return response()->json([
            'data' => new IngredientResource($ingredient),
            'message' => 'Ingredient added successfully.',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Ingredient $ingredient)
    {
        return response()->json([
            'data' => new IngredientResource($ingredient),
            'message' => 'Data ingredient found',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $validator = Validator::make($request->all(), [
            'recipe_id' => 'required|integer|',
            'ingredient' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $ingredient->update([
            'recipe_id' => $request->get('recipe_id'),
            'ingredient' => $request->get('ingredient')
        ]);

        return response()->json([
            'data' => new IngredientResource($ingredient),
            'message' => 'Ingredient updated successfully',
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return response()->json([
            'data' => [],
            'message' => 'Ingredient deleted successfully',
            'success' => true
        ]);
    }
}
