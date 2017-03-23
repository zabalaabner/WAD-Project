<?php 

namespace App\Http\Controllers;
use App\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use DB;
use Auth;





class Articlecontroller extends Controller
{

    public function __construct(){
        $this->middleware('auth' , ['except' => 'index']);
    }

    public function index()
    {   $articles = Article::all();
    	
    	return view('articles.index', compact('articles'));
    }
  
    public function show($id)
    {
    	$article = Article::findOrFail($id);

    	return view('articles.show', compact('article'));
    }

        public function create()
    {   
        $articles =Article::all();
        
    	
        return view('articles.create', compact('articles'));
    }

    public function store(CreateArticleRequest $request){
            
            $article = new Article();
            $article-> title = $request->get('title');
            //$article-> tag = $request->get('tag');
            $article-> excerpt = $request->get('excerpt');
            $article-> body = $request->get('body');
            $article-> user_id = $request->user()->id;

            $article->save();

            Session()->flash('flash_message', 'Congratulations! Article successfully added');
             Session()->flash('flash_message_important', true);
            return redirect('articles');
    }


    public function edit($id, Request $request){
        $articles =Article::findOrFail($id);
        return view('articles.edit', compact('articles'));
    }

    public function update($id, Request $request){

        $article = Article::findOrFail($id);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        //$article->tag = $request->tag;
        $article->excerpt = $request->excerpt;
        $article->body = $request->body;
        $article->save();
        return redirect('articles');

    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        \Session::flash('flash_message', 'The Article was successfully deleted');
        Session()->flash('flash_message_important', true);
        return redirect()->route('articles.index')->with('alert-danger' , 'Data deleted!');
    }
}
