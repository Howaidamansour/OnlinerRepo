@extends('home')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onliner | Subject</title>
    <style>
                        body {
                    background: #eee;
                }
                .date__box {
                    position: absolute;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    color: #ccc;
                    border: 4px solid;
                    font-weight: bold;
                    padding: 5px 10px;
                }
                .date__box .date__day {
                    font-size: 22px;
                }
                .blog-card {
                    padding: 30px;
                    position: relative;
                }
                .blog-card .date__box {
                    opacity: 0;
                    transform: scale(0.5);
                    transition: 300ms ease-in-out;
                }
                .blog-card .blog-card__background, .blog-card .card__background--layer {
                    z-index: -1;
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
                .blog-card .blog-card__background {
                    padding: 15px;
                    background: white;
                }
                .blog-card .card__background--wrapper {
                    height: 100%;
                    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
                    position: relative;
                    overflow: hidden;
                }
                .blog-card .card__background--main {
                    height: 100%;
                    position: relative;
                    transition: 300ms ease-in-out;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                .blog-card .card__background--layer {
                    z-index: 0;
                    opacity: 0;
                    background: rgba(51, 51, 51, 0.9);
                    transition: 300ms ease-in-out;
                }
                .blog-card .blog-card__head {
                    height: 300px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .blog-card .blog-card__info {
                    z-index: 10;
                    background: white;
                    padding: 20px 15px;
                    color: black;
                    
                }
                .blog-card .blog-card__info h5 {
                    transition: 300ms ease-in-out;
                    
                }
                .blog-card:hover .date__box {
                    opacity: 1;
                    transform: scale(1);
                }
                .blog-card:hover .card__background--main {
                    transform: scale(1.2) rotate(5deg);
                }
                .blog-card:hover .card__background--layer {
                    opacity: 1;
                }
                .blog-card:hover .blog-card__info h5 {
                    color: #ffb535;
                }
                a.icon-link {
                    color: #363738;
                    transition: 200ms ease-in-out;
                }
                a.icon-link i {
                    color: #ffb535;
                }
                a.icon-link:hover {
                    color: #ffb535;
                    text-decoration: none;
                }
                .btn {
                    background: white;
                    color: #363738;
                    font-weight: bold;
                    outline: none;
                    box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.2);
                    overflow: hidden;
                    border-radius: 0;
                    height: 50px;
                    line-height: 50px;
                    display: inline-block;
                    padding: 0;
                    border: none;
                }
                .btn:focus {
                    box-shadow: none;
                }
                .btn:hover {
                    background: #ffb535;
                    color: #fff;
                }
                .btn.btn--with-icon {
                    padding-right: 20px;
                }
                .btn.btn--with-icon i {
                    padding: 0px 30px 0px 15px;
                    margin-right: 10px;
                    height: 50px;
                    line-height: 50px;
                    vertical-align: bottom;
                    color: white;
                    background: #ffb535;
                    clip-path: polygon(0 0, 70% 0, 100% 100%, 0% 100%);
                }
                .btn.btn--only-icon {
                    width: 50px;
                }
 
    </style>
</head>
<body>

    @section('content')

        <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            <article class="blog-card">
                <div class="blog-card__background">
                <div class="card__background--wrapper">
                    <div class="card__background--main" style="background-image: url('http://demo.yolotheme.com/html/motor/images/demo/demo_131.jpg');">
                    <div class="card__background--layer"></div>
                    </div>
                </div>
                </div>
                <div class="blog-card__head">
                <span class="date__box">
                    <span class="date__day">{{$subject->subject_name}}</span>
                </span>
                </div>
                <div class="blog-card__info">
                <h5>{{$subject->subject_name}}</h5>
                <p>
                    <a href="#" class="icon-link mr-3"><i class="fa fa-pencil-square-o"></i> Tony Jahson</a>
                    <a href="#" class="icon-link"><i class="fa fa-comments-o"></i> 150</a>
                </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque vero libero voluptatibus earum? Alias dignissimos quo cum, nulla esse facere atque, blanditiis doloribus at sunt quas, repellendus vel? Et, hic!</p>
                @if($hasApprovalToSubject)
                <a href="{{route('questions.index', ['user' => $user->id, 'subject' => $subject->id])}}" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>Question Bank</a>
                <a href="{{route('exams.index')}}" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>Exams</a>
                @endif    
                </div>
            </article>
            </div>
        </div>
        </div>

                <section class="detail-page">
                <div class="container mt-5">
                    
                </div>
                </section>

    @endsection('content')
    
</body>
</html>