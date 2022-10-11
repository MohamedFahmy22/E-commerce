@extends('layouts.admin')
@section('content')

<div class="row" style="background-image : url({{asset('assets/admin/images/pexels.jpeg')}}) ; background-repeat: no-repeat; background-size:cover; min-height:600px;">

</div>

@endsection
@section('title')
    الرئيسية
@endsection
@section('contentheader')
    الرئيسية
@endsection
@section('contentheaderlink')
    <a href="{{route('admin.dashboard')}}">الرئيسية</a>
@endsection
@section('contentheaderactive')
    عرض
@endsection
