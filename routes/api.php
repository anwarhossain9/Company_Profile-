<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/about-info',[ApiController::class,'getAboutInfo']);

Route::get('/asset-info',[ApiController::class,'getAssetInfo']);


Route::get('/banner-info',[ApiController::class,'getBannerInfo']);

Route::get('/contact-info',[ApiController::class,'getContactInfo']);

Route::get('/course-category-info',[ApiController::class,'getCourseCategoryInfo']);

Route::get('/courses/category-wise', [ApiController::class, 'categoryWiseCourses']);



Route::get('/course-info',[ApiController::class,'getCourseInfo']);

Route::get('/logo-info',[ApiController::class,'getLogoInfo']);

Route::get('/partner-info',[ApiController::class,'getPartnerInfo']);

Route::get('/student-review-info',[ApiController::class,'getStudentReviewInfo']);

Route::get('/team-member-info',[ApiController::class,'getTeamMemberInfo']);

Route::get('/rpl-info',[ApiController::class,'getRplInfo']);

Route::get('/statistic-info',[ApiController::class,'getStatisticInfo']);

Route::get('/courses/by-type', [ApiController::class, 'getCoursesByType']);

Route::get('/gallery-info',[ApiController::class,'getGalleryInfo']);

Route::get('/gallery-category-info',[ApiController::class,'getGalleryCategoryInfo']);

Route::get('/gallaries/category-wise', [ApiController::class, 'categoryWiseGalleries']);

Route::get('/assets/category-wise', [ApiController::class, 'categoryWiseAssets']);


Route::get('/asset-category-info',[ApiController::class,'getAssetCategoryInfo']);

Route::get('/service-category-info',[ApiController::class,'getServiceCategoryInfo']);

Route::get('/services/category-wise', [ApiController::class, 'categoryWiseServices']);

Route::post('/visitor', [ApiController::class, 'store']);

Route::get('/visitor/count', [ApiController::class, 'count']);









