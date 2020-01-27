@php
    $brands = array(
       'DearDesigner' => 'http://www.deardesigner.xyz', 
       'Youth Agvocates Nigeria' => 'https://www.instagram.com/youthagvocateng/',
       'FourthCanvas' => 'https://fourthcanvas.co/',
       'Nigeria Risk Awards and Summit' => 'https://www.instagram.com/nrasummit/',
       'Palladium Global Resources' => 'https://palladiumglobal.org/',
       'Agro Strides' => 'https://www.instagram.com/agrostrides/',
       'Markwillows Consulting' => 'Mark Afolabi',
       'Mark Afolabi' => 'https://www.youtube.com/channel/UCZb4vIQr5kXg1n__4KWtlSA',
       'Victor Fa'=> 'https://victorfatanmi.com/',
       'Hult Prize FUTA' => 'https://www.instagram.com/hultprizeatfuta/',
        );

       $tools = array(
       'HTML5',
       'CSS3',
       'JavaScript',
       'jQuery',
       'Laravel',
       'React',
       'Heroku',
       'Netlify',
       'Cloudinary'
    );

    $people = array(
        'Victor Fatanmi',
        'Oladipo Tomide',
        'Samuel Ufere',
        'Adetunji Ogunoye',
        'Ire Aderinokun',
        'Tola Alabi',
        'Bolaji Ayodeji',
        'Praise Philemon',
        'Prosper Otemuyiwa',
        'Aluko Brown',
        'Maduka Emmanuel',
        'Aina Tolulope',
        'Tunde Ogunkule',
        'Mark Afolabi',
        'Precious Fadahunsi',
         );
@endphp

@extends('layout.page')

@section('heading')
    About me
@endsection

@section('page-content')

<div class="about-me col-8">
        I have over the past five(5) years  built identity and websites for small and medium sized enterprises. Over the same period, I have flexed my muscle in the areas of entrepreneurship and starting a business but it has always ended in tears{{'😭'}}: meaning there is a lot I still need to learn in this domain. Presently, 
        I spend all my time and energy in horning my skills as a web developer (Frontend and Backend). Languages and Frameworks I am familiar with include
        
        <div class="row">
            <div class="col-6">
                <p class="sub-heading">Brands I have Worked with</p>

                @foreach ($brands as $brand=>$url)
                
                    <a href="{!! $url !!}" target="_blank" rel='nofollow'>{!! $brand !!}</a> <br /> 
                @endforeach
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                    <p class="sub-heading">Languages and Frameworks</p>
    
                    @foreach ($tools as $tool)
                    
                        <a href="#">{!! $tool !!}</a> <br /> 
                    @endforeach
                </div>
        </div>

        <div class="col-12">
            <p class="sub-heading">Greatly inspired by the following Nigerians</p>

            @foreach ($people as $person)
                <a href="#"> {{$person}} </a>,
            @endforeach
            (the list is growing)
        </div>
</div>
    
@endsection