<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(Request $request) {
    $search = $request->search;
    // Only Search
    // return \App\Models\User::where('name', 'like', "%{$search}%")
    //     ->orWhere('email', 'like', "%{$search}%")
    //     ->get();

    // Multiselect
    return \App\Models\User::when($request->search, function($query, $search) {
        $query->where('name', 'like', "%{$search}%")
        ->orWhere('email', 'like', "%{$search}%");
    })
    ->when($request->selected, function($query, $selected) {
        $query->whereIn('id', $selected)->limit(10);
    })->get();
})->name('api.users.index');
