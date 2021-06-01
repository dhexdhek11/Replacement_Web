<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table= 'timetables';

    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['timetable_id', 'staff_id'];
    public $timestamps = false;

    public function class()
    {
        return $this->hasOne(Timetable::class);

    }


}
