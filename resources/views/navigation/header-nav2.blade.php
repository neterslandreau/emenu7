<nav class="navbar navbar-expand-md navbar-dark bg-custom navbar-offcanvas navbar-fixed-top">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">eMenu</a>

            <ul class="navbar-nav navbar-top">

                <li class="nav-item">
                    <a class="nav-link" title="Home" href="/">
                        <span class="fas fa-home col-sm-1"></span>
                        <span class="col-sm-1">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" title="About" data-toggle="modal" data-target="#about">
                        <span class="fas fa-info-circle col-sm-1"></span>
                        <span class="col-sm-1">About</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" title="Contact" data-toggle="modal" data-target="#contact">
                        <span class="fas fa-phone-square col-sm-1"></span>
                        <span class="col-sm-1">Contact</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" title="Shopping Cart" data-toggle="modal" data-target="#cart">
                        <span class="fas fa-shopping-cart col-sm-1">
                            <span class="badge badge-notify"></span>
                        </span>
                        <span class="col-sm-1">Cart</span>
                    </a>
                </li>

            </ul>

        <button class="navbar-toggler navbar-toggler-right navbar-icon navbar-dark" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar bar1" style="background-color: #000;"></span>
            <span class="icon-bar bar2" style="background-color: #000;"></span>
            <span class="icon-bar bar3" style="background-color: #000;"></span>
        </button>

    <div class="navbar-collapse collapse" style="overflow-y: auto;">

        <ul class="navbar-nav ml-auto">
{{-- --
                <li class="nav-image">
                    <img src="" alt="">
                </li>
{{-- --}}
            <li>
                @foreach ($menuItems as $mi => $menuItem)
                <div id="accordian_{{ $mi }}">

                    <div class="card">

                        <div class="card-header" id="heading_{{ $menuItems[$mi]->typeSlug }}">

                        <h5 class="mb-0">

                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{ $menuItems[$mi]->typeSlug }}" aria-expanded="true" aria-controls="collapse_{{ $menuItems[$mi]->typeSlug }}">

                                {{ $menuItems[$mi]->typeName }}

                            </button>

                        </h5>

                        </div>

                        <div id="collapse_{{ $menuItems[$mi]->typeSlug }}" class="collapse" aria-labelledby="heading_{{ $menuItems[$mi]->typeSlug }}" data-parent="#accordian_{{ $mi }}">

                            <div class="card-body">

                            @include('partials.sidebar-items')

                            </div>

                        </div>
                    </div>

                </div>
                @endforeach

            </li>
        </ul>
    </div>
</nav>

@foreach ($menuItems as $mi => $menuItem)

    @foreach ($menuItem as $item)

        @include('partials.modal', ['item' => $item])


    @endforeach

@endforeach

@include('partials.about')

@include('partials.cart')

@include('partials.contact')


