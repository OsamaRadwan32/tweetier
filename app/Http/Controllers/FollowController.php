<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\Follow;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getFollowers()
    {
        $followersIds = Follow::where('following_id', auth()->user()->id)
                            ->pluck('follower_id')
                            ->toArray();

        $followers_user_data = Tweet::whereIn('user_id', $followersIds)
                                    ->get();
        return view('pages.followers')->with('followers', $followers_user_data);
    }

    public function getFollowings() 
    {
        $followingsIds = Follow::where('follower_id', auth()->user()->id)
                            ->pluck('following_id')
                            ->toArray();

        $followings_user_data = Tweet::whereIn('user_id', $followingsIds)
                        ->get();

        return view('pages.following')->with('followings', $followings_user_data);
    } 

    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
