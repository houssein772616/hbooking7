@extends('layouts.admin')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog : {{ $blog->title }}</title>

        <style>
            .blog, .article{
              
                position: relative;
                height: fit-content;
                padding-bottom: 0;
            }

            .article, .title{
                min-height: auto;
                height: fit-content;
                padding: 0 10px;
                white-space: normal;
            }

            .published{
                margin: 20px 0 60px;
                padding: 0 10px;
                text-transform: capitalize;
                font-style: italic;
                color: rgba(0, 0, 0, 0.5);
            }

            .published span{
                font-weight: 700;
                font-style: normal;
            }

            .article *{
                margin: 30px 0;
                margin-top:50%;
                color: #2d2d2d;
            }

            .article-image{
              
                max-width: 100px;
                max-height: 400px;
                display: block;
                margin: 30px auto;
                object-fit: contain;
            }

            .sub-heading{
                padding: 0 5vw;
                color: #2d2d2d;
                font-weight: 500;
                font-size: 40px;
                margin-top: 80px;
            }
        </style>

    </head>
    <body>

        
        
        <div class="banner" style="background-image: url('{{ asset('storage/' . $blog->image) }}'); height: 300px;"></div>

        <div class="blog">
            <h1 class="title">{{ $blog->title }}</h1>
            <p class="published"><span>published at - </span>{{ $blog->published_at->format('F d, Y') }}</p>
            <div class="article">
                {!! nl2br(e($blog->content)) !!}
            </div>
        </div>


        <!-- Placeholder for other blogs (optional) -->
        <section class="blogs-section">
            <!-- Add logic to display related or recent blogs -->
        </section>

    </body>
    </html>
@endsection
