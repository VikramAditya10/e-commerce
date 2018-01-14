@extends('layout.front.category_product_list.body_content')
@section('banner')


        <!------------------------------- Category Image--------------------------------->
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src={{$image}} alt="Chania" width="100%">
            </div>
        </div>
        <hr/>
        <div class="row"><div class="col-md-12"><h2 align="center">{{$name}}</h2><p>{{$description}}</p></div></div>

        <!--------------------------------------------------------------------------->
        <hr/>
        <div class="row form-group">
            <div class="col-sm-3 ">
                <label ><h3>Size&nbsp;</h3></label>

                <label for="sizeSel"></label><select id="sizeSel" class="form-control">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label><h3>Color&nbsp;</h3></label>
                <label for="colorSel"> </label>
                    <select class="form-control" id="colorSel">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>

            </div>

            <div class="col-sm-3">
                <label><h3>Style&nbsp;</h3></label>
                <select class="form-control" title="">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label><h3>Sort By&nbsp;</h3></label>
                <select class="form-control">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
        </div>
        <hr/>



@endsection