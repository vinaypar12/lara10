<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadAvatarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    //
    public function upload(UploadAvatarRequest $request){
        
        // dd(Auth()->user());
        // $path = $request->file('avatar')->store('Avatars','public');
        $path = Storage::disk('public')->put('avatars',$request->file('avatar'));
        if($oldAvatar = $request->user()->avatar){
            Storage::disk('public')->delete($oldAvatar);
        }
        (Auth()->user()->update(['avatar' =>$path]));
        return redirect(route('profile.edit'))->with('message','Avatar Uploaded');
    }
}
