<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function getIndex()
    {
        $posts = [
            0 => array(
                'image' => 'http://placehold.it/700x300',
                'title' => 'Post1',
                'subtitle' => 'Subtitle P1',
                'description' => 'Texto do post1',
            ),
            1 => array(
                'image' => 'http://placehold.it/700x300',
                'title' => 'Post2',
                'subtitle' => 'Subtitle P2',
                'description' => 'Texto do post2',
            ),
            2 => array(
                'image' => 'http://placehold.it/700x300',
                'title' => 'Post3',
                'subtitle' => 'Subtitle P3',
                'description' => 'Texto do post3',
            ),
        ];

        return view('site.index', compact('posts'));
    }

}
