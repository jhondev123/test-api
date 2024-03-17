<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Api_D_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $response_api_d = [
        //     [
        //         "nome_api_d" => "jhonattan api_d",
        //         "cpf_api_d" => "136.125.999-09",
        //         "email_api_d" => "jhonattan@gmail.com",
        //     ],
        //     [
        //         "nome_api_d" => "jhonattan api_d",
        //         "cpf_api_d" => "136.125.999-09",
        //         "email_api_d" => "jhonattan@gmail.com",
        //     ],
        // ];

        $response_api_d = [
                "nome_api_d" => "jhonattan api_d",
                "cpf_api_d" => "136.125.999-09",
                "email_api_d" => "jhonattan@gmail.com",
        ];

        return response()->json($response_api_d, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nome_api_d" => "required",
            "cpf_api_d" => "required",
            "email_api_d" => "required",
        ]);

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response_api_d = [
            "nome_api_d" => "jhonattan api_d",
            "cpf_api_d" => "136.125.999-09",
            "email_api_d" => "jhonattan@gmail.com",
        ];
        return response()->json($response_api_d, 200);
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
