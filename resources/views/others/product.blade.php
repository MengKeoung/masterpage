@extends('layouts.main')
@section('title')
Product Page
@endsection

@section('content')
    <p>Product Content</p>
    @for ($i = 0; $i < 10; $i++)
    @include('components.product-ui')
    @endfor
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam natus et, est deserunt accusantium quos, excepturi expedita accusamus quaerat, quidem adipisci doloremque beatae soluta cupiditate perspiciatis aliquam nihil maiores ut.</p>
@endsection