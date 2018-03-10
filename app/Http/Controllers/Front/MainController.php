<?php

namespace TechZadeh\Http\Controllers\Front;

use Illuminate\Http\Request;
use TechZadeh\Http\Controllers\Controller;
use TechZadeh\Post;
use TechZadeh\User;
use TechZadeh\Category;
use Carbon\Carbon;

class MainController extends Controller
{
    /**
     * Home page
     */
    public function home() {

        $all_posts = Post::orderBy('id', 'desc')->get();

        foreach( $all_posts as $post ){
            // Get Author
            $author = User::where('id', $post->author_id)->first();
            $post->author = $author->name;

            // Get Category
            $category = Category::where('id', $post->category_id)->first();
            $post->category = $category->name;

            // Convert timestamp to date
            $current = Carbon::now()->addHours(4); // Current date and time UTC+4
            $date      = $post->created_at; // Post's creation date and time

            // If post created more than 24 hours ago
            if (($date->diffInDays($current)) >= 1){
                $post->date = date("j F Y ", strtotime($date));
            }
            // If post created between 1 and 24 hours ago
            elseif (($date->diffInHours($current)) >= 1){
                $hour = $date->diffInHours($current);
                $post->date = $hour.' hours ago';
            }
            // If post created less than 1 hour
            elseif (($date->diffInMinutes($current)) < 60){
                $minute = $date->diffInMinutes($current);
                $post->date = $minute.' minutes ago';
            }
        }

        // Getting count
        $post_count = Post::count(); // Posts row count
        $latest_post_count = 3; // Skip first n rows
        $limit = $post_count - $latest_post_count; // The limit

        // Latest posts for slide
        $latest_posts = $all_posts->take($latest_post_count);

        // All posts without slide posts
        $posts = $all_posts->slice($latest_post_count)->take($limit);

        return view('front.home')->with(compact('posts', 'latest_posts'));
    }

    /**
     * Show the post.
     */
    public function showPost($id) {
        $post = Post::where('id', $id)->first();

        // Get Author
        $author = User::where('id', $post->author_id)->first();
        $post->author = $author->name;

        // Get Category
        $category = Category::where('id', $post->category_id)->first();
        $post->category = $category->name;

        // Convert timestamp to date
        $current = Carbon::now()->addHours(4); // Current date and time UTC+4
        $date      = $post->created_at; // Post's creation date and time

        // If post created more than 24 hours ago
        if (($date->diffInDays($current)) >= 1){
            $post->date = date("j F Y ", strtotime($date));
        }
        // If post created between 1 and 24 hours ago
        elseif (($date->diffInHours($current)) >= 1){
            $hour = $date->diffInHours($current);
            $post->date = $hour.' hours ago';
        }
        // If post created less than 1 hour
        elseif (($date->diffInMinutes($current)) < 60){
            $minute = $date->diffInMinutes($current);
            $post->date = $minute.' minutes ago';
        }

        // Suggested posts
        $suggested = Post::where('category_id', $post->category_id)->where('id', '!=', $id)->inRandomOrder()->take(3)->get();


        return view('front.single-post')->with(compact('post', 'suggested'));
    }

    /**
     * Categories list
     */
    public function categories() {
        echo "works";
    }

    /**
     * Show the posts of specific category
     */
    public function showCategory($id) {
        echo "works".$id;
    }

    /**
     * Contact
     */
    public function contact() {
        return view('front.contact');
    }

    /**
     * About
     */
    public function about() {
        return view('front.about');
    }
}
