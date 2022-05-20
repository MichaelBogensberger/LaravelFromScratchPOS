<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{


    public $title;
    public $excerpt;
    public $slug;
    public $date;
    public $body;


    public function __construct($title, $excerpt,$date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }



    public static function find($slug) {

        //of all the blog posts, find the one with a slug that matches the one that was requested.
        return static::all()->firstWhere('slug', $slug);


    }




    public static function findOrFail($slug) {

        //of all the blog posts, find the one with a slug that matches the one that was requested.
        $post = static::find($slug);

        if(! $post) {
            throw new ModelNotFoundException();
        }

        return $post;



        /*
        $path = resource_path("posts/{$slug}.html");
     
         if(! file_exists($path)) {
             throw new ModelNotFoundException();
             //dd("file nix da");
         }
     
         $post = cache()->remember("id_posts.{$slug}", 5, function() use ($path){
             return file_get_contents($path);
         });
     
     
        return $post;
         */


    }






    /*
    public static function all() {

        $files = File::files(resource_path("posts/"));

        return array_map(function ($files) {
            return $files->getContents();
        }, $files);


    }

    */


    public static function all() {

        return cache()->rememberForever('posts.all', function() {

            $files = File::files(resource_path("posts"));
            return collect($files)
            ->map(function ($file) {
                return $document = YamlFrontMatter::parseFile($file);
            })
            ->map(function($document) {
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );

            })
            ->sortByDesc('date');

        });





    // das selbse wie oben
    /*
    array_map(function($file) {
        $document = YamlFrontMatter::parseFile($file);

        $posts[] =  new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);
    */


    // das selbe wie oben
    /*
    foreach($files as $file) {
        $document = YamlFrontMatter::parseFile($file);

        $posts[] =  new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );

    }
    */






    }





}