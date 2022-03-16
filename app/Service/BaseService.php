<?php

namespace App\Service;

class BaseService
{
    public function sendResponse ($data,$msg,$code=200){
        $response=[
            "success"=>201,
            "data"=>$data,
            "message"=>$msg,
        ];
        return response()->json($response,$code);
    }

    public function sendError ($data,$msg,$code=404){
        $response=[
            "success"=>false,
            "data"=>$data,
            "message"=>$msg,
        ];
        return response()->json($response,$code);
    }
}