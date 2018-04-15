@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style-homepage.css">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title>SHOWCHAN</title>
</head>

<body>

    <div class="container">
        <button type="button" class="btn btn-default"><i class="fas fa-tv"></i>  Movies</button>
        <button type="button" class="btn btn-default"><i class="fas fa-video"></i>  TV Shows</button>
        <div class="row">
            
            <div class="col-3">
                <a href="sub-params.html"><button type="button" class="btn btn-success" id="submit">Submit Post</button></a>
            </div>
        </div>
      

        <div class="row">
            <div class="col-1">
                <i class="fas fa-image"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                400<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="post-image.html" id="news_title">Mauris hendrerit turpis eget lorem convallis dignissim.</a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="post.html" class="comments">10 comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-tv"></i> <br>
                BoJack Horseman<br>
                <i class="fab fa-imdb"></i>10<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-link"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                2.2k<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="post-link.html" id="news_title">Proin non neque elementum, condimentum ligula in, feugiat nibh.</a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">430 comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-video"></i><br>
                Shawshank Redemption<br>
                <i class="fab fa-imdb"></i>7.5<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-align-right"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                8.9k<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="post.html" id="news_title">Suspendisse congue dignissim leo, sed consectetur elit.</a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">1.2k comments</a>
            </div>
            <div class="col-4">
                <i class="fas fa-tv"></i> <br>
                Marvel's Agents of S.H.I.E.L.D.<br>
                <i class="fab fa-imdb"></i>7.5<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-align-right"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                734<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="#" id="news_title">Ut sed magna nisl. </a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">23 comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-video"></i> <br>
                Black Panther<br>
                <i class="fab fa-imdb"></i>7.8<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-align-right"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                32.3k<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="#" id="news_title">Mauris finibus est id. </a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">4.3k comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-tv"></i> <br>
                Friends<br>
                <i class="fab fa-imdb"></i>8.9<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-image"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                904<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="#" id="news_title">Donec fermentum lectus eget mauris. </a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">87 comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-tv"></i> <br>
                Stranger Things<br>
                <i class="fab fa-imdb"></i>8.9<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-image"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                1.6k<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="#" id="news_title">Mauris sapien ex, mollis eu.</a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">232 comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-video"></i> <br>
                The Hangover<br>
                <i class="fab fa-imdb"></i>7.7<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-link"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                10.0k<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="#" id="news_title">Ut dui diam, vehicula vel.</a>
                <br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">2.3k comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-video"></i> <br>
                The Shape of Water<br>
                <i class="fab fa-imdb"></i>7.7<br>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <i class="fas fa-align-right"></i>
                <a href="#" class="upvote"><i class="far fa-thumbs-up"></i></a> <br>
                348<br>
                <a href="#" class="downvote"><i class="far fa-thumbs-down"></i></a>
            </div>
            <div class="col-6">
                <a href="#" id="news_title">Morbi tincidunt placerat congue. Sed.</a><br>
                <p>Nam consectetur iaculis imperdiet. Fusce ac eros justo. Sed vel risus ac sapien sollicitudin iaculis. Praesent non diam sapien. Curabitur et dui ut dolor mattis.</p>
                <a href="#" class="comments">65 comments</a>
            </div>
            <div class="col-3">
                <i class="fas fa-tv"></i> <br>
                The Walking Dead<br>
                <i class="fab fa-imdb"></i>8.4<br>
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© SHOWCHAN 2018, LBAW Industries 42</span>
        </div>
    </footer>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
@endsection