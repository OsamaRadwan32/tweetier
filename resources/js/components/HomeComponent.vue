<template>
<div class="home__container">
        <div class="container black__bot__brdr">
            <div class="row">
                <div class="col-sm-3">
        
                    <div class="panel panel-default panel-custom">
                        <a class="twPc-bg twPc-block"></a>
        
                        <div>
                            <a title="Desain 360" href="https://twitter.com/desain360" class="twPc-avatarLink profile__img">
                                <img alt="Mert Salih Kaplan" src="http://placehold.it/35x35" class="twPc-avatarImg profile__img">
                            </a>
        
                            @auth
                            <div class="twPc-divUser">
                                <div class="twPc-divName">
                                    <a href="{{ action('TweetsController@userTweets') }}">{{ Auth::user()->name }} </a>
                                </div>
                                <span>
                                    <a href="#">@<span>{{ Auth::user()->username }} </span></a>
                                </span>
                            </div>
                            @endauth
        
                            <div class="twPc-divStats">
                                <ul class="twPc-Arrange darkblue__font">
                                    <li class="twPc-ArrangeSizeFit">
                                        <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                                            <span class="twPc-StatLabel twPc-block">Tweets</span>
                                            <span class="twPc-StatValue">9.840</span>
                                        </a>
                                    </li>
                                    <li class="twPc-ArrangeSizeFit">
                                        <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                                            <span class="twPc-StatLabel twPc-block">Following</span>
                                            <span class="twPc-StatValue">885</span>
                                        </a>
                                    </li>
                                    <li class="twPc-ArrangeSizeFit">
                                        <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                                            <span class="twPc-StatLabel twPc-block">Followers</span>
                                            <span class="twPc-StatValue">1.810</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
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
        
                <div class="col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <form action="{{ action('TweetsController@uploadTweet') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="media">
                                    <a class="media-left" href="#fake">
                                        <img alt="" class="media-object profile__img" src="http://placehold.it/35x35">
                                    </a>
                                    <div class="media-body tweet__input">
                                        <div class="form-group has-feedback">
                                            <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                                            <input name="tweet_body" type="text" class="form-control tweet_input" id="search2" aria-describedby="search" placeholder="What's happening?">
                                            <span class="glyphicon glyphicon-picture form-control-feedback user__tweet__glyphicons" aria-hidden="true"></span>
                                            <span id="search2" class="sr-only">(success)</span>
                                        </div>
                                        <ul class="nav nav-pills nav-pills-custom float_left tweet__glyphs user__tweet__glyphicons">
                                            <li>
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-picture">
                                                        <input type="file" name="filename" class="form-control">
                                                    </span>
                                                </a>
                                            </li>
                                            <li><a href="#"><span class="glyphicon glyphicon-expand"></span></a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-align-left"></span></a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a></li>
                                            <li class="float__right">
                                        </ul>
                                        <input class="btn btn-primary darkblue__btn" type="submit" name="tweet" value="{{ __('Tweet') }}">
                                    </div>
                                </div>
                            </form>
                        </div>
        
                        <div class="panel-body">
                            
                            @if(count($tweets) > 0)
                                @foreach($tweets as $tweet)
                                    <div class="media">
                                        <a class="media-left" href="#fake">
                                            <img alt="" class="media-object profile__img" src="http://placehold.it/64x64">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{$tweet->user->name}} <small><small>@</small>{{$tweet->user->username}} . {{$tweet->created_at}}</small></h4>
                                            <p>{{$tweet->tweet_body}}</p>
                                            <ul class="nav nav-pills nav-pills-custom tweet__glyphicons">
                                                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                                <li><a href="#"><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                                                <li><a href="#"><span class="fa fa-get-pocket"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="media col-md-offset-1">
                                <div class="media-body ">
                                    <h2 class="darkblue__font bold">
                                        {{ __('What? No Tweets yet?') }}
                                    </h2>
                                    <p>This empty timeline won’t be around for long. Start following people and you’ll see Tweets show up here.</p>
                                    <a href="">
                                        <button type="" class="btn btn-primary col-sm-5 darkblue__btn ">
                                            {{ __('Find people to follow') }}
                                        </button>
                                    </a>
                                </div>
                            </div>                        
                            @endif
    
    
                            <!--
                            <div class="media">
                                <a class="media-left" href="#fake">
                                    <img alt="" class="media-object profile__img" src="http://placehold.it/64x64">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>Dolorem aspernatur rerum, iure? Culpa iste aperiam sequi, fuga, quasi rerum, eum, quo natus tenetur officia placeat.</p>
                                    <a href="#"><img class="img-responsive" alt="" src="http://placehold.it/800x500"></a>
                                    <ul class="nav nav-pills nav-pills-custom tweet__glyphicons">
                                        <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                                        <li><a href="#"><span class="fa fa-get-pocket"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
        
                    <!--
                    <br>
                    <br>
                    <br>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Prova</div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li role="presentation" class="active"><a href="#">Home</a></li>
                                <li role="presentation"><a href="#">Profile</a></li>
                                <li role="presentation"><a href="#">Messages</a></li>
                            </ul>
                        </div>
                    </div>
                    -->
                </div>
                <!--/END Mid Panel Container-->
        
                <div class="col-sm-3">
                    <div class="panel panel-default panel-custom">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Who to follow
                                <small class="darkblue__font"><a href="#">Refresh</a> ● <a href="#">View all</a></small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/32x32" alt="" class="media-object  profile__img">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Nome e cognome</h4>
                                    <a href="#" class="btn btn-xs white__btn">Follow</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/32x32" alt="" class="media-object  profile__img">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Nome e cognome</h4>
                                    <a href="#" class="btn btn-xs white__btn">Follow</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/32x32" alt="" class="media-object  profile__img">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Nome e cognome</h4>
                                    <a href="#" class="btn btn-xs white__btn ">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer darkblue__font">
                            <a href="www.google.it">
                                <span class="glyphicon glyphicon-user"></span> Find people you know
                            </a>
                        </div>
                    </div>
                    <div class="well well-sm">
                        <ul class="list-inline grey__font">
                            <li>© 2015 Twitter</li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Ads info</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Status</a></li>
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Businesses</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Developers</a></li>
                        </ul>
                    </div>
                </div>
                <!--/END Right Panel Container-->
        
            </div>
        </div>
    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/main.js"></script>
    
</template>

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
    
    export default {
        data() {
            return {
                tweets: [],
                tweet: {
                    tweet_id: '',
                    tweet_body: '',
                    user_id: '',
                    image_url: '',
                    video_url: ''
                }
            }
        },
        
        created() {
            this.fetchTweets();
        },

        methods: {
            fetchTweets() {
                axios.get('home').then(response => this.res  = response.data);
            }
        }

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
/* ==========================================================================
   Author's custom styles
   ========================================================================== 
*/

.py-4 {
    padding-top: 55px;
}

.home__container {
    padding-top: 10px;
}

.panel-info>.panel-heading {
    background-image: none;
    background-color: #e6e6ff;
}

.nav-pills-custom>li>a:focus,
.nav-pills-custom>li>a:hover {
    background: none;
    color: grey;
}

.panel-custom>.panel-heading {
    background: none;
    border-bottom: none;
}

.form-control-nav {
    background-color: #F0FFFF;
    border: lightgrey solid 1px;
    border-radius: 15px;
}

body {
    background-color: #F0FFFF;
}

.panel-footer {
    background-color: #e6e6ff;
}

.well {
    background-image: none;
    background-color: #e6e6ff;
}

a {
    color: #000;
}

div.panel-heading {
    padding-top: 15px;
    padding-bottom: 0px;
}

.form-control-feedback {
    line-height: 27px;
}

.panel-info {
    border: 1px lightgrey solid;
}


/* 
* Custom Styles
*/


/* Login Page */


/* Split the screen in half */

.split {
    height: 95%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}


/* Control the left side */

.left {
    left: 0;
    background-color: #0d0d26;
}


/* Control the right side */

.right {
    right: 0;
    background-color: #fff;
}

.frgt__pswd__link {
    color: #999999;
}

.frgt__pswd__link:hover {
    color: #999999;
}

.darkblue__btn {
    border-radius: 20px;
    background-color: #0d0d26;
    color: #fff;
    border-radius: 20px;
}

.darkblue__btn:hover {
    background-color: #0d0d26;
    color: #fff;
    border-radius: 20px;
}

.white__btn {
    border-radius: 20px;
    background-color: #fff;
    color: #0d0d26;
    border: 2px solid #0d0d26;
    border-radius: 20px;
}

.white__btn:hover {
    background-color: #e6e6ff;
    color: #0d0d26;
    border: 2px solid #0d0d26;
    border-radius: 20px;
}


/* If you want the content centered horizontally and vertically */

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: left;
}


/* Footer Styling */

.footer__container {
    height: 5%;
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #fff;
    text-align: center;
}

.footer__list {
    text-align: center;
}

.footer__list>li {
    margin-top: 15px;
    margin-right: 10px;
    display: inline-block;
    color: #cccccc;
}


/* Navbar Styling*/

.navbar-right {
    height: 40px;
}

.nav__searchbar {
    float: left;
    margin-top: 5px;
}

.nav__dropdown {
    display: inline-block;
    float: left;
    width: 35px;
    margin-left: 10px;
    margin-right: 10px;
}

.white__hover>li>a:hover {
    background-color: #0d0d26;
    border-bottom: 5px solid #fff;
}


/* App Grid Styling */


/* Profile Panel Styling */

.twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    height: 200px;
    max-width: 340px;
    margin-bottom: 20px;
}

