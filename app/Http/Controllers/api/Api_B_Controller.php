<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Api_B_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response_api_b = [
            [
                "nome_api_b" => "jhonattan api_b",
                "cpf_api_b" => "136.125.999-09",
                "email_api_b" => "jhonattan@gmail.com",
            ],
            [
                "nome_api_b" => "jhonattan api_b",
                "cpf_api_b" => "136.125.999-09",
                "email_api_b" => "jhonattan@gmail.com",
            ],
        ];
        return response()->json($response_api_b, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nome_api_b" => "required",
            "cpf_api_b" => "required",
            "email_api_b" => "required",
        ]);

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response_api_b = [
            "nome_api_b" => "jhonattan api_b",
            "cpf_api_b" => "136.125.999-09",
            "email_api_b" => "jhonattan@gmail.com",
        ];
        return response()->json($response_api_b, 200);
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
