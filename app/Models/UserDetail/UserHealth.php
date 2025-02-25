<?php

namespace App\Models\UserDetail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHealth extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function where_user_detail_uuid($user_detail_uuid){
        $data = UserHealth::where('user_detail_uuid', $user_detail_uuid)
        ->get()
        ->first();
        if(!empty($data)){
            return $data;
        }else{
            return $data = null;
        }

    }
}
