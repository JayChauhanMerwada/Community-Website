{{--

@include('partials.v3.custom-nav', [
    'menu' => [

    ],
    'right' => [

    ]
])

--}}

<nav class="custom-nav navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                @forelse($menu as $item)
                    <?php
                    $active = GameserverApp\Helpers\RouteHelper::isCurrentUrl($item['route']);
                    ?>

                    <li class="{{ $active ? 'active' : '' }}">
                        <a href="{{$item['route']}}">{!! $item['title'] !!}@if($active)<span class="sr-only">(current)</span>@endif</a>
                    </li>
                @empty

                @endforelse
            </ul>

            @isset($right)
                <ul class="nav navbar-nav navbar-right">
                    @forelse($right as $item)
                        <?php
                        $active = GameserverApp\Helpers\RouteHelper::isCurrentUrl($item['route']);
                        ?>

                        <li class="{{ $active ? 'active' : '' }}">
                            <a href="{{$item['route']}}">{!! $item['title'] !!}@if($active)<span class="sr-only">(current)</span>@endif</a>
                        </li>
                    @empty

                    @endforelse
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>