@extends('layouts.topnavbar')

@section('content')

    <div class="header__img__container">
        <img alt="" src="{{asset('/img/Matte-Black-Everything-MKBHD.png')}}" class="header__img">
    </div>

    <div id="profile__header">
        <div class="navbar navbar-expand-lg navbar-static-top border border-primary darkblue__backgrnd grey__bot__brdr">
            <div class="container">
                <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
                    <div class="col-md-3 profile__name__label">
                        <div class="media-mid dropdown nav__dropdown" href="#fake">
                            <img alt="" class="media-object dropdown-toggle profile__img profile__toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="http://placehold.it/35x35">
                        </div>
                        <a href="#"> 
                            {{ Auth::user()->name }} 
                        </a>
                        <br>
                        <a href="#">@<span>{{ Auth::user()->username }} </span></a>
                    </div>
                    <ul class="nav navbar-nav white__font white__hover">
                            <li class="active">
                                <a href="{{ action('TweetsController@userTweets') }}">Tweets</a>
                            </li>
                            <li>
                                <a href="{{ action('FollowController@getFollowings') }}">Following</a>
                            </li>
                            <li>
                                <a href="{{ action('FollowController@getFollowers') }}">Followers</a>
                            </li>
                            <li>
                                <a href="#fake">Likes</a>
                            </li>
                        </ul>
                    <!--/End Left Side of Navbar -->
    
                    <div class="navbar-form navbar-right">
                        <button class="btn white__btn" type="submit" aria-label="Left Align">
                            <span class="glyphicon" aria-hidden="true"> </span> Following
                        </button>
                    </div>
                    <!--/End Right Side of Navbar -->
    
                </div>
            </div>
        </div>
    
        <div class="container black__bot__brdr">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default panel-custom">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Trends
                                <small><a class="darkblue__font" href="#">change</a></small>
                            </h3>
                        </div>
        
                        <div class="panel-body">
                            <ul class="list-unstyled darkblue__font">
                                <li><a href="#">#Cras justo odio</a></li>
                                <li><a href="#">#Dapibus ac facilisis in</a></li>
                                <li><a href="#">#Morbi leo risus</a></li>
                                <li><a href="#">#Porta ac consectetur ac</a></li>
                                <li><a href="#">#Vestibulum at eros</a></li>
                                <li><a href="#">#Vestibulum at eros</a></li>
                                <li><a href="#">#Vestibulum at eros</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/END Left Panel Containers-->
        
                <div class="col-sm-9">

                    <div id="followers">
                        @if(count($followers) > 0)
                        @foreach($followers as $follower)
                        <div class="col-sm-4">
            
                            <div class="panel panel-default panel-custom">
                                <a class="twPc-bg twPc-block"></a>
                
                                <div>
                                    <a title="Desain 360" href="https://twitter.com/desain360" class="twPc-avatarLink profile__img">
                                        <img alt="Mert Salih Kaplan" src="http://placehold.it/35x35" class="twPc-avatarImg profile__img">
                                    </a>
                
                                    <div class="twPc-divUser">
                                        <div class="twPc-divName">
                                            <a href="#">{{$follower->user->name}} </a>
                                        </div>
                                        <span>
                                            <a href="#">@<span>{{$follower->user->username}} </span></a>
                                        </span>
                                    </div>
                
                                    <div class="twPc-divStats">
                                        <p>{{$follower->user->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
        
                        <div class="media col-md-offset-1">
                            <div class="media-body ">
                                <h2 class="darkblue__font bold">
                                    You don't have any followers yet!  
                                </h2>
                                <p>Follow more people to to get followers and see what they are Tweeting.</p>
                            </div>
                        </div>
                                
                        @endif
                    </div>
                    
                </div>
            </div>

        </div>
        <!--/END Mid Panel Container-->

    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/main.js"></script>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
@endsection
