@extends('layout.admin.admin-layout')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">


        <tr>

            @foreach($arr as $key=>$value)
                <th style="border:solid 1px black;">{{$key}}</th>
            @endforeach
        </tr>
        @foreach($products as $product)
            <tr>
                @foreach($product as $val)
                    <td>{{ $val }}</td>
                @endforeach
            </tr>
        @endforeach
        </table>
    </div>
    @endsection