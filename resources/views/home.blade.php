@extends('layouts.phpreboot')

@section('contents')
    <div class="container-fluid clearfix container-phpreboot container-community">
        <div class="div-center">
            <div class="row justify-content-md-center">
                <h1 class="col-auto welcome text-center">
                    Welcome to
                    <span class="logo-php">PHP</span>
                    <span class="logo-reboot">Reboot</span>
                </h1>
            </div>
            <div class="row justify-content-md-center">
                <h2 class="col-auto text-center">
                    What is PHP Reboot?
                </h2>
            </div>
            <div class="row justify-content-md-center">
                <h2 class="col-auto text-center">
                    PHP Reboot is:
                </h2>
            </div>
        </div>
        <div class="line"></div>
        <div class="row">
            <div class="col">
                <div class="community">
                    <h4 class="subtitle">A community</h4>
                    <h3 class="title"><strong>Of</strong> the developers</h3>
                    <p>Community (leaders) made of developers. You can be community leader too, <a href="#">know more</a>.</p>
                </div>
            </div>
            <div class="col">
                <div class="community">
                    <h4 class="subtitle">A community</h4>
                    <h3 class="title"><strong>By</strong> the developers</h3>
                    <p>Community code is developed by the developers. Start <a href="#">helping in development</a> (Open source project)</p>
                </div>
            </div>
            <div class="col">
                <div class="community">
                    <h4 class="subtitle">A community</h4>
                    <h3 class="title"><strong>For</strong> the developers</h3>
                    <p>Community providing contents for the developers. You can <a href="#">start reading now</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid clearfix container-phpreboot container-whatwedo">
        <div class="div-center">
            <div class="row justify-content-md-center">
                <h2 class="col-auto text-center title">
                    What you can do at PHP Reboot?
                </h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="box-icon">
                                <i class="fas fa-atlas"></i>
                            </div>
                            <h3>Read</h3>
                            <p>Read a collection of great articles from web and blogs on PHP Reboot.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="box-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3>Code</h3>
                            <p>Follow open source PHP Reboot code and learn to write good code.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="box-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Learn</h3>
                            <p>Join the community, attend meetups, webinars and other community events.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="box-icon">
                                <i class="fas fa-blog"></i>
                            </div>
                            <h3>Write</h3>
                            <p>Willing to share your knowledge, make your personal blog on PHP Reboot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid clearfix container-phpreboot container-community">
        <div class="row padding-top-30">
            <div class="col">
                <div class="row justify-content-md-center">
                    <div class="col text-center">
                        <h3>Articles added recently.</h3>
                        <div class="line"></div>
                        <div class="accordion text-left" id="articlesAdded">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#addedOne" aria-expanded="true" aria-controls="addedOne">
                                            Article 1 taken from internet
                                        </button>
                                    </h3>
                                </div>

                                <div id="addedOne" class="collapse show" aria-labelledby="headingOne" data-parent="#articlesAdded">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#addedTwo" aria-expanded="false" aria-controls="addedTwo">
                                            Article two taken form internet
                                        </button>
                                    </h3>
                                </div>
                                <div id="addedTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#articlesAdded">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#addedThree" aria-expanded="false" aria-controls="addedThree">
                                            Article three taken from internet
                                        </button>
                                    </h3>
                                </div>
                                <div id="addedThree" class="collapse" aria-labelledby="headingThree" data-parent="#articlesAdded">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row justify-content-md-center">
                    <div class="col text-center">
                        <h3>Articles published recently.</h3>
                        <div class="line"></div>
                        <div class="accordion text-left" id="articlesPublished">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#publishedOne" aria-expanded="true" aria-controls="publishedOne">
                                            Article one published on PHP Reboot
                                        </button>
                                    </h3>
                                </div>

                                <div id="publishedOne" class="collapse show" aria-labelledby="headingOne" data-parent="#articlesPublished">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#publishedTwo" aria-expanded="false" aria-controls="publishedTwo">
                                            Article two published on PHP Reboot
                                        </button>
                                    </h3>
                                </div>
                                <div id="publishedTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#articlesPublished">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#publishedThree" aria-expanded="false" aria-controls="publishedThree">
                                            Article three published on PHP Reboot
                                        </button>
                                    </h3>
                                </div>
                                <div id="publishedThree" class="collapse" aria-labelledby="headingThree" data-parent="#articlesPublished">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid clearfix container-phpreboot container-whatwedo">
        <div class="div-center">
            <div class="row justify-content-md-center">
                <h3 class="col-auto text-center padding-top-30">
                    Want to have a weekly newsletter in your inbox
                </h3>
            </div>
            <div class="row justify-content-md-center">
                <form action="#" method="post" class="form-inline">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
@endsection
