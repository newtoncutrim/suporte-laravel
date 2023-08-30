@extends('admin.template.template')


@section('title', 'Listagem')
@section('header')
    @include('admin.supports.partials.header')
@endsection

@section('content')
@include('admin.supports.partials.content')
<x-paginate :paginator="$supports"/>




@endsection
