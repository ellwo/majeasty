@props(['name'=>'','desc'=>'','img'=>'','price'=>'','url'=>''])

    <meta name="description" content="{{$desc}}  {{$name}}"/>
    <meta itemprop="name" content="{{$name}} "/>
    <meta itemprop="image" content="{{$img}}"/>

    <meta property="og:title" content="{{ $name }}"/>
    <meta property="og:image" content="{{$img}}">
    <meta property="og:description" content="{{ $desc }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_us" />

    <meta property="og:sitename" content="{{ env('APP_NAME')}}" />
    <meta property="og:url" content="{{ $url}}"/>
    <link rel="icon" href="{{ config('mysetting.logo') }}">
