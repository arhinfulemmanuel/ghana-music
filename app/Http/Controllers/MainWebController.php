<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use Response;


use App\Post;
use App\Ads;
use App\AdComment;
use App\PostComment;

class MainWebController extends Controller
{
    //
    public function index(){
        $ads = Ads::orderBy('created_at', 'DESC')->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(9);
        $trendings = Post::orderBy('downloads', 'DESC')->get();
        return view('blog.welcome', [
            'ads'=> $ads,
            'posts'=>$posts,
            'trendings'=>$trendings
        ]);
    }

    public function search(Request $request){

    
            $value = $request->input('search');
            $result = Post::where('title', 'LIKE', '%'.$value.'%')->orderBy('created_at', 'DESC')->get();

            return view('blog.search', ['results'=>$result]);
            //$result = Post::orderBy('id', 'DESC')-get();
        
    }

    public function show_ad($id, $title){

        $ad = Ads::whereIdAndTitle($id, $title)->first();

        views($ad)->record();

        if(!empty($ad)){
            return view('blog.show_ad', ['ad'=>$ad]);
        }
        else {
            return abort(404);
        }
    }

        public function show_post($id, $title){

        $post = Post::whereIdAndTitle($id, $title)->first();
        if($post){
            views($post)->record();
        }
        else {
            return abort(404);
        }
        
        
        //'you may also like' logig
        $others = Post::where('title', 'LIKE', '%'.$title.'%')->where('id', '!=', $id)->orderBy('created_at', 'DESC')->get()->take(4);

        if(!empty($post)){
            return view('blog.show_post', [
                'post'=>$post,
                'others'=>$others
            ]);
        }
        else {
            return abort(404);
        }
        
    }

    public function download($id){
        $ad = Ads::find($id);
        $downloads = $ad->downloads;
        $UpdatedDownloads = $downloads+1;
        $ad->downloads = $UpdatedDownloads;
        $ad->save();

        return response()->download(public_path($ad->audio));

        //return Response::download(URL::to($ad->audio));
        //return redirect();
        
    }

    public function saveComment(Request $request, $id){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'body'=>'required'
        ]);

        $comment = new AdComment;
        
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->body = $request->input('body');
        $comment->ads_id = $id;

        $comment->save();
        return redirect()->back();
    }


    public function save_post_comment(Request $request, $id){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'body'=>'required'
        ]);

        $comment = new PostComment;
        
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->body = $request->input('body');
        $comment->post_id = $id;

        $comment->save();
        return redirect()->back();
    }



    public function downloadPost($id){
        $post = Post::find($id);
        $downloads = $post->downloads;
        $UpdatedDownloads = $downloads+1;
        $post->downloads = $UpdatedDownloads;
        $post->save();

        return response()->download(public_path($post->audio));

        //return Response::download(URL::to($ad->audio));
        //return redirect();
        
    }

    public function category($cat_name){
        switch ($cat_name) {
            case 'Hiplife':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Hiplife Category']);
                break;

            case 'Gospel':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Gosple Category']);
                break;

            case 'Highlife':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Highlife Category']);
                break;

            case 'Dancehall':
                #code
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Dancehall Category']);
                break;

            case 'Hiphop':
                #code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Hiphop Category']);
                break;

            case 'Shatta Wale':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Musics by Shatta Wale']);
                break;

            case 'Sarkodie':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Musics by Sarkodie']);
                break;

            case 'Stone Bwoy':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Musics by Stone Bwoy']);
                break;

            case 'Ghana':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Ghanaian Musics']);
                break;

            case 'Nigeria':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Nigerian Musics']);
                break;

            case 'Jamaica':
                # code...
                $posts = Post::where('categories', 'LIKE','%'.$cat_name.'%')->paginate(9);
                return view('blog.category', ['posts'=>$posts, 'title'=>'Jamaican Musics']);
                break;
            
            default:
                # code...
                return abort(404);
                break;
        }
    }

    public function services(){
        return view('blog.services');
    }

}
