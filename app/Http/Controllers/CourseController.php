<?php

namespace App\Http\Controllers;

use App\Course;
use App\Reaction;
use App\Services\TagsAi;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * main endpoint
     */
    public function index(Request $request)
    {
        $course = new Course();
        $course->courseName = $request->courseName;
        $course->courseSubname = $request->courseSubname;
        $course->level = $request->level;
        $course->link = $request->link;
        $course->save();
        TagsAi::getCourseTags($course->id, $course->courseName);
        TagsAi::getMainTag($course->id, $course->courseSubname);
        if (!empty($request->reaction)) {
            $reactionReq = $request->reaction;
            $reaction = new Reaction();
            $reaction->complexity = $reactionReq['complexity'];
            $reaction->feedback = $reactionReq['complexity'];
            $reaction->companyId = $reactionReq['complexity'];
            $reaction->save();
        }


        return ['message'=> 'Если вас интересуют модульные тесты, то наверное вы хотели бы пройти курс по <a href="#">PHPUnit </a>. Или вам интереснее курс <a href="#">по функциональным тестам</a>?'];
    }

    /**
     *
     */
    public function audio2text(Request $request)
    {
        //
    }

    public function getCourseTags(){

    }

}
