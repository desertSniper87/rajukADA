
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/application', function()
{
	return View::make('application');
});


Route::get('/complaint', function()
{
	return View::make('complaint');
});

Route::get('/hello', function()
{
	return View::make('hello');
});

Route::get('/message', function()
{
	return View::make('message');
});

Route::get('/landUsageClearance', function()
{
    return View::make('landUsageClearance');
});

Route::post('/land_usage_clearance_action', 'HomeController@show_land_usage_clearance_action');

Route::get('/buildingPermit', function()
{
    return View::make('buildingPermit');
});

Route::post('/building_permit_action', 'HomeController@show_building_permit_action');

Route::get('/employee/login', function()
{
    return View::make('/employee/login');
});

Route::get('user/login', 'HomeController@show_login');

//Route::get('/sign_up', 'HomeController@show_sign_up');
Route::get ('/sign_up', function(){
	return View::make('sign_up');
});

Route::get ('user/sign_up', function(){
    return View::make('user/sign_up');
});


/*Route::get ('/sign_up_action', function(){
	return View::make('sign_up_action');
});*/


Route::post('/sign_up_action', 'HomeController@show_sign_up_action');

Route::post('/user/profile', 'HomeController@show_user_profile');

Route::any("/login", [ 	
	"as" => "user/login",
	"uses" => "UserController@login"
]);

Route::any ("/profile", [
	"as" => "user/profile",
	"uses" => "UserController@profile"
	]);

Route::any("/request", [
	"as" => "user/request",
	"uses" => "UserController@request"
	]);


Route::group(["before" => "guest"], function()
{
    if (Schema::hasTable('resource'))
    {
        $resources = Resource::where("secure", false)->get();
    
        foreach ($resources as $resource)
        {
            Route::any($resource->pattern, [
                "as"   => $resource->name,
                "uses" => $resource->target
            ]);
        }
    }
});

Route::group(["before" => "auth"], function()
{
    if (Schema::hasTable('resource'))
    {
        $resources = Resource::where("secure", true)->get();
    
        foreach ($resources as $resource)
        {
            Route::any($resource->pattern, [
                "as"   => $resource->name,
                "uses" => $resource->target
            ]);
        }
    }
});
