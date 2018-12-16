<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:21 PM
 */?>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <svg id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.69 63.49"><title>AD</title><polygon points="20.01 50.74 31.18 26.88 38.8 43.07 51.57 43.07 31.27 0 0 63.49 9.86 63.49 14.04 63.49 40.74 63.49 34.74 50.74 20.01 50.74" style="fill:#231f20"/><path d="M87.85,8.83C82,2.91,73.73,0,63,0H38.94L53,29.77v-17h9.1c7.56,0,12.85,1.72,15.86,5.09s4.64,8.11,4.64,14c0,11.19-5,18.28-18.66,18.82l0,0H42.41l6,12.75H63.08A54,54,0,0,0,70,63.06h0a1.81,1.81,0,0,0,.23,0c.83-.12,1.66-.25,2.46-.4l.23-.06c.76-.15,1.48-.32,2.19-.51l.38-.1c.76-.21,1.5-.44,2.22-.7l.3-.1c.67-.25,1.32-.52,2-.8l.23-.1c.68-.31,1.34-.65,2-1a2.69,2.69,0,0,0,.29-.16c.63-.36,1.24-.73,1.83-1.13l0,0q.9-.63,1.74-1.32l.26-.22c.56-.46,1.1-1,1.61-1.46.35-.34.69-.7,1-1.06l.45-.52.43-.5c.24-.29.47-.58.7-.89,0-.05.09-.1.13-.16.23-.31.45-.63.68-.95a.76.76,0,0,0,.08-.11,28.69,28.69,0,0,0,3.93-8.58,37.62,37.62,0,0,0,1.32-10.28C96.69,22.31,93.77,14.66,87.85,8.83Z" style="fill:#231f20"/></svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <div class="navbar-nav">
                <a data-ripple class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a data-ripple class="nav-item nav-link" href="/services">Services</a>
                <a data-ripple class="nav-item nav-link" href="/about">About</a>
                <a data-ripple class="nav-item nav-link" href="/contact">Contact</a>
                <a data-ripple class="nav-item nav-link" href="/components">Components</a>
                <a data-ripple class="nav-item nav-link" href="/dashboard">Admin</a>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>