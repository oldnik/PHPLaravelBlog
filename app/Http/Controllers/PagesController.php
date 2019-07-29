<?php

namespace App\Http\Controllers;


use App\Post;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PagesController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {

        $first = 'Marcin';
        $last = 'Pudło';

        $fullname = $first . " " . $last;
        $email = 'marcinpudlo95@gmail.com';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

    	return view('pages.about')->withData($data);
    }

    public function getContact() {
    	return view('pages.contact');
    }
}