.twPc-bg {
    background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 95px;
    width: 100%;
}

.twPc-block {
    display: block !important;
}

.twPc-button {
    margin: -35px -10px 0;
    text-align: right;
    width: 100%;
}

.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -30px 5px 0 8px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}

.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 72px;
    width: 72px;
}

.twPc-divUser {
    margin: 5px 0 0;
}

.twPc-divName {
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}

.twPc-divName a {
    color: inherit !important;
}

.twPc-divStats {
    margin-left: 11px;
    padding: 10px 0;
}

.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}

ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}

.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0;
    vertical-align: top;
}

.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}

.twPc-StatValue {
    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}

.twPc-StatLabel {
    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}

.profile__img {
    border-radius: 45px;
}

.search-field {
    padding-left: 10px;
}

.tweet_button {
    border-radius: 40px;
    width: 70px;
    color: #000;
    /*background-color: #1DA1F2;*/
}


/* Left Panel */

.cover__photo {
    margin-top: 0;
}


/* Newsfeed Panel */

.tweet__input {
    width: 100%;
}

.user__tweet__glyphicons {
    color: #0d0d26;
}

.user__tweet__glyphicons>li>a {
    color: #0d0d26;
}

.tweet__glyphicons>li>a {
    color: #999999;
}


/* ==========================================================================
   Colors' styles
   ========================================================================== 
*/


