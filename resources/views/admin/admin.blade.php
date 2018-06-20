<!DOCTYPE html>
@extends('layout.layout')

@section('title')
    Admin
@endsection
<style>.wrapper {
        margin: auto !important;
        width: 100% !important;
    }</style>
@section('content')

    @if(Session::has('success'))
        <div class="container">
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        </div>
    @endif
    <div>
        @include('admin.image-gallery')
    </div>

    <hr>

    <div class="container">

        @include('admin.Artikel')

    </div>


@endsection