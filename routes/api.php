<?php

use Illuminate\Http\Request;
use App\restaurant;
use App\address;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('/?', function(){
//  return view('welcome');
//} );

  Route::namespace('Api')->group(function() {
    //Route::get('/restaurants' , 'restaurantController@index');
    Route::get('/restaurantarea={areas}' , function($areas){
      $ids= DB::table('address')->where('address.area',$areas)->pluck('id');
      $address=DB::table('address')->where('address.area',$areas)->get();
      $restaurant=DB::table('restaurant')->wherein('restaurant.addressid',$ids)->get();
      $categories=DB::table('category')->get();
      $cc=count($categories);
      $counter= count($ids);
      $a= $areas;
     return view('restaurant' , compact('restaurant','address','a','counter','categories','cc')) ;
    });
    route::get('/restaurantarea={areas}/category={category}' , function($areas,$category){
      $array=explode('&' ,$category);
      $ids= DB::table('address')->where('address.area',$areas)->pluck('id');
      $address=DB::table('address')->where('address.area',$areas)->get();
      $categories=DB::table('category')->wherein('category.title',$array)->pluck('id');
      $restaurantids=DB::table('restaurant_category')->wherein('restaurant_category.categoryid',$categories)->pluck('restaurantid');
      $restaurant=DB::table('restaurant')->wherein('restaurant.addressid',$ids)->wherein('restaurant.id',$restaurantids)->get();
      $counter= count($ids);
      $a= $areas;
     return view('category' , compact('restaurant','address','a','counter')) ;
    });
    route::get('/restaurant/{title}' , function($title){

      $restaurant=DB::table('restaurant')->where('restaurant.title',$title)->get();
      $ids=DB::table('restaurant')->where('restaurant.title',$title)->pluck('id');
      $addressids=DB::table('restaurant')->where('restaurant.title',$title)->pluck('addressid');
      $categoryid=DB::table('restaurant_category')->where('restaurant_category.restaurantid',$ids)->pluck('categoryid');
      $categories=DB::table('category')->wherein('category.id',$categoryid)->get();
      $address=DB::table('address')->wherein('address.id',$addressids)->get();
      $foods=DB::table('food')->wherein('restaurantid',$ids)->get();
      $comments=DB::table('comment')->wherein('comment.restaurantid',$ids)->get();
     return view('menu' , compact('restaurant','categories','address','foods','comments')) ;
    });
    route::get('/restaurant/{title}/comments' , function($title){

      $ids=DB::table('restaurant')->where('restaurant.title',$title)->pluck('id');
      $comments=DB::table('comment')->wherein('comment.restaurantid',$ids)->latest()->get();

     return response()->json($comments);
    });

    route::post('/restaurant/{title}/comments' ,
    function(Request $request,$title){
      $ids=DB::table('restaurant')->where('restaurant.title',$title)->pluck('id');
      DB::table('comment')->updateOrInsert(
        ['restaurantid' => $ids[0],'author' => $request->author, 'quality' => $request->quality,'deliverytime' => $request->deliverytime,'text'=>$request->text]
    );
     return $ids;
    });
    route::post('/makerestaurant/{title}' ,
    function(Request $request,$title){
      $addressid=DB::table('address')->insertGetId(
        ['city' => $request->city,'cityf' => $request->cityf, 'area' => $request->area,'addressLine' => $request->addressLine]
    );
      $restaurantid=DB::table('restaurant')->insertGetId(
        ['name' => $request->name, 'title' => $request->title,'logo' => $request->logo,'openingtime'=>$request->openingtime
        ,'closingtime'=>$request->closingtime,'addressid'=>$addressid,'foods'=>$request->menu]
    );
    $foods=explode(',' ,$request->menu);
    $prices=explode(',' ,$request->price);
    $descriptions=explode(',' ,$request->description);
    $foodsets=explode(',' ,$request->foodset);
    $counters= count($foods);
    for ( $i = 0 ; $i < $counters; $i++) {
      DB::table('food')->updateOrInsert(
        ['restaurantid' => $restaurantid ,'name' => $foods[$i], 'price' => $prices[$i],
        'description' => $descriptions[$i],'foodset'=>$foodsets[$i] ]);
    }
    $categoryarray=explode(',' ,$request->category);
    foreach ($categoryarray as $key ) {
      $c=DB::table('category')->where('category.title',$key)->pluck('id');
      DB::table('restaurant_category')->updateOrInsert(
        ['restaurantid' => $restaurantid,'categoryid' => $c[0] ]);
    }

     return 'done';
    });
});
