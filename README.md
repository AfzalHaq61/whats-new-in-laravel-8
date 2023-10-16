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



