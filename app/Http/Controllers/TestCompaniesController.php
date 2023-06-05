<?php

namespace App\Http\Controllers;

use App\Models\testcompanies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TestCompaniesResource;

class TestCompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testcompanies = testcompanies::all();
        return response([ 'testcompanies' => 
        TestCompaniesResource::collection($testcompanies), 
        'message' => 'Successful'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(testcompanies $testcompanies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testcompanies $testcompanies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testcompanies $testcompanies)
    {
        //
    }
}
