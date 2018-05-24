@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('sidebar-content')
    <article class="sidebar-article">
        <h5 class="sidebar-article-title">Test</h5>
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a>TestItem</a>
            </li>
            <li class="sidebar-list-item">
                <a>TestItem</a>
            </li>
            <li class="sidebar-list-item">
                <a>TestItem</a>
            </li>
        </ul>
    </article>
    <article class="sidebar-article">
        <h5 class="sidebar-article-title">Test</h5>
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a>TestItem</a>
            </li>
            <li class="sidebar-list-item">
                <a>TestItem</a>
            </li>
            <li class="sidebar-list-item">
                <a>TestItem</a>
            </li>
        </ul>
    </article>
@endsection

@section('content')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">
        Content
    </section>
@endsection
