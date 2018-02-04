@extends('layout.admin.admin-layout');
@push('scripts')
    <script>
function deleteConfirmation(category_id,callback){
$('#deleteModal').modal({keyboard: true});

    $('#deleteModal button.ok').off().on('click', function() {
        // close window
        $('#deleteModal').modal('hide');
        window.location.href = "deletecategory?id="+category_id;
    });

}
    </script>
    @endpush
@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong>{{session('success')}}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong>{{$errors->first()}}
        </div>
        @endif
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <tr><th class="col-md-2">Name</th>
        <th class="col-md-2">Image</th>
        <th class="col-md-2">Parent</th>
        <th class="col-md-2">Status</th>
        <th class="col-md-2">Action</th></tr>
        @foreach($categories as $category)
        <tr>
            <td class="col-md-2">{{$category->name}}</td>
            <td align="center" class="col-md-2"><img class="img-responsive" src={{$category->image}} ></td>
            <td class="col-md-2">{{$category->parent_name}}</td>
            @if($category->status)
            <td class="col-md-2">Enabled</td>
            @else
                <td class="col-md-2">Disabled</td>
            @endif
            <td class="col-md-3"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=#{{$category->category_id}}>
                    <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-pencil" data-toggle="modal" data-target=#edit{{$category->category_id}}></span>
                </button>


                       <button type="button" class="btn btn-danger"  data-placement="top" onclick="deleteConfirmation({{$category->category_id}})">
                        <span class="glyphicon glyphicon-trash"></span>
                           </button>



            </td>
        </tr>

        @endforeach
    </table>
</div>
   @yield('view-category-modals')
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p><h3>Are you sure you want to delete?</h3></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger ok">Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endsection