/* DarkBlue Colors */

.darkblue__btn {
    background-image: none;
    background-color: #0d0d26;
    color: #fff;
}

.darkblue__btn:hover {
    background-image: none;
    background-color: #2b2b33;
    color: #fff;
}

.darkblue__font {
    color: #0d0d26;
}

.darkblue__font>li>a {
    color: #0d0d26;
}

.darkblue__backgrnd {
    background-color: #0d0d26;
}

.light__darkblue__backgrnd {
    background-color: #ffe699;
}


/* White Colors */

.white__font {
    color: #FFF;
}

.white__font>h3 {
    color: #FFF;
}

.white__font>li>a {
    color: #FFF;
}

.white__backgrnd {
    background-color: #FFF;
}

.dark__creamy__backgrnd {
    background-color: #e6e6ff;
}

.creamy__backgrnd {
    background-color: #f2f2f2;
}


/* Black Colors */

.black__font>li>a {
    color: #000;
}

.black__background {
    background-color: #000;
}


/* Grey Colors */

.grey__font {
    color: #999999;
}

.grey__font>li>a {
    color: #999999;
}

.grey__bot__brdr {
    border-bottom: 0.1px solid #cccccc;
}


/* ==========================================================================
   Margins
   ========================================================================== 
*/

.margin__auto {
    margin: auto;
}


/* ==========================================================================
   Font Weigths 
   ========================================================================== 
*/

.bold {
    font-weight: bold;
}

.header__img__container {
    height: 500px;
    width: 100%;
    overflow: hidden;
}

.header__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile__name__label {
    margin-top: 9px;
}

.profile__name__label>a {
    color: #fff;
    margin: auto;
}

.profile__name__label>a:hover {
    text-decoration: none;
}
</style>
