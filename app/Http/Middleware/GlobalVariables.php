<?php

namespace App\Http\Middleware;

use App\Models\ResourceType;
use App\Models\Subject;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GlobalVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $g_resourceTypes = ResourceType::all();
        $g_instructionals = ['syllabus', 'exams', 'assignments', 'activities', 'quizzes'];
        $g_fileLibraries = json_decode(json_encode(
            array(
                ['name' => 'documents', 'icon' => 'fa fa-file-alt'],
                ['name' => 'images', 'icon' => 'far fa-image'],
                ['name' => 'videos', 'icon' => 'fa fa-video'],
                ['name' => 'audios', 'icon' => 'fa fa-volume-up'],
                ['name' => 'zips', 'icon' => 'fa fa-box-open']
            )
        ));

        View::share([
            'g_resourceTypes' => $g_resourceTypes,
            'g_fileLibraries' => $g_fileLibraries,
            'g_instructionals' => $g_instructionals
        ]);

        return $next($request);
    }
}
