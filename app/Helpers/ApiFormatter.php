<?php 
namespace App\Helpers;

class ApiFormatter{
    public static function Success($message = "Success", $status=200, $data=null)  {
        $resp = [];
        $resp["message"] = $message;
        $resp["status"] = $status;
        ($data == null) ? '' : $resp["data"] = $data;
        return response()->json($resp);
    }
    public static function Fail($message = "Failed", $status=400)  {
        $resp = [];
        $resp["message"] = $message;
        $resp["status"] = $status;
        return response()->json($resp);
    }
}
?>