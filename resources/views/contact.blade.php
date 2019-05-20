@extends('layouts.app')
    @section('head')
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> <!-- Open Sans /-->
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'> <!-- PT Sans Narrow /-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> <!-- Font Awesome /-->
        <style>
        /* 01. GENERAL SETTINGS ============================================ */

        * {margin: 0; padding: 0;}

        p {line-height: 160%;}

        a {text-decoration: none; color: #fff; transition: all 0.1s ease-in;}
        img {border: 0;}

        body {
            background: #4593e3;
        color: #000000;
        font-family: 'PT Sans Narrow', sans-serif;
        font-size: 13px;
        font-weight: 300;
        }

        .clear {clear: both;}

        /* Buttons */
        .btn {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 40px;
        color: rgba(255,255,255, 0.95);
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        border: none;
        border-radius: 20px;
        outline: 0;
        transition: all 0.1s ease-in;
        }

        .btn-transparent {background: rgba(0,0,0, 0.2);}
        .btn-transparent:hover {background: rgba(0,0,0, 0.4);}

        /* Separators */
        .separator {
        margin: 0 auto;
        background: rgba(0, 0, 0, 0.2);
        width: 30px;
        height: 5px;
        }

        /* 02. FONT FACE ============================================ */

        @font-face {
        font-family: 'norwester';
        src: url('{{ asset('fonts/norwester/norwester.eot') }}');
        src: url('{{ asset('fonts/norwester/norwester.eot?iefix') }}') format('embedded-opentype'),
        url('{{ asset('fonts/norwester/norwester.ttf') }}');
        font-weight: normal;
        }

        /* 03. SPEAKERS SETTINGS ============================================ */

        #speakers {
        padding: 60px 0;
            background: #4593e3;
        text-align: center;
        }

        #speakers p {
        padding: 20px 0 60px;
        color: rgba(255, 255, 255, 0.85);
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        letter-spacing: 0.2px;
        }

        #speakers h3 {
        padding: 0 0 15px;
        font-family: 'norwester';
        font-size: 36px;
        text-transform: uppercase;
        }

        #speakers h4  {
        margin-top: -20px;
        font-size: 32px;
        font-weight: 700;
        }

        #speakers h4 span {
        display: block;
        position: relative;
        left: -40px;
        top: 10px;
        font-size: 20px;
        background: none;
        padding: 0;
        }

        #speakers img {
        width: 100%;
        max-width: 240px;
        border-radius: 50%;
        border: 15px solid transparent;
        box-shadow: 2px 2px 0px rgba(0,0,0, 0.18);
        transition: all 0.1s ease-in;
        }

        #speakers img:hover {
        border: 15px solid #3980C9;
        position: relative;
        z-index: 10;
        transition: all 0.1s ease-in;
        }

        #speakers span {
        padding: 8px 20px;
        position: relative;
        top: -64px;
        left: -42px;
        display: inline-block;
        background: #4593e3;
        border-radius: 0 16px 16px 0;
        font-size: 16px;
        }

        /* Member Image Hover Effect */
        .hover_img {
        display: none
        }

        .member-profile:hover .unhover_img{
        display: none;
        }

        .member-profile:hover .hover_img {
        display: block;
        }

        /* Social Networks Meta */
        #speakers li {display: inline-block; padding: 0 6px; font-size: 18px;}
        #speakers li a {color: rgba(0,0,0, 0.3); transition: all 0.1s ease-in;}
        #speakers li a:hover {color: rgba(0,0,0, 0.7);}

        /* Rows Optimization */
        .row2 {
        display: none;
        }

        .row1 .col-md-3, .row2 .col-md-3 {
        padding-bottom: 40px;
        }

        /* Mobile Devices Optimization */
        @media (min-width: 568px) and (max-width: 992px) {

        .row1 .col-md-3, .row2 .col-md-3 {
        display: inline-block;
        max-width: 50%;
        }

        #speakers img {max-width: 300px;}

        }
        </style>
    @endsection
    @section('bg')
        <img src="{{ asset('img/gamebg.png') }}" width="100%" height="auto">
    @endsection

    @section('content')
        <section id="speakers">
            <h3>Our Team</h3> <!-- Section Title -->
            <div class="separator"></div>
            <div class="container">
                <div class="col-md-12 col-md-offset-2">
                    <!-- Section Description -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <!-- First Row of Speakers -->
                <div class="row">

                    <!-- Speaker 1 -->
                    <div class="col-md-4">
                        <a href="#" class="member-profile">
                            <div class="unhover_img">
                                <img src="{{ asset('img/team/kuba.jpg') }}" alt="" />
                            </div>
                            <div class="hover_img">
                                <img src="{{ asset('img/team/kuba-hover.jpg') }}" alt="" />
                            </div>
                            <span>WebDev</span>
                            <h4><span>Jakub</span>Krakowiak</h4>
                        </a>
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-foursquare"></i></a></li>
                        </ul>
                    </div>

                    <!-- Speaker 2 -->
                    <div class="col-md-4">
                        <a href="#" class="member-profile">
                            <div class="unhover_img">
                                <img src="{{ asset('img/team/michal.jpg') }}" alt="" />
                            </div>
                            <div class="hover_img">
                                <img src="{{ asset('img/team/michal-hover.jpg') }}" alt="" />
                            </div>
                            <span>WebDev</span>
                            <h4><span>Michał</span>Troka</h4>
                        </a>
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <!-- Speaker 3 -->
                    <div class="col-md-4">
                        <a href="#" class="member-profile">
                            <div class="unhover_img">
                                <img src="{{ asset('img/team/mateusz.jpg') }}" alt="" />
                            </div>
                            <div class="hover_img">
                                <img src="{{ asset('img/team/mateusz-hover.jpg') }}" alt="" />
                            </div>
                            <span>WebDev</span>
                            <h4><span>Mateusz</span>Ostanówko</h4>
                        </a>
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>



                </div> <!-- End First Row -->


            </div>
        </section>
        <script>
            $(document).ready(function(){
                $(".fadeIn").click(function(){
                    $("div.row2").fadeIn();
                    $("button.fadeIn").hide();
                });
            });
        </script>
    @endsection
