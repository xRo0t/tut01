<?php

namespace App\Http\Controllers;

class UsersTableController extends Controller
{
    public function index()
    {
        $usrTable = [
            ['id' => 1, 'first_name' => 'John', 'last_name' => 'Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'first_name' => 'Jane', 'last_name' => 'Doe', 'email' => 'jane@example.com'],
            ['id' => 3, 'first_name' => 'Bob', 'last_name' => 'Smith', 'email' => 'bob@example.com'],
            ['id' => 4, 'first_name' => 'Alice', 'last_name' => 'Johnson', 'email' => 'alice@example.com'],
            ['id' => 5, 'first_name' => 'David', 'last_name' => 'Williams', 'email' => 'david@example.com'],
            ['id' => 6, 'first_name' => 'Emily', 'last_name' => 'Brown', 'email' => 'emily@example.com'],
            ['id' => 7, 'first_name' => 'Michael', 'last_name' => 'Davis', 'email' => 'Michael@example.com'],
            ['id' => 8, 'first_name' => 'Sarah', 'last_name' => 'Miller', 'email' =>'sarah@example.com'],
        ];
        return view(view: 'userTable.index', data: ['tableData' => $usrTable]); #view() is one of the global helper function. /xrt
    }
    public function show($a){

        $usrTable = [
            ['id' => 1, 'first_name' => 'John', 'last_name' => 'Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'first_name' => 'Jane', 'last_name' => 'Doe', 'email' => 'jane@example.com'],
            ['id' => 3, 'first_name' => 'Bob', 'last_name' => 'Smith', 'email' => 'bob@example.com'],
            ['id' => 4, 'first_name' => 'Alice', 'last_name' => 'Johnson', 'email' => 'alice@example.com'],
            ['id' => 5, 'first_name' => 'David', 'last_name' => 'Williams', 'email' => 'david@example.com'],
            ['id' => 6, 'first_name' => 'Emily', 'last_name' => 'Brown', 'email' => 'emily@example.com'],
            ['id' => 7, 'first_name' => 'Michael', 'last_name' => 'Davis', 'email' => 'Michael@example.com'],
            ['id' => 8, 'first_name' => 'Sarah', 'last_name' => 'Miller', 'email' =>'sarah@example.com'],
        ];
        return view(view:"profile.index",data: ['tableData' => $usrTable, 'urp'=>$a] );
    }
}

