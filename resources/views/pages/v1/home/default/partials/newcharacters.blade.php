@include('partials.frame.simple-top')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
            Fresh survivors
        </h3>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Level</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @forelse( $characters['fresh'] as $character )
                <tr>
                    <td></td>
                    <td>
                        {!! $character->showLink([
                            'limit' => 13
                        ]) !!}
                    </td>
                    <td>
                        {{$character->level}}
                    </td>
                    <td>
                        {{str_replace('minute','min.',
                            str_replace('minutes','min.',
                                $character->date('created_at')->diffForHumans()
                            )
                        )}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <br><br>
                        No characters yet!
                        <br><br>
                        <br>
                    </td>
                </tr>
            @endforelse

            {{--<tr>--}}
                {{--<td colspan="4" class="text-right">--}}
                    {{--<a href="{{route('halloffame.newbies')}}">--}}
                        {{--See all newbies &raquo;--}}
                    {{--</a>--}}
                {{--</td>--}}
            {{--</tr>--}}

        </tbody>
    </table>
</div>
@include('partials.frame.simple-bottom')