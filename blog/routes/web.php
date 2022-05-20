<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\fileExists;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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

Route::get('/', function () {

    $posts = Post::all();


    return view('posts', [
        'posts' => $posts
    ]);
});


/*
Route::get('/posts/{post}', function ($slug) {
    $path = "../resources/posts/{$slug}.html";

   // ddd($path);

    if(! file_exists($path)) {
        return redirect("/");
        //dd("file nix da");
    }

    $post = cache()->remember("id_posts.{$slug}", 5, function() use ($path){
        return file_get_contents($path);
    });

    // $post = file_get_contents($path);

   

    return view('post', [
        'post' => $post
    ]);
    
})->where('post','[A-z_\-]+');
*/



// find a post by a slug and pass it to a view called "post"
Route::get('/posts/{post}', function ($slug) {

    $post = Post::findOrFail($slug);

    return view('post', [
        'post' => $post
    ]);


});
