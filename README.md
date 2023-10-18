What's new in laravel 8

1-first video (Preparing for Laravel 8)
new updates in laravel installers and also have a shortcut to installl jetstream with installer

2-Second Video (The New Models Directory)
laravel 7 have no model directory in app folder while laravel 8 have its own model directory in app folder

3-Third Video Squash a Massive Migrations Folder
if we have big projects and a lot of migrations so run this command
php artisan schema:dump
it will create a schema folder in database and store all your migrations
php artisan schema:dump --prune
it will delete all the migrations and store it in schema file
whwn you want to migrate your database first it will look into shema folder collect all you migrations and the check the migrations if there is any will run that

4-Forth Video (Class-Based Model Factories)

factory in laravel 7 were not classes its a funciton and you can call it by command
factory('App\User')->make();

but in laracel 8 it is a class and a trait is present by defualt in models and you can call it by command
App\Models\User::factory()->craete();

to make three data
App\Models\User::factory()->count(3)->make();

make this function in factory
public function admin() {
        return $this->state([
            'admin' => true
        ]);
    }

    public function subscribe() {
        return $this->state([
            'is_active' => true
        ]);
    }

and you can call it by this commands
App\Models\User::factory()->admin()->make();
App\Models\User::factory()->subscribe()->make();

by default it will false but when you make factory with admin or subscribe then it will call it

Videp 5 (Model Factory Relationships)

To use two models at a time
use App\Models\{User,Post}

when you want to create a relations row
User::factory()->has(Post::factory()->count(5))->create()

shortcut
User::factory()->hasPosts(5)->create()

i have created one user and in relation i used 5 post with it

when you want to create parent relation data with child
Post::factory()->for(User::factory())->count(5)->create()

shortcut
Post::factory()->forUser->count(5)->create()

i have created 5 post with 1 parent of it

in it has is used for hasOne, hasMany relation and for is used for belonging

6-Video (Maintenance Mode Secrets)

php artisan down
use for down the server for maintanance

php artisan up
use for up the server

php artisan down --secret=afzal
if you want to down the server but you whitelist youself so use this command

http://127.0.0.1:8000/
if you use this link it will show the server down

http://127.0.0.1:8000/afzal
if you use this secret key which is store in cookies it will give access then

if we install the composer then it can break the maintance view thats its important to render the view

php artisan down --render='maintainance'
if you want to render you own error then you can do it like this.
make the view in view folder

php artisan down --render='errors::503'
if you want by default one so use like this

php artisan vendor:publish
you can publish laravel errors and make a full controll on it

7-video (Cleaner Closure-Based Event Listeners)
how to make events route and create new event and lsiten it in the events route and then queue it in closure but i didn't get it

commnad of making event
php artisan make:event GiftCertificatePurchased

8-video (Wormholes)
some thing in phptest but i dont have expertie in tests
$this->travel(-1)->month
this will move forword you

9-Video (Improved Rate Limiting)

YOu can limit route accessing like the user can inly access some routes some limit per time
by default the limit is apply on api routes 60 per minute
you can see it in kernal and route serverce provider

i have applied throttle middelware which have name download on this route
Route::get('download', function() {
    return 'Some file download()';
})->middleware('throttle:download');

in route service provide in boot method i have apply my logic on download limit throttle 3 per minute
RateLimiter::for('download', function () {
            return Limit::perMinute(3);
        });
        
Laracast Download logic
RateLimiter::for('download', function (Request $request) {
    return $request->user()->isForever() ? Limit::none() : Limit::perMinute(3);
});






