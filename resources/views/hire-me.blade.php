@extends('layout.page')

@section('heading')
    Hire me
@endsection

@section('page-content')

<div class="hire-me col-10">
    @include('inc.messages')
        {!! Form::open(['url'=>'/hire-me/contact']) !!}
        <div class="row">
            <div class="col-6">
                <div class="form-group">{{ Form::text('name','',['placeholder'=>'Your name'])}}</div> 
            </div>
            <div class="col-6">
                    <div class="form-group">{{ Form::text('email','',['placeholder'=>'Email Address'])}}</div> 
                </div>
        </div>
        <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        {{ Form::select('project_type',
                            [''=>'Project type',
                            'Brand Identity'=>'Brand Identity',
                            'Website Design and Development'=>'Web Design and Development',
                            'UI/UX'=>'UI/UX'])
                        }}
                        </div> 
                </div>
                <div class="col-6">
                        <div class="form-group">
                            {{ Form::select('budget',
                                [''=>'Your budget','10,000 - 250,000'=>'100,000 - 250,000',
                                '250,000 - 700,000'=>'250,000 - 700,000',
                                '1Million+'=>'1Million+'])
                            }}</div> 
                    </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {{Form::textArea('message','',['placeholder'=>'Any other messsage(s)'])}}
                    </div>
                    <div class="form-group">
                            {{Form::submit('Send Message')}}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    
</div>
    
@endsection