<?php

namespace App\Http\Controllers\Api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe 1',
                'email' => 'john@example.com',
                'created_at' => '2024-04-10 08:00:00',
                'updated_at' => '2024-04-10 08:00:00',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith 2',
                'email' => 'jane@example.com',
                'created_at' => '2024-04-11 09:00:00',
                'updated_at' => '2024-04-11 09:00:00',
            ],
            // Thêm các người dùng khác nếu cần
        ];

        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
