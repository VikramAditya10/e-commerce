@extends('layout.admin.category.view-category-modal')
@section('edit-category-modal')
    @push('scripts')
<script>
        function showImage(e){
            if (e.files && e.files[0]) {
                e.parentNode.nextSibling.nextSibling.innerHTML=e.value;
                var img=e.parentNode.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling;
                var reader = new FileReader();
                reader.onload = function (dim) {
                img.setAttribute('src',dim.target.result);};
                reader.readAsDataURL(e.files[0]);
            }
}
</script>
    @endpush
    <?php $cat=$categories?>
    @foreach($categories as $category)
        <div  class="modal fade" role="dialog" id=edit{{$category->category_id}}>
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Catgeory Details</h4>
                    </div>
                    <div class="modal-body">

                        <div class="table-reponsive">
                            <form method="POST" action ="/submitupdatecategory" enctype="multipart/form-data" id=form{{$category->category_id}}>
                                <div class="form-group">
                                    <input type="hidden" name = "category_id" value = {{$category->category_id}}/>
                            <table class="table-bordered table-striped table-hover">
                                <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>"/>
                                <tr><td>Parent Name</td><td><select class="form-control" name="parent_id">
                                            <option value="{{$category->parent_id}}">{{$category->parent_name}}</option>
                                             @if($category->parent_id!=0)
                                                <option value="0">--none--</option>
                                            @endif
                                            @foreach($cat as $temp)
                                                @foreach($temp as $key=>$val)
                                                    @if($key==='name')
                                                        <?php $name=$val;?>
                                                    @endif
                                                    @if($key==='category_id')
                                                        <?php $id=$val;?>
                                                    @endif
                                                @endforeach
                                            @if($id!=$category->parent_id)
                                                <option value="{{$id}}">{{ $name }}</option>
                                            @endif
                                                        @endforeach
                                        </select></td></tr>
                                @foreach($category as $key=>$value)

                                    @if($key==='name')
                                        <tr><td>Name</td><td><input class="form-control" name="name" type="text" value={{$value}}></td></tr>
                                    @endif
                                        @if($key==='description')
                                            <tr><td>Description</td><td><textarea class="form-control" cols="10" rows="10" name="description">{{$value}}</textarea></td></tr>
                                        @endif
                                        @if($key==='meta_title')
                                            <tr><td>Meta Title</td><td><input class="form-control" name="meta_title" type="text" value={{$value}}></td></tr>
                                        @endif
                                        @if($key==='meta_description')
                                            <tr><td>Meta Description</td><td><textarea class="form-control" rows="10" cols="10" name="meta_description">{{$value}}</textarea></td></tr>
                                        @endif
                                        @if($key==='meta_keyword')
                                            <tr><td>Meta Title</td><td><input class="form-control" name="meta_keyword" type="text" value={{$value}}></td></tr>
                                        @endif
                                        @if($key==='sort_order')
                                            <tr><td>Sort Order</td><td><input class="form-control" name="sort_order" type="text" value={{$value}}></td></tr>
                                        @endif
                                    @if($key==='status')
                                            <tr><td>Status</td><td><label class="switch">
                                                        @if($value===1)
                                                        <input name="status" type="checkbox" checked>
                                                        @else
                                                            <input name="status" type="checkbox">
                                                        @endif

                                                            <span class="slider round"></span>

                                                    </label> &nbsp;</td></tr>
                                        @endif
                                    @if($key==='image')
                                        <tr><td>Image</td><td><br/><label for="{{$category->category_id}}image" class="btn  btn-primary">Select Image<input style="display:none" type="file" name="image" id="{{$category->category_id}}image" onchange="showImage(this)"></label>&nbsp;&nbsp;<span class='label label-info' id="{{$category->category_id}}upload-file-info"></span><br/></br><img id="{{$category->category_id}}imagedis" class="img-responsive" src={{$value}} ></td></tr>
                                    @endif
                                @endforeach


                                  <tr><td></td></tr>
                            </table>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info" value="Save" form="form{{$category->category_id}}">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection