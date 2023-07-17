<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    private function findArticle($id)
    {

        $article = Article::where('article-number', $id)->first();

        if ($article) {
            return true;
        }

        return false;
    }

    public function getArticle($id = null)
    {
	    $token = request()->header(config('token.key'));

	    if ($token !== config('token.secret')) {

		    return response()->json(null, 404);
	    }


	    if ($this->findArticle($id)) {
            return response()->json(null, 200);
        }

        return response()->json(null, 404);
    }

    public function createArticles(Request $request)
    {

	    $token = $request->header(config('token.key'));

	    if ($token !== config('token.secret')) {

		    return response()->json(null, 404);
	    }


        $validation = Validator::make($request->all(), [
            'articleNumber' => 'required',
            'status' => 'required',
            //'short' =>'required',
            //'long' =>'required',
        ]);

        if ($validation->fails()) {
            return response()->json(null, 403);
        }

            $article = Article::create([
                'article_number' => $request->articleNumber,
                'status' => $request->articleNumber,
                'short' => $request->short,
                'long' => $request->long,

            ]);

            return response()->json($article, 201);



    }

	public function createLog(Request $request){

		$token = request()->header(config('token.key'));

		if ($token !== config('token.secret')) {

			return response()->json(null, 404);
		}

		$validation = Validator::make($request->all(), [
			'jobName' => 'required',
			'status' => 'required',
			//'short' =>'required',
			//'long' =>'required',
		]);

		if ($validation->fails()) {
			return response()->json(null, 403);
		}
		try {
			$job =Job::create([
				'job_name' => $request->jobName,
				'status' => $request->status,
				'short' => $request->short,
				'long' => $request->long,
			]);

			return response()->json($job, 201);
		}catch (\Exception $exception){
			return response()->json($exception->getMessage(), 200);
		}


	}
}
