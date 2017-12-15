<html>
<body>
<h2>List of all products</h2>
<hr/>
<table style="border:solid 1px black;">
    <tr>

     @foreach($arr as $key=>$value)
        <th style="border:solid 1px black;">{{$key}}</th>
         @endforeach
    </tr>
@foreach($products as $product)
    <tr>
        @foreach($product as $val)
            <td style="border:solid 1px #39ee1a;">{{ $val }}</td>
            @endforeach
    </tr>
         @endforeach
</table>
</body>

</html>