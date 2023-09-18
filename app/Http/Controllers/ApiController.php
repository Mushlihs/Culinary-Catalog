<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Comment;
use App\Models\Culinary;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Culinary_getall()
    {
        $res = Culinary::all();
        foreach ($res as $key => $val) {
            $rat = Comment::where("Culinary_id", "=", $val->id)->get()->avg("rating");
            $com = Comment::where("Culinary_id", "=", $val->id)->get();
            if (isset($rat)) {
                $val->rating = $rat;
            } else {
                $val->rating = 0;
            }
            $val->comment = $com;
        }
        return ApiFormatter::Success("Success", 200, $res);
    }
    public function Culinary_get_id($id)
    {
        $res = Culinary::find($id);
        if (isset($res)) {
            $res->rating = Comment::where("Culinary_id", "=", $res->id)->get()->avg("rating");
            $res->comment = Comment::where("Culinary_id", "=", $res->id)->get();
            return ApiFormatter::Success("Success", 200, $res);
        } else {
            return ApiFormatter::Fail("Culinary Data not found", 404);
        }
    }
    public function Culinary_add(Request $req)
    {
        $this->validate($req, [
            "photo_url" => "required|image",
            "title" => "required|string",
            "description" => "required|string"
        ]);
        $image = $req->file("photo_url");
        $image_url = time() . "." . $image->extension();
        Storage::putFileAs("public/image", $image, $image_url);
        $res = Culinary::create([
            "photo_url" => $image_url,
            "title" => $req->title,
            "description" => $req->description
        ]);
        return ApiFormatter::Success("Successfully add new Culinary", 200, $res);
    }

    public function Culinary_edit(Request $req, $id)
    {
        $this->validate($req, [
            "photo_url" => "required|image",
            "title" => "required|string",
            "description" => "required|string"
        ]);
        $res = Culinary::findorfail($id);
        $image = $req->file("photo_url");
        $image_url = time() . "." . $image->extension();
        Storage::putFileAs("public/image", $image, $image_url);
        $res->update([
            "photo_url" => $image_url,
            "title" => $req->title,
            "description" => $req->description
        ]);
        return ApiFormatter::Success("Successfully edited Culinary", 200, $res);
    }
    public function Culinary_delete($id)
    {
        $res = Culinary::findorfail($id);
        $res->delete();
        return ApiFormatter::Success("Successfully delete Culinary", 200);
    }
}
