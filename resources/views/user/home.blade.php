@extends('layouts.user')

@section('title', 'Beranda')

@section('content')

@include('user.sections.hero')

@include('user.sections.about')

@include('user.sections.hotel-preview')

@include('user.sections.alur')

@include('user.sections.statistik')

@include('user.sections.testimoni')

@include('user.sections.faq')

@include('user.sections.cta')

@include('user.sections.contact')

@endsection