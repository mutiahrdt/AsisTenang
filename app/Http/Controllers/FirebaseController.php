<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = app('firebase');
        $database = $firebase->getDatabase();

        // Contoh: Mendapatkan data dari Firebase
        $reference = $database->getReference('path/to/data');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();

        return response()->json($value);
    }

    public function store(Request $request)
    {
        $firebase = app('firebase');
        $database = $firebase->getDatabase();

        // Contoh: Menyimpan data ke Firebase
        $reference = $database->getReference('path/to/data');
        $reference->set($request->all());

        return response()->json(['message' => 'Data has been saved']);
    }
}
