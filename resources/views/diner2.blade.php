@extends('layouts.diner-layout')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-offcanvas">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <ul class="navbar-nav navbar-top">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" href="#!" id="dropdownExample" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownExample">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right navbar-icon" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
        </button>
        <div class="navbar-collapse collapse ml-auto" id="navbar-mobile">
            <ul class="navbar-nav ml-auto">
                <li class="nav-image">
                    <img src="" alt="">
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link">Link</a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link">Link</a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link">Link</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endsection