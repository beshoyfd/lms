<?php

namespace Modules\CourseSetting\Entities;

use Illuminate\Database\Eloquent\Model;


class CourseTimeTable extends Model
{

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
