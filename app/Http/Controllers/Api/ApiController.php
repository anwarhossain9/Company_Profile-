<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Asset;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\Logo;
use App\Models\Partner;
use App\Models\StudentReview;
use App\Models\TeamMember;
use App\Models\Rpl;


class ApiController extends Controller
{
    public function getAboutInfo()
{
    $abouts = About::all();

    $cleanedAbouts = $abouts->map(function($item) {

        return [
            'company_dream'        => strip_tags($item->company_dream,'<b><i>'),
            'image_related_company'=> $item->image_related_company ? asset($item->image_related_company) : null,
            'company_story'        => strip_tags($item->company_story,'<b><i>'),
            'story_related_image'  => $item->story_related_image ? asset($item->story_related_image) : null,
            'goal'                 => strip_tags($item->goal,'<b><i>'),
            'purpose'              => strip_tags($item->purpose,'<b><i>'),
            'mission'              => strip_tags($item->mission,'<b><i>'),
            'vission'              => strip_tags($item->vission,'<b><i>'),
            'ceo_image'            => $item->ceo_image ? asset($item->ceo_image) : null,
            'ceo_name'             => strip_tags($item->ceo_name,'<b><i>'),
            'ceo_designation'      => strip_tags($item->ceo_designation,'<b><i>'),
            'ceo_word'             => strip_tags($item->ceo_word,'<b><i>'),
            'director_image'       => $item->director_image ? asset($item->director_image) : null,
            'director_name'        => strip_tags($item->director_name,'<b><i>'),
            'director_designation' => strip_tags($item->director_designation,'<b><i>'),
            'director_word'        => strip_tags($item->director_word,'<b><i>'),
            'status'               => $item->status,
      
        ];
    });

    return response()->json($cleanedAbouts);
}


public function getAssetInfo()
{
    $assets = Asset::all();

    $cleanedAssets = $assets->map(function($item) {
        return [
             'occupation_name'    =>strip_tags($item-> occupation_name,'<b><i>'),
             'registration_link'  =>strip_tags($item->registration_link ,'<b><i>'),
             'benefits_conditions'=>strip_tags($item->benefits_conditions ,'<b><i>'),
             'necessary_documents'=>strip_tags($item->necessary_documents ,'<b><i>'),
             'status'             =>$item->status,
             'top_image'          =>$item->top_image ? asset($item->top_image) : null,     
      
        ];
    });

    return response()->json($cleanedAssets);
}

public function getBannerInfo()
{
    $banners = Banner::all();

    $cleanedBanners = $banners->map(function($item) {
        return [
            'banner_title'      => strip_tags($item->banner_title,'<b><i>'),
            'banner_image'      => $item->banner_image ? asset($item->banner_image) : null,
            'banner_description'=> strip_tags($item->banner_description,'<b><i>'),
            'status'            => $item->status,
      
        ];
    });

    return response()->json($cleanedBanners);
}

public function getContactInfo()
{
    $contacts = Contact::all();

    $cleanedContacts = $contacts->map(function($item) {
        return [
            'office_address'             => strip_tags($item->office_address,'<b><i>'),
            'phone_no'                   => strip_tags($item->phone_no,'<b><i>'),
            'contact_person_name'        => strip_tags($item->contact_person_name,'<b><i>'),
            'contact_person_designation' => strip_tags($item->contact_person_designation,'<b><i>'),
            'contact_time'               => strip_tags($item->contact_time,'<b><i>'),
            'email_link'                 => strip_tags($item->email_link,'<b><i>'),
            'facebook_link'              => strip_tags($item->facebook_link,'<b><i>'),
            'instagram_link'             => strip_tags($item->instagram_link,'<b><i>'),
            'linkedin_link'              => strip_tags($item->linkedin_link,'<b><i>'),
            'youtube_link'               => strip_tags($item->youtube_link,'<b><i>'),
            'twitter_link'               => strip_tags($item->twitter_link,'<b><i>'),
            'google_map_link'            => strip_tags($item->google_map_link,'<b><i>'),    
            'status'                     => $item->status,
      
        ];
    });

    return response()->json($cleanedContacts);
}

public function getCourseCategoryInfo()
{
    $courseCategories = CourseCategory::all();

    $cleanedcourseCategories = $courseCategories->map(function($item) {
        return [
             'course_category_name' => strip_tags($item->course_category_name,'<b><i>'),
             'status'               => $item->status,
      
        ];
    });

    return response()->json($cleanedcourseCategories);
}

public function categoryWiseCourses()
{
    $categories = CourseCategory::with('courses')->get();

    foreach ($categories as $category) {
        foreach ($category->courses as $course) {
            if ($course->course_image) {
                // Ensure there's no leading slash
                $cleanPath = ltrim($course->course_image, '/');
                $course->course_image = asset($cleanPath);
            } else {
                $course->course_image = asset('default/no-image.png');
            }
        }
    }

    return response()->json([
        'success' => true,
        'data' => $categories
    ]);
}


public function getCourseInfo()
{
    $courses = Course::all();

    $cleanedCourses = $courses->map(function($item) {
        return [
            'course_category_name'          => strip_tags($item->courseCategory->course_category_name,'<b><i>'),
            'course_type'                   => strip_tags($item->course_type,'<b><i>'),
            'batch_no'                      => strip_tags($item->batch_no,'<b><i>'),
            'course_name'                   => strip_tags($item->course_name,'<b><i>'),
            'course_image'                  => $item->course_image ? asset($item->course_image) : null,
            'starts_date'                   => strip_tags($item->starts_date,'<b><i>'),
            'deadline'                      => strip_tags($item->deadline,'<b><i>'),
            'duration'                      => strip_tags($item->duration,'<b><i>'),
            'class_per_week'                => strip_tags($item->class_per_week,'<b><i>'),
            'previous_price'                => strip_tags($item->previous_price,'<b><i>'),
            'current_price'                 => strip_tags($item->current_price,'<b><i>'),
            'total_class'                   => strip_tags($item->total_class,'<b><i>'),
            'total_hours'                   => strip_tags($item->total_hours,'<b><i>'),
            'available_seat'                => strip_tags($item->available_seat,'<b><i>'),
            'schedule'                      => strip_tags($item->schedule,'<b><i>'),
            'venue'                         => strip_tags($item->venue,'<b><i>'),
            'installment1_amount'           => strip_tags($item->installment1_amount,'<b><i>'),
            'installment2_amount'           => strip_tags($item->installment2_amount,'<b><i>'),
            'instructor_name'               => strip_tags($item->instructor_name,'<b><i>'),
            'instructor_designation'        => strip_tags($item->instructor_designation,'<b><i>'),
            'instructor_email_link'         => strip_tags($item->instructor_email_link,'<b><i>'),
            'instructor_facebook_link'      => strip_tags($item->instructor_facebook_link,'<b><i>'),
            'instructor_linkdin_link'       => strip_tags($item->instructor_linkdin_link,'<b><i>'),
            'instructor_twiter_link'        => strip_tags($item->instructor_twiter_link,'<b><i>'),
            'eligibility'                   => strip_tags($item->eligibility,'<b><i>'),
            'short_description'             => strip_tags($item->short_description,'<b><i>'),
            'long_description'              => strip_tags($item->long_description,'<b><i>'),
            'curriculum'                    => strip_tags($item->curriculum,'<b><i>'),
            'faqs'                          => strip_tags($item->faqs,'<b><i>'),
            'reason_of_choosing_this_course'=> strip_tags($item->reason_of_choosing_this_course,'<b><i>'),
            'job_sectors_title'             => strip_tags($item->job_sectors_title,'<b><i>'),
            'job_sectors_description'       => strip_tags($item->job_sectors_description,'<b><i>'),
            'status'                        => $item->status,
      
        ];
    });

    return response()->json($cleanedCourses);
}



public function getRplInfo()
{
    $rpls = Rpl::all();

    $cleanedRpls = $rpls->map(function($item) {
        return [
            'batch_no'                      => strip_tags($item->batch_no,'<b><i>'),
            'rpl_subject_name'              => strip_tags($item->rpl_subject_name,'<b><i>'),
            'rpl_image'                     => $item->rpl_image ? asset($item->rpl_image) : null,
            'starts_date'                   => strip_tags($item->starts_date,'<b><i>'),
            'deadline'                      => strip_tags($item->deadline,'<b><i>'),
            'duration'                      => strip_tags($item->duration,'<b><i>'),
            'class_per_week'                => strip_tags($item->class_per_week,'<b><i>'),
            'previous_price'                => strip_tags($item->previous_price,'<b><i>'),
            'current_price'                 => strip_tags($item->current_price,'<b><i>'),
            'total_class'                   => strip_tags($item->total_class,'<b><i>'),
            'total_hours'                   => strip_tags($item->total_hours,'<b><i>'),
            'available_seat'                => strip_tags($item->available_seat,'<b><i>'),
            'schedule'                      => strip_tags($item->schedule,'<b><i>'),
            'venue'                         => strip_tags($item->venue,'<b><i>'),
            'installment1_amount'           => strip_tags($item->installment1_amount,'<b><i>'),
            'installment2_amount'           => strip_tags($item->installment2_amount,'<b><i>'),
            'instructor_name'               => strip_tags($item->instructor_name,'<b><i>'),
            'instructor_designation'        => strip_tags($item->instructor_designation,'<b><i>'),
            'instructor_email_link'         => strip_tags($item->instructor_email_link,'<b><i>'),
            'instructor_facebook_link'      => strip_tags($item->instructor_facebook_link,'<b><i>'),
            'instructor_linkdin_link'       => strip_tags($item->instructor_linkdin_link,'<b><i>'),
            'instructor_twiter_link'        => strip_tags($item->instructor_twiter_link,'<b><i>'),
            'eligibility'                   => strip_tags($item->eligibility,'<b><i>'),
            'short_description'             => strip_tags($item->short_description,'<b><i>'),
            'long_description'              => strip_tags($item->long_description,'<b><i>'),
            'curriculum'                    => strip_tags($item->curriculum,'<b><i>'),
            'faqs'                          => strip_tags($item->faqs,'<b><i>'),
            'reason_of_choosing_this_rpl'   => strip_tags($item->reason_of_choosing_this_rpl,'<b><i>'),
            'job_sectors_title'             => strip_tags($item->job_sectors_title,'<b><i>'),
            'job_sectors_description'       => strip_tags($item->job_sectors_description,'<b><i>'),
            'status'                        => $item->status,
      
        ];
    });

    return response()->json($cleanedRpls);
}


public function getLogoInfo()
{
    $logos = Logo::all();

    $cleanedLogos = $logos->map(function($item) {
        return [
            'logo_image'=>$item->logo_image ? asset($item->logo_image) : null,
             'status'   => $item->status,
      
        ];
    });

    return response()->json($cleanedlogos);
}





public function getPartnerInfo()
{
    $partners = Partner::all();

    $cleanedPartners = $partners->map(function($item) {
        return [
            'partner_image'=>$item->partner_image ? asset($item->partner_image) : null,
            'status'       => $item->status,
      
        ];
    });

    return response()->json($cleanedPartners);
}

public function getStudentReviewInfo()
{
    $studentReviews = StudentReview::all();

    $cleanedStudentReviews = $studentReviews->map(function($item) {
        return [
             'company_dream' => strip_tags($item->company_dream,'<b><i>'),
             'image'         =>$item->image ? asset($item->image) : null,
             'name'          => strip_tags($item->name,'<b><i>'),
             'rate'          =>$item->rate,
             'review'        => strip_tags($item->review,'<b><i>'),
             'status'        => $item->status,
      
        ];
    });

    return response()->json($cleanedStudentReviews);
}

public function getTeamMemberInfo()
{
    $teamMembers = TeamMember::all();

    $cleanedTeamMembers = $teamMembers->map(function($item) {
        return [
            'company_dream'          => strip_tags($item->company_dream,'<b><i>'),
            'teammember_image'       =>$item->teammember_image ? asset($item->teammember_image) : null,
            'teammember_name'        => strip_tags($item->teammember_name,'<b><i>'),
            'teammember_designation' => strip_tags($item->teammember_designation,'<b><i>'),
            'status'                 => $item->status,
      
        ];
    });

    return response()->json($cleanedTeamMembers);
}


}
