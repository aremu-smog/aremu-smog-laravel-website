@extends('layout.page')

@section('heading')
    Portfolio
@endsection

@section('page-content')

<div class="portfolio col-12">
    <div class="row">
        @if(count($portfolio) > 0)
            @foreach ($portfolio as $project)
                <div class="project col-6">
                    <div class="image">
                    <img src="/img/portfolio/{{$project->image}}" alt="{{$project->name}}">
                    </div>
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-9 project_name">{{$project->name}}</div>
                                <div class="col-3 project_url">
                                    <a href="{{$project->url}}" target="_blank">Visit Site <img src="/img/main/link_arrow.svg" alt=""> </a>
                                </div>
                            </div>
                        <div class="project_description">{{$project->description}}</div>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        @endif
    </div>  
</div>
    
@endsection