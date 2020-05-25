<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
use App\Ads;
use App\Chart;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('admin.home');
    }

    public function addpost()
    {   
        return view('admin.addpost');
    }

        public function allpost()
    {   
        $posts = Post::all();
        return view('admin.allpost', ['posts' => $posts]);
    }

        public function statistics()
    {   
        return view('admin.statistics');
    }

        public function store(Request $request)
    {   
        $this->validate($request, [
            'title' => 'required',
            'note'  => 'required',
            'image' => 'required',
            'audio' => 'required'
        ]);
        
        $post = new Post;
        // $imagePath = Storage::putFile('public/images', $request->file('image')->getClientOriginalName());
        // $audioPath = Storage::putFile('public/audio', $request->file('audio')->getClientOriginalName());

        // $imageUrl = Storage::url($imagePath);
        // $image = Image::make(public_path("{$imageUrl}"))->fit(1000, 500);
        // $image->save();

        // $audioUrl = Storage::url($audioPath);


        //get file with extension name
            $imageNameWithExtension = $request->file('image')->getClientOriginalName();
            $audioNameWithExtension = $request->file('audio')->getClientOriginalName();
        //get just file name
            $imageName = pathinfo($imageNameWithExtension, PATHINFO_FILENAME);
            $audioName = pathinfo($audioNameWithExtension, PATHINFO_FILENAME);;
        //get just extension
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $audioExtension = $request->file('audio')->getClientOriginalExtension();
        //file name to store
            $imageNameToStore = $imageName.'_'.time().'.'.$imageExtension;
            $audioNameToStore = $audioName.'_'.time().'.'.$audioExtension;
        //upload file
            $imagePath = $request->file('image')->storeAs('public/images', $imageNameToStore);
            $audioPath = $request->file('audio')->storeAs('public/audio', $audioNameToStore);

        $imageUrl = Storage::url($imagePath);
        $audioUrl = Storage::url($audioPath);

        $post->title = $request->input('title');
        $post->note = $request->input('note');
        $post->categories = serialize($request->input('category'));
        $post->image = $imageUrl;
        $post->audio = $audioUrl;

        $post->save();

        return redirect('/admin')->with('success', 'Post published successfully..');
    }

        public function show($id)
    {   
        $post = Post::find($id);
        return view('admin.show', ['post'=>$post]);
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/admin')->with('success', 'Post deleted successfully..');
    }

    public function create_advert(){
        return view('admin.create_advert');
    }


    //store advert post
    public function store_advert(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'note'  => 'required',
            'image' => 'required',
            'audio' => 'required'
        ]);
        
        $post = new Ads;
        // $imagePath = Storage::putFile('public/images', $request->file('image'));
        // $audioPath = Storage::putFile('public/audio', $request->file('audio'));

        // $imageUrl = Storage::url($imagePath);
        // $image = Image::make(public_path("{$imageUrl}"))->fit(1000, 500);
        // $image->save();

        // $audioUrl = Storage::url($audioPath);


        //get file with extension name
            $imageNameWithExtension = $request->file('image')->getClientOriginalName();
            $audioNameWithExtension = $request->file('audio')->getClientOriginalName();
        //get just file name
            $imageName = pathinfo($imageNameWithExtension, PATHINFO_FILENAME);
            $audioName = pathinfo($audioNameWithExtension, PATHINFO_FILENAME);;
        //get just extension
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $audioExtension = $request->file('audio')->getClientOriginalExtension();
        //file name to store
            $imageNameToStore = $imageName.'_'.time().'.'.$imageExtension;
            $audioNameToStore = $audioName.'_'.time().'.'.$audioExtension;
        //upload file
            $imagePath = $request->file('image')->storeAs('public/images', $imageNameToStore);
            $audioPath = $request->file('audio')->storeAs('public/audio', $audioNameToStore);

        $imageUrl = Storage::url($imagePath);
        $audioUrl = Storage::url($audioPath);

        

        $post->title = $request->input('title');
        $post->note = $request->input('note');
        $post->deadline = $request->input('deadline');
        $post->image = $imageUrl;
        $post->audio = $audioUrl;

        $post->save();

        return redirect('/admin')->with('success', 'Ad created successfully..');
    }

    public function ads(){
        $posts = Ads::all();
        return view('admin.ads', ['posts'=> $posts]);
    }

    public function delete_ad($id){
        $post = Ads::find($id);
        $post->delete();
        return redirect('/admin')->with('success', 'Ad deleted successfully..');
    }

    public function createchat(){
        return view('admin.createchat');
    }

    public function savechart(Request $request){
        $this->validate($request, [
            'title'=>'required',
            'artist'=>'required',
            'image'=>'required',
            'position'=>'required'
        ]);

        //get file with extension name
            $imageNameWithExtension = $request->file('image')->getClientOriginalName();
        //get just file name
            $imageName = pathinfo($imageNameWithExtension, PATHINFO_FILENAME);
        //get just extension
            $imageExtension = $request->file('image')->getClientOriginalExtension();
        //file name to store
            $imageNameToStore = $imageName.'_'.time().'.'.$imageExtension;
        //upload file
            $imagePath = $request->file('image')->storeAs('public/images', $imageNameToStore);

        $imageUrl = Storage::url($imagePath);

    
        $position = $request->input('position');
        $chart = Chart::updateOrCreate(['position'=>$position], [
            'title'=>$request->input('title'),
            'artist'=>$request->input('artist'),
            'image'=>$imageUrl,
            'position'=>$request->input('position')
        ]);

        return redirect('/create_chart')->with('success', 'chart added successfully..');
    }
}
