<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

////////////////////////////////////////////login////////////////////////////////

Route::get('/superadmin', function () {
    return view('login');
});

Route::post('login', 'LoginController@authenticate');


Route::middleware(['IsAdmin'])->group(function () {
    //

Route::get('logout', 'LoginController@logout');
Route::get('/index', 'AdminController@index');

////////////////////////////////Slider//////////////////////////
Route::get('/Slider', 'AdminController@add_Slider');
Route::post('/Save-Slider', 'AdminController@save_slider');
Route::get('/Slider-List', 'AdminController@slider_list');
Route::get('/s_delete/{slider_id}', 'AdminController@destory_slider');
Route::get('/edit_slider/{slider_id}', 'AdminController@show_slider');
Route::post('/update_slider', 'AdminController@update_slider');


/////////////////////////////Sub Slider////////////////////////////

Route::get('/Sub-Slider', 'AdminController@add_Sub_Slider');
Route::post('/Save-Sub-Slider', 'AdminController@save_sub_slider');
Route::get('/Sub-Slider-List', 'AdminController@sub_slider_list');
Route::get('/delete/{id}', 'AdminController@destory_sub_slider');
Route::get('/edit_sub_slider/{id}', 'AdminController@show_sub_slider');
Route::post('/update-sub-slider', 'AdminController@update_sub_slider');

/////////////////////////////Video////////////////////////////

Route::get('/Video', 'AdminController@video');
Route::post('/Save-Video', 'AdminController@save_video');
Route::get('/Video-List', 'AdminController@video_list');
Route::get('/v_delete/{id}', 'AdminController@destory_video');
Route::get('/edit_video/{id}', 'AdminController@show_video');
Route::post('/update-video', 'AdminController@update_video');

/////////////////////////////Success Stories////////////////////////////

Route::get('/Success-Stories', 'AdminController@success_stories');
Route::post('/Save-Success-Stories', 'AdminController@save_success_stories');
Route::get('/Success-Stories-List', 'AdminController@success_stories_list');
Route::get('/stories_delete/{id}', 'AdminController@destory_stories');
Route::get('/edit_stories/{id}', 'AdminController@show_stories');
Route::post('/Update-Stories', 'AdminController@update_stories');

/////////////////////////////Scheme////////////////////////////

Route::get('/Scheme', 'AdminController@scheme');
Route::post('/Save-Scheme', 'AdminController@save_scheme');
Route::get('/Scheme-List', 'AdminController@scheme_list');
Route::get('/scheme_delete/{id}', 'AdminController@destory_scheme');
Route::get('/edit_scheme/{id}', 'AdminController@show_scheme');
Route::post('/Update-Scheme', 'AdminController@update_scheme');

/////////////////////////////FAQ////////////////////////////

Route::get('/FAQ', 'AdminController@faq');
Route::post('/Save-FAQ', 'AdminController@save_faq');
Route::get('/FAQ-List', 'AdminController@faq_list');
Route::get('/faq_delete/{id}', 'AdminController@destory_faq');

//////////////////////////////////////////////Newsletter/////////////////////////
Route::get('/view-newsletter', 'AdminController@view_newsletter');

////////////////////////////////////////////////Business Model//////////////////////////

Route::get('/business-model', 'AdminController@business_model');
Route::post('/save-business-model', 'AdminController@save_business_model');

////view list

Route::get('/business-model-view', 'AdminController@business_view');

//////////////business model edit////////////////

Route::get('/business-model-edit/{code}', 'AdminController@business_show');
Route::post('/business-model-update', 'AdminController@update_business_model');

//////////////////////////ROI Analysis Delete///////////////////////////

Route::get('/business_delete/{business_id}', 'AdminController@delete_business');

//////////////////////////ROI Analysis Delete///////////////////////////

Route::get('/roi_delete/{id}', 'AdminController@delete_roi');

//////////////////////////Chapter Delete///////////////////////////

Route::get('/chapter_delete/{id}', 'AdminController@delete_chapter');




////////////////////////////////Add Unit Booklet///////////////////////

//////////////////////////////////////unit booklet//////////////

Route::get('/unitbooklet', 'AdminController@Unit_booklet');
Route::post('/save-unit-booklet', 'AdminController@save_unit_booklet');

//////////////////////////unit_booklet_list/view///////////////////

Route::get('/unit_booklet_list', 'AdminController@unit_book_list');

////////////////////unit_booklet_delete//////////////
Route::get('/unit-booklet-delete/{code}', 'AdminController@destroy_unitbooklet');


////////////////////////////////Add photo gallery////////////////////////

Route::post('/save-gallery', 'AdminController@save_gallery');


///////////////////subchapterbooklet////////////////////////////////

Route::get('/subchapterbooklet', 'AdminController@SubchapterBooklet');
Route::post('/subchapterbookletlist', 'AdminController@save_subchapter_booklet');


//////////////////////////////////view subchapterbooklet////////////////

Route::get('/subchapter-booklet-list', 'AdminController@subchapterbooklet_view');

////////////////////////////edit subchapterbooklet/////////////

Route::get('/subchapter_booklet_edit/{subid}', 'AdminController@edit_subchapter');

Route::post('/update-subchapter-booklet', 'AdminController@update_subchapter');
////////////////////////////delete subchapterbooklet/////////////

Route::get('/subchapterbookletdelete/{subid}', 'AdminController@destroy_subchapter');



/////////////////////////////BookletGallery/////////////////////////////////
Route::get('/Booklet-Gallery', 'AdminController@BookletGallery');
Route::post('/save-gallery-booklet', 'AdminController@save_gallery_booklet');


//////////////BookletGallery List//////////////////
Route::get('/BookletGallery_list', 'AdminController@bookletgallery_view');

////////////////////////update booklet gallery///////////////

Route::get('/Edit-Booklet-Gallery/{code}', 'AdminController@edit_gallery_booklet');
Route::post('/update-gallery-booklet', 'AdminController@update_gallery_booklet');




///////////////////////Gallery Bookletdelete///////////////////////////////
Route::get('/bookletgallerydelete/{code}','AdminController@bookletgallerydelete');

/////////////////////// Booklet Gallery delete image///////////////////////////////
Route::get('/booklet-image-delete/{g_id}','AdminController@booklet_image_delete');

////////////////////// chpaterbooklet///////////////////////////////////////////////
Route::get('/chapter_booklet', 'AdminController@chapter_booklet');
Route::post('/save-chapter', 'AdminController@save_chapter');
////delete booklet chapter//////////////////////////
Route::get('/chapter-booklet-delete/{cid}', 'AdminController@delete_chapter_booklet');

//////////////////////////chpater booklet list view/////////////////
Route::get('/chapter-list', 'AdminController@chapter_list');

//////////////////////////Chapter booklet edit///////////////////////////

Route::get('/chapter_booklet_edit/{code}', 'AdminController@edit_chapter');

 
////////////////////////////Main booklet///////////////////////////
Route::get('/booklet', 'AdminController@booklet');
Route::post('/save-booklet', 'AdminController@save_booklet');
////////////////////////////booklet list view/////////////////
Route::get('/booklet-list', 'AdminController@booklet_list');
////////////////////booklet_delete//////////////
Route::get('/booklet-delete/{code}', 'AdminController@destroy_booklet');

////////////////////////////////////////////////////////////////////////////////
/////////////////////Guide book part///////////////////////////////

/////////////////Guide sub chapter list view /////////////////////////////
Route::get('/guideBook-subchapter', 'AdminController@guide_subchapter');

/////////////////Guide  chapter list view /////////////////////////////
Route::get('/guideBook-chapter', 'AdminController@guide_chapter');

/////////////////Guide  Unit list view /////////////////////////////
Route::get('/guideBook-unit', 'AdminController@guide_unit');

/////////////////Guide  Gallery list view /////////////////////////////
Route::get('/guideBook-gallery', 'AdminController@guide_gallery');

/////////////////Guide  Book list view /////////////////////////////
Route::get('/guideBook-list', 'AdminController@guidebook_list');

///////////////////////////////////////////////////////////////
/////////////////Add Map admin section /////////////////////////////
Route::get('/map', 'AdminController@map');
Route::post('/save-map', 'AdminController@save_map');

////////////////////////map list view/////////////////

Route::get('/map-list', 'AdminController@map_list');

////////////////////////map delete/////////////////

Route::get('/map-delete/{mapid}', 'AdminController@delete_map');




///////////////////update booklet////////////////////////////////////
Route::get('/editbooklet/{code}', 'AdminController@editbooklet');
Route::post('/update-booklet', 'AdminController@updatebooklet');
////////////// edit Booklet Unit ///////////////////////////
Route::get('/editbookletunit/{code}', 'AdminController@editbookletunit');
Route::post('/update-unit', 'AdminController@updateunit');
////////////////////edit booklet gallery////////////////////////////
Route::get('/editgallerybooklet/{code}', 'AdminController@editgallerybooklet');
Route::post('/updategallery', 'AdminController@updategallery');

////////////////////////////////////////////fpoknowlwdge//////////////
Route::get('/fpoknowledge','AdminController@fpoknowledge');
Route::post('/save-fpoknowledge','AdminController@save_fpoknowledge');
Route::get('/fpoknowledgelist','AdminController@fpoknowledgelist');
Route::get('/fpoknowledge_delete/{serice_id}', 'AdminController@delete_fpoknowledge');
Route::get('/editfpoknowledge/{serice_id}', 'AdminController@editfpoknowledge');
Route::post('/updateknowledge', 'AdminController@updateknowledge');


});

