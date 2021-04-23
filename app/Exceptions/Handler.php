<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request,$exception){
        if($exception instanceof ModelNotFoundException && $request->wantsJson()){
            return response()->json(
                ['message'=> 'Not Found!'],
                Response::HTTP_NOT_FOUND
            );
        }
    }    
}
