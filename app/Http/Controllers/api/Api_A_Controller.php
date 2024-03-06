<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Api_A_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response_api_a = [
            [
                "nome_api_a" => "jhonattan api_a",
                "cpf_api_a" => "136.125.999-09",
                "email_api_a" => "jhonattan@gmail.com",
            ],
            [
                "nome_api_a" => "jhonattan api_a",
                "cpf_api_a" => "136.125.999-09",
                "email_api_a" => "jhonattan@gmail.com",
            ],
        ];
        return response()->json($response_api_a, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nome_api_a" => "required",
            "cpf_api_a" => "required",
            "email_api_a" => "required",
        ]);

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response_api_a = [
            "nome_api_a" => "jhonattan api_a",
            "cpf_api_a" => "136.125.999-09",
            "email_api_a" => "jhonattan@gmail.com",
        ];
        return response()->json($response_api_a, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
