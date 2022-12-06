<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FoodResource;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $foods = Food::latest()->get();
        return response()->json([
            'data' => FoodResource::collection($foods),
            'message' => 'Fetch all foods',
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
            'price' => 'required|integer',
            'is_avail' => 'required|integer',
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

        $food = Food::create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'is_avail' => $request->get('is_avail'),
            'desc_a' => $request->get('desc_a'),
            'desc_b' => $request->get('desc_b'),
            'cal' => $request->get('cal'),
            'url_thumb' => $request->get('url_thumb'),
            'url_vid' => $request->get('url_vid')
        ]);

        return response()->json([
            'data' => new FoodResource($food),
            'message' => 'Food added successfully.',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Food $food)
    {
        return response()->json([
            'data' => new FoodResource($food),
            'message' => 'Data food found',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Food $food)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:155',
            'price' => 'required|integer',
            'is_avail' => 'required|integer',
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

        $food->update([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'is_avail' => $request->get('is_avail'),
            'desc_a' => $request->get('desc_a'),
            'desc_b' => $request->get('desc_b'),
            'cal' => $request->get('cal'),
            'url_thumb' => $request->get('url_thumb'),
            'url_vid' => $request->get('url_vid')
        ]);

        return response()->json([
            'data' => new FoodResource($food),
            'message' => 'Food updated successfully',
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return response()->json([
            'data' => [],
            'message' => 'Food deleted successfully',
            'success' => true
        ]);
    }
}
