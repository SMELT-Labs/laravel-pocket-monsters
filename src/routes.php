<?php


Route::get('/pocket/monster', function(){
    return response()->json([
        "message" => "hello pocket monster service provider"
    ]);
});
