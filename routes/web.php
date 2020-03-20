<?php
use App\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

 Route::get('/comment', function () {
     $comments=Comment::where('approve','1')->get();
    return view('front')->with('comments',$comments); 
});

Route::post('/comment', 'CommentsController@store');



Route::get('books', 'BookController@index');
Route::post('books/import', 'BookController@import');
Route::get('books/export', 'BookController@export');


Route::get('/homee','ShowhomeController@index')->name('homee');
Route::get('/form','ShowformController@index')->name('form');
Route::get('/success','ShowsuccessController@index')->name('success');
Route::get('/success/show/{id}','ShowsuccessController@show');
Route::get('/student','ShowstudentController@index')->name('student');
Route::get('/apprentice','ShowapprenticeController@index')->name('apprentice');
Route::get('/apprenticeimg','ShowapprenticeimgController@index')->name('apprentices');
Route::get('/category','ShowcategoryController@index')->name('category');
Route::get('/category/show/{id}','ShowcategoryController@show');
Route::get('/subject/show/{id}','ShowcategoryController@showdetail');
Route::get('/tact','PagesController@tact')->name('tact');
Route::get('/activities','ShowactivitiesController@index')->name('activities');
Route::get('/activities/show/{id}','ShowactivitiesController@show');
Route::get('/cooperative','ShowcooperativeController@index')->name('cooperative');
Route::get('/cooperativeimg','ShowcooperativeimgController@index')->name('cooperatives');
Route::get('/newsupdate','ShownewsupdateController@index')->name('newsupdate');
Route::get('/newsupdate/show/{id}','ShownewsupdateController@show');
Route::get('/location','ShowlocationController@index')->name('location');
Route::get('/location/show/{id}','ShowlocationController@show');
Route::get('/about','ShowaboutController@index')->name('about');
Route::get('/award','ShowawardController@index')->name('award');
Route::get('/location','ShowlocationController@index')->name('location');
Route::get('/bitcourse','ShowbitcourseController@index')->name('bitcourse');
Route::get('/mitcourse','ShowmitcourseController@index')->name('mitcourse');
Route::get('/award/show/{id}','ShowawardController@show');
Route::get('/coursegenaral','ShowcoursegenaralController@index')->name('coursegenaral');

Route::redirect('/home', '/homee');
Route::redirect('/', '/login');
Auth::routes();






Route::post('/toggle-approve', 'CommentsController@approval');

Route::get('/bcomment', function () {
    $comments=Comment::orderBy('created_at','desc')->get();
   return view('dashboard')->with('comments',$comments); 
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    Route::resource('/bheader','HeaderController')->name('index','bheader');
    Route::resource('/bslideshow','SlideshowController')->name('index','bslideshow');
    Route::resource('/bnewsupdate','NewsupdateController')->name('index','bnewsupdate');
    Route::resource('/babout','AboutController')->name('index','babout');
    Route::resource('/bactivities','ActivitiesController')->name('index','bactivities');
    Route::get('/bactivities/destroyimage/{id}','ActivitiesController@destroyImage');
    Route::resource('/bcategory','CategoryController')->name('index','bcategory');
    Route::resource('/bsubgroup','SubgroupController')->name('index','bsubgroup');
    Route::resource('/bsubject','SubjectController')->name('index','bsubject');
    Route::resource('/bbitcourse','BitcourseController')->name('index','bbitcourse');
    Route::resource('/bmitcourse','MitcourseController')->name('index','bmitcourse');
    Route::resource('/bposition','PositionController')->name('index','bposition');
    Route::resource('/bmembers','MemberController')->name('index','bmembers');
    Route::resource('/bform','FormController')->name('index','bform');
    Route::resource('/baward','AwardController')->name('index','baward');
    Route::resource('/bsuccess','SuccessController')->name('index','bsuccess');
    Route::resource('/bcooperative','CooperativeController')->name('index','bcooperative');
    Route::resource('/bapprentice','ApprenticeController')->name('index','bapprentice');
    Route::resource('/bstudentyear','StudentyearController')->name('index','bstudentyear');
    Route::resource('/blocation','LocationController')->name('index','blocation');
    Route::resource('/bstudent','StudentController')->name('index','bstudent');
    Route::resource('/bcoursegenaral','CoursegenaralController')->name('index','bcoursegenaral');
  


 
   
});
