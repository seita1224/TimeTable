<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classDay_table extends Model
{

    protected $table = "classDay";

    protected $fillabel = [
        "id","subject_Id","room_Id","class_Id","day","period"
    ];
    //hasMany設定
    public function subject()
    {
        return $this->belongsTo('App\subject_table','subject_Id');

    }
    public function class_()
    {
        return $this->belongsTo('App\class_table');

    }

    //hasMany設定
    public function room()
    {
        return $this->belongsTo('App\room_table','room_Id');
    }
}
