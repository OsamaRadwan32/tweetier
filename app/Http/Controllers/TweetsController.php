<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tweet;
use App\Follow;
use Carbon\Carbon;

//app/Http/routes.php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userTweets() 
    {
        $userTweets = Tweet::where('user_id', auth()->user()->id)
                            ->get();
                            
        return view('pages.profile')->with('userTweets', $userTweets);
    }

    public function tweetFeed()
    {
        $followingsIds = Follow::where('follower_id', auth()->user()->id)
                            ->pluck('following_id')
                            ->toArray();

        $tweets = Tweet::whereIn('user_id', $followingsIds)
                    ->orWhere( 'user_id', auth()->user()->id )
                    ->orderBy('created_at', 'desc')
                    ->get();

        if ($tweets->hasFile('image_url')) {
            $filenameWithExt = $request->file('travels_imgurl')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('travels_imgurl')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('travels_imgurl')->storeAs('public/images', $fileNameToStore);
    
        }
        $travel->travels_imgurl = $fileNameToStore;
        return view('pages.home')->with('tweets', $tweets);
    }

    public function uploadTweet(Request $request)
    {
        $tweet_body = $request->input('tweet_body');

        $now = Carbon::now();
        DB::table('tweets')->insert([
            'tweet_body' => $tweet_body,
            'user_id' => auth()->user()->id,
            'created_at' => $now,
        ]);

        $followingsIds = Follow::where('follower_id', auth()->user()->id)
                            ->pluck('following_id')
                            ->toArray();

        $tweets = Tweet::whereIn('user_id', $followingsIds)
                    ->orWhere( 'user_id', auth()->user()->id )
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('pages.home')->with('tweets', $tweets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.home')->with('tweets', $tweets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
