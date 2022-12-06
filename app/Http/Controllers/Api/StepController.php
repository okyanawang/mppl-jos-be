<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StepResource;
use App\Models\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $steps = Step::latest()->get();
        return response()->json([
            'data' => StepResource::collection($steps),
            'message' => 'Fetch all steps',
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
        // $steps = Step::latest()->get();

        $items = DB::table('steps')
                     ->where('recipe_id', $id)
                     ->get();

        return response()->json([
            'data' => StepResource::collection($items),
            'message' => 'Fetch all steps by recipe id',
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
            'step' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $step = Step::create([
            'recipe_id' => $request->get('recipe_id'),
            'step' => $request->get('step')
        ]);

        return response()->json([
            'data' => new StepResource($step),
            'message' => 'Step added successfully.',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Step $step)
    {
        return response()->json([
            'data' => new StepResource($step),
            'message' => 'Data step found',
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Step $step)
    {
        $validator = Validator::make($request->all(), [
            'recipe_id' => 'required|integer|',
            'step' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $step->update([
            'recipe_id' => $request->get('recipe_id'),
            'step' => $request->get('step')
        ]);

        return response()->json([
            'data' => new StepResource($step),
            'message' => 'Step updated successfully',
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Step $step)
    {
        $step->delete();

        return response()->json([
            'data' => [],
            'message' => 'Step deleted successfully',
            'success' => true
        ]);
    }
}
