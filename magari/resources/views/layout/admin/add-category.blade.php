@extends('layout.admin.admin-layout');
@section('content')
    <div class="form-group">
        <form action="/insertcategory" method="post" enctype="multipart/form-data" >
            <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>"/>
   <table class="table table-hover table-bordered table-striped">
       <tr><td>Image</td> <td><label for="image" class="btn  btn-primary">Select Image<input style="display:none" type="file" name="image" id="image" onchange="$('#upload-file-info').html($(this).val())"></label>&nbsp;&nbsp;<span class='label label-info' id="upload-file-info"></span></td></tr>
    <tr><td>Parent category</td><td><select  class="form-control" name="parent_id">
                <option value="0">--none--</option>
                @foreach($categories as $category)
                    @foreach($category as $key=>$val)
                       @if($key==='name')
                    <?php $name=$val;?>
                        @endif
                    @if($key==='category_id')
                       <?php $id=$val;?>
                        @endif
                    @endforeach
                               <option value="{{$id}}">{{ $name }}</option>
                @endforeach
            </select></td></tr>
       <tr><td>Name</td>
           <td><input class="form-control" type="text" name="name"/>
           </td></tr>

    <tr><td>Sort Order</td><td><input class="form-control" type="number" name="sort_order"></td></tr>
<tr><td>Status</td>
    <td>
        <select class="form-control" name="status"><option value="1">Enable</option>
        <option value="0">Disable</option></select></td></tr>
<tr><td>Description</td><td><textarea class="form-control" cols="10" rows="10" name="description"></textarea></td></tr>
   <tr><td>Meta Title</td><td><input class="form-control" type="text" name="meta_title"/></td></tr>
       <tr><td>Meta Description</td><td><textarea class="form-control" cols="10" rows="10" name="meta_description"></textarea></td></tr>
       <tr><td>Meta Keyword</td><td><input class="form-control" type="text" name="meta_keyword"></td></tr>

   </table>
       <input  class="btn btn-primary input-block-level form-control" type="submit" name="submit" value="Save">
        </form>

    </div>
@endsection
