@extends('layouts.adminlte.default')

@section('title')
    PHPReboot | New article
@endsection

@section('content')
    @include('includes.pageheader', [
        'pageName' => 'New Article',
        'breadcrumb' => [
            ['name' => 'Home', 'url' => 'http://google.com'],
            ['name' => 'Articles', 'url' => 'http://yahoo.com'],
            ['name' => 'New Article', 'url' => ''],
        ]
    ])

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Write a new Article in Markdown format</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
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
                <form role="form" action="/user/article" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Article</label>
                                <textarea name="article" id="article-textarea" class="form-control" rows="20" placeholder="Enter article in Markdown">{{ old('article') }}</textarea></div>
                            <div class="col-md-6">
                                <label>Preview</label>
                                <div id="article-preview"></div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" />
                    <input type="submit" name="save"  class="btn btn-success" value="Publish" />
                    <input type="submit" name="cancel"  class="btn btn-danger" value="Cancel" />
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection

@section('page-script')
    <script src="/js/prism.js"></script>
    <script type="text/javascript">
        function makePreview() {
            var converter = new showdown.Converter();
            showdown.setFlavor('github');
            $("#article-preview").html(
                converter.makeHtml(
                    $("#article-textarea").val()
                )
            );
            Prism.highlightAll()
        }
        $(document).ready(function () {
            $('#article-textarea').on('input selectionchange propertychange', function() {
                makePreview();
            });
            makePreview();
        });
    </script>
@endsection

@section('page-styles')
    <link href="/css/prism.css" rel="stylesheet" />
    <style>
        img {
            display: inline-block;
            max-width: 100%;
            height: auto;
        }
        code {
            background-color: #000;
        }
    </style>
@endsection