//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////USER PANNEL//////////////////////////////////////////////////

Route::get('/', 'UserController@index');
Route::post('/save-newsletter', 'UserController@save_newsletter');

/////////////////////////////////business model///////////////////////////
Route::get('/Business_Model/{business_id}', 'UserController@business_model');
Route::get('/business-model-list', 'UserController@business_model_list');

/////////////////////////////////booklet model///////////////////////////
Route::get('/booklet-view', 'UserController@booklet_view');
Route::get('/Booklet_Model/{booklet_id}', 'UserController@booklet');

/////////////////////////////////FAQ///////////////////////////
Route::get('/faq', 'UserController@faq');

/////////////////////////////////Guide Book///////////////////////////
Route::get('/guidebook-list', 'UserController@guidebook_list');
Route::get('/guidebook/{booklet_id}', 'UserController@guidebook');

/////////////////////////////////Register FPO ///////////////////////////
Route::get('/register-fpo', 'UserController@register_fpo');
Route::post('/save-register-fpo', 'UserController@save_register_fpo');

///////////////////////////////////////////language////////////////////////////////
Route::get('change/lang', 'UserController@lang_change')->name('LangChange');

////////////////////////////////chapter list///////////////////////////

Route::post('/one-chapter-list', 'UserController@chapter_list');


