@extends('layout.admin.category.update-category-list')
@section('view-category-modals')
    @foreach($categories as $category)
<div  class="modal fade" role="dialog" id={{$category->category_id}}>
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Catgeory Details</h4>
            </div>
            <div class="modal-body">

                    <div class="table-reponsive">
                        <table class="table-bordered table-striped table-hover">
                            @foreach($category as $key=>$value)
                                @if($key!='category_id'&&$key!='parent_id'&&$key!='image'&$key!='status')
                                <tr><td>{{$key}}</td><td>{{$value}}</td></tr>
                       @endif
                                @if($key==='status'&&$value)
                                        <tr><td>{{$key}}</td><td>Enabled</td></tr>
                                    @endif
                                    @if($key==='status'&&!$value)
                                        <tr><td>{{$key}}</td><td>Disabled</td></tr>
                                    @endif
                                    @if($key==='image')
                                        <tr><td>{{$key}}</td><td align="center" ><img class="img-responsive" src={{$value}} ></td></tr>
                                    @endif
                        @endforeach
                        </table>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
@endforeach
    @yield('edit-category-modal')
    @endsection