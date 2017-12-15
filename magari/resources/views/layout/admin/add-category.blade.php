@extends('layout.admin.admin-layout');
@section('content')
    <div>
        <form action="/insertcategory" method="post" enctype="multipart/form-data" >
            <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>"/>
   <table>
       <tr><td>Image</td> <td><input type="file" name="image"></td></tr>
    <tr><td>Parent category</td><td><select name="parent_id">
                <option value="0">--none--</option>
                @foreach($categories as $category)
                    @foreach($category as $key=>$val)
                       @if($key==='name')
                    <?php $name=$val;?>

                    @else
                       <?php $id=$val;?>
                        @endif
                    @endforeach
                               <option value="{{$id}}">{{ $val }}</option>
                @endforeach
            </select></td></tr>
       <tr><td>Name</td>
           <td><input type="text" name="name"/>
           </td></tr>

    <tr><td>Sort Order</td><td><input type="number" name="sort_order"></td></tr>
<tr><td>Status</td>
    <td>
        <select name="status"><option value="1">Enable</option>
        <option value="0">Disable</option></select></td></tr>
<tr><td>Description</td><td><textarea col="5" name="description"></textarea></td></tr>
   <tr><td>Meta Title</td><td><input type="text" name="meta_title"/></td></tr>
       <tr><td>Meta Description</td><td><textarea col="5" name="meta_description"></textarea></td></tr>
       <tr><td>Meta Keyword</td><td><input type="text" name="meta_keyword"></td></tr>
       <tr><td><input type="submit" name="submit" value="Submit"></td></tr>
   </table>
        </form>

    </div>
@endsection
