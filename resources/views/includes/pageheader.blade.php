<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $pageName  ?? ''}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrumb as $breadcrumbItem)
                        @if ($breadcrumbItem['url'])
                            <li class="breadcrumb-item">
                                <a href="{{ $breadcrumbItem['url'] }}">{{ $breadcrumbItem['name'] }}</a>
                            </li>
                        @else
                            <li class="breadcrumb-item active">
                                {{ $breadcrumbItem['name'] }}
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
