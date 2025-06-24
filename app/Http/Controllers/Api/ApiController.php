<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Asset;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Logo;
use App\Models\Partner;
use App\Models\StudentReview;
use App\Models\TeamMember;


class ApiController extends Controller
{
    public function getAboutInfo()
{
    $abouts = About::all();

    $cleanedAbouts = $abouts->map(function($item) {
        return [
            'company_dream' => strip_tags($item->company_dream,'<b><i>'),
      
        ];
    });

    return response()->json($cleanedAbouts);
}
}
