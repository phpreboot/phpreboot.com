@extends('layouts.adminlte.default')

@section('title')
    PHPReboot | New article
@endsection

@section('content')
    @include('includes.pageheader', [
        'breadcrumb' => [
            ['name' => 'Home', 'url' => 'http://google.com'],
            ['name' => 'Articles', 'url' => 'http://yahoo.com'],
            ['name' => $article->title, 'url' => ''],
        ]
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9 order-1">
                    <div class="card card-primary card-outline">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>{{ $article->title }}</h5>
                                <h6>From: {{ $article->author->name }}
                                    <span class="mailbox-read-time float-right">Published: {{ date('d-M-Y @ H:i A', strtotime($article->published_at)) }}</span></h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <div id="article">{!! $markdown !!}</div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            </p>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <div class="row" id="comment-section">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">Write a comment</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    @if ($errors->any())
                                        <div class="row">
                                            <div class="col">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <h5><i class="icon fas fa-info"></i> Oops! There was problems.</h5>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <form role="form" method="post" action="/article/{{ $article->id }}/comment">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <textarea name="comment" id="comment" class="form-control" rows="5" placeholder="Enter comment">{{ old('comment') }}</textarea>
                                                <div id="comment-word-count">0 / 1000 characters</div>
                                                <div><strong>Why only 1000 Characters?</strong></div>
                                                <div>
                                                    Although we encourage counter view, we do discourage lot of contents (another article as comment) on single page to avoid confusion for readers. This is also the reason for not supporting the markdown in the comments.
                                                </div>
                                                <div>
                                                    If your comment need lot of words or code to express something, better write a new article and provide link to article in comment, with some text describing it in short.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Comment</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>Previous Comments</h4>
                            @foreach ($comments as $comment)
                                <div class="post post-1">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#">{{ $comment->author->name }}</a>
                                    </span>
                                        <span class="description">Shared publicly - {{ $comment->created_at }} PM</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        {{ $comment->comment }}
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm">{{ isset($replyCount[$comment->id]) ? $replyCount[$comment->id] : '0' }} Replies</a>
                                    </p>
                                </div>
                            @endforeach
                            <div class="post post-1">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                    <span class="username">
                                        <a href="#">Kapil Sharma</a>
                                    </span>
                                    <span class="description">Shared publicly - 12/Aug/19 @ 7:45 PM</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>

                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                </p>
                            </div>

                            <div class="post clearfix post-2">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                    <span class="username">
                          <a href="#">Sarah Ross</a>
                        </span>
                                    <span class="description">Sent you a message - 3 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>
                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                                </p>
                            </div>

                            <div class="post clearfix post-3">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                    <span class="username">
                                        <a href="#">Kapil Sharma</a>
                                    </span>
                                    <span class="description">Shared publicly - 12/Aug/19 @ 7:45 PM</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>
                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                                </p>
                            </div>

                            <div class="post clearfix post-4">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                    <span class="username">
                          <a href="#">Sarah Ross</a>
                        </span>
                                    <span class="description">Sent you a message - 3 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>
                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                                </p>
                            </div>

                            <div class="post clearfix post-5">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                    <span class="username">
                                        <a href="#">Kapil Sharma</a>
                                    </span>
                                    <span class="description">Shared publicly - 12/Aug/19 @ 7:45 PM</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>
                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 order-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Article details</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        Author
                                        <span class="float-right">Kapil Sharma</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Published
                                        <span class="float-right">4/Aug/2019</span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        Rating
                                        <span class="float-right">0 / 5 (0 ratings)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Comments
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Comments + Reply
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Like
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Favorite
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Added to list
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Added to magazine
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Share
                                        <span class="float-right">0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-block mb-3">Share</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-block mb-3">Like</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-block mb-3">Comment</a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-block mb-3">Follow the author</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Author details</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        Rating
                                        <span class="float-right">4.67 / 5 (24 ratings)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Total Articles
                                        <span class="float-right">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Registered on
                                        <span class="float-right">8/Feb/2019</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Followers
                                        <span class="float-right">65</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Following
                                        <span class="float-right">65</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Author profile (Opens in new tab)
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')
    <script src="/js/prism.js"></script>
    <script language="JavaScript">
        $('#comment').on('input selectionchange propertychange', function() {
            var comment = $('#comment').val();
            var length = comment.length;
            if (length > 1000) {
                comment = comment.substr(0, 1000);
                $('#comment').val(comment);
                length = 1000;
            }
            // comment-word-count">0 / 1000 characters
            $("#comment-word-count").html(length + " / 1000 characters");
        });
    </script>
@endsection

@section('page-styles')
    <link href="/css/prism.css" rel="stylesheet" />
    <style>
        #article {
            padding: 10px;
        }
        .post-2 {
            margin-left: 50px;
        }
        .post-3 {
            margin-left: 100px;
        }
        .post-4 {
            margin-left: 150px;
        }
        .post-5 {
            margin-left: 200px;
        }
        .post-1 {
            border-top: 1px solid #adb5bd;
            padding-top: 15px;
        }
        .post {
            border-bottom: 0px !important;
            margin-bottom: 0px !important;
        }
    </style>
@endsection
