<template>
    <div class="navbar navbar-expand-lg navbar-static-top border border-primary navbar-fixed-top darkblue__backgrnd grey__bot__brdr">
        <div class="container">
            <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
                <ul class="nav navbar-nav white__font white__hover">
                    <li class="active">
                        <a href="{{ action('TweetsController@tweetFeed') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li>
                        <a href="#fake"><span class="glyphicon glyphicon-bell"></span> Notifications</a>
                    </li>
                    <li>
                        <a href="#fake"><span class="glyphicon glyphicon-envelope"></span> Messages</a>
                    </li>
                </ul>
                <!--/End Left Side of Navbar -->

                <div class="navbar-form navbar-right">
                    <div class="form-group has-feedback nav__searchbar">
                        <input type="text" class="form-control-nav search-field white__backgrnd" id="search" aria-describedby="search1" placeholder="Search Tweetier">
                        <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="media-mid dropdown nav__dropdown" href="#fake">
                        <img alt="" id="dropdownMenuLink" class="media-object dropdown-toggle profile__img profile__toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="http://placehold.it/35x35">
                        <span class="caret invisible"></span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuLink">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    {{ Auth::user()->name }}
                                    <br>
                                    @<span>{{ Auth::user()->username }} </span>
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                    Lists
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                                    Moments
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <span class="glyphicon glyphicon-export" aria-hidden="true"></span>
                                    Twitter Ads
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                                    Analytics
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Settings and Privacy</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Help Center</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Keyboard shortcuts</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    Night Mode
                                    <span class="glyphicon glyphicon-adjust float-right" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                <button class="btn white__btn" type="submit" aria-label="Left Align">
                <span class="glyphicon" aria-hidden="true"> </span> Tweet
                </button>
                </div>
                <!--/End Right Side of Navbar -->

            </div>
        </div>
    </div>
    <!--/END Navbar -->
</template>