/////////////////////////////////FPO Map of india ///////////////////////////
Route::get('/fpo-map', 'UserController@fpo_map');

/////////////////////////////////Success stories ///////////////////////////
Route::get('/success-stories', 'UserController@success_stories');

/////////////////////////////////government scheme ///////////////////////////
Route::get('/government-scheme', 'UserController@government_scheme');

/////////////////////////////////policy strategy///////////////////////////
Route::get('/policy-strategy', 'UserController@policy_strategy');

/////////////////////////////////Trainer Manual///////////////////////////
Route::get('/trainer-manual', 'UserController@trainer_manual');

/////////////////////////////////capacity assessment///////////////////////////
Route::get('/capacity-assessment', 'UserController@capacity_assessment');

/////////////////////////////////about us///////////////////////////
Route::get('/about-us', 'UserController@about');

/////////////////////////////////help center///////////////////////////
Route::get('/help-center', 'UserController@help_center');

/////////////////////////////////disclaimer///////////////////////////
Route::get('/disclaimer', 'UserController@disclaimer');

Route::get('/knowledge-series', 'UserController@knowledge_series');
Route::get('/knowledge-series-details/{serice_id}', 'UserController@knowledge_series_detail');


/////////////////////////////////thematic view///////////////////////////
Route::get('/thematic-view', 'UserController@thematic_view');
Route::get('/thematic-details/{booklet_id}', 'UserController@thematic_details');


////// Ajax Call ///////////

Route::get('/getsubchapter/{code}', 'AjaxController@getsubchapter');


Route::get('/thematic', 'AdminController@thematic_list');
Route::get('/add-thematic', 'AdminController@booklet');
Route::get('/editthematic/{code}', 'AdminController@editbooklet');
Route::get('/thematic-gallery', 'AdminController@thematic_gallery');
Route::get('/Edit-thematic-Gallery/{code}', 'AdminController@edit_gallery_booklet');
Route::get('/Add-Thematic-Gallery', 'AdminController@BookletGallery');
Route::get('/thematic-unit', 'AdminController@thematic_unit');







