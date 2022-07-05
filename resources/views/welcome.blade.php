<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->   
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            html{
                scroll-behavior: smooth;
            }
            #app{
                background-color: var(--bg-color);
                max-width: 100vw;
                min-height: 100vh;
                font-family: acumin-pro, sans-serif;
                color: white;
                position: relative;
                overflow:hidden;
            }
            /* width */
            ::-webkit-scrollbar {
            width: 15px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            background: var(--bg-color); 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: white; 
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            /* background: var(--word-color);  */
            background: #3e3e42; 
            }
            hr{
                border-color: #2a2a2a;
                margin: 0 3%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <!--NavBar Component -->
            <nav-bar></nav-bar>
            <!--Intro Component -->
            <intro-component></intro-component>        
            <!--Projects Component -->
            <projects-component></projects-component>
            <!--Skills Component -->
            <skills-component></skills-component>
            <!--Contact Component -->
            <contact-component></contact-component>
            <!--Footer Components-->
            <footer-component></footer-component>
        </div>
    </body>
</html>
