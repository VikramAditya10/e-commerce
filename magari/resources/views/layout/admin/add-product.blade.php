@extends('layout.admin.admin-layout')
@push('scripts')
    <script>
        $(window).on('load',function(){

            var check=document.getElementsByName('size[]');
            check.forEach(function(item)
            {item.onchange=function(){
                if(this.checked) {
                    this.parentElement.nextElementSibling.firstElementChild.disabled = false;
                    this.parentElement.nextElementSibling.firstElementChild.setAttribute('name',this.value);
                    this.parentElement.nextElementSibling.firstElementChild.value=0;
                }
                else
                {
                    this.parentElement.nextElementSibling.firstElementChild.disabled=true;
                    this.parentElement.nextElementSibling.firstElementChild.value=0;
                }
            }});});



    </script>
    <script>
        function validate(){

        var status=true;
            if(document.forms["productForm"]["model"].value=="")
            {
                document.forms["productForm"]["model"].nextElementSibling.innerHTML="Field cannot be empty";
            status=false;

            }
            if(document.forms["productForm"]["name"].value=="")
            {document.forms["productForm"]["name"].nextElementSibling.innerHTML="Field cannot be empty";
            status=false;
            }
            if(document.forms["productForm"]["description"].value=="")
            {
                document.forms["productForm"]["description"].nextElementSibling.innerHTML="Field cannot be empty";
            status=false;
            }

            if(document.forms["productForm"]["price"].value=="")
            {
                document.forms["productForm"]["price"].nextElementSibling.innerHTML="Field cannot be empty";
                status=false;
            }
            if(document.forms["productForm"]["price"].value<0)
            {
                document.forms["productForm"]["price"].nextElementSibling.innerHTML="Price must be positive number";

                status=false;
            }
            if(document.forms["productForm"]["date_available"].value<0)
            {
                document.forms["productForm"]["price"].nextElementSibling.innerHTML="Price must be positive number";

                status=false;
            }
            if(document.forms["productForm"]["style"].value=="")
            {
                document.forms["productForm"]["style"].nextElementSibling.innerHTML="Field cannot be empty";

                status=false;
            }
            if(document.forms["productForm"]["color"].value=="")
            {
                document.forms["productForm"]["color"].nextElementSibling.innerHTML="Field cannot be empty";

                status=false;
            }

            var sizeStatus=false;

            var size=document.getElementsByName("size[]");
            size.forEach(function(item){

                if(item.checked)
                {

                    sizeStatus=true;
                    console.log(sizeStatus);
                if(item.parentElement.nextElementSibling.firstElementChild.value<=0)
                {
                    item.parentElement.nextElementSibling.firstElementChild.nextElementSibling.innerHTML="Quantity must be a positive number";

                    status=false;
                }

                }


            });
            if(!sizeStatus){
                document.forms["productForm"]["size[]"][0].parentElement.nextElementSibling.firstElementChild.nextElementSibling.innerHTML="you must select atleast one size";
                status=false;
            }

            return status;
        }
        </script>
@endpush
@push('scripts')

    <script type="text/javascript">
$(function (){
  $('#addButton').click(function() {
        $('#addimage').append('<tr><td>Select Image</td><td><input type="file" name="addImage[]"></td></tr>');
        });
  $('#add_tech_spec').click(function(){
      $('#tech_spec').append('<tr><td><input type="text" name="tech_attrib_key[]"></td><td><input type="text" name="tech_attrib_value[]"></td></tr>');
  });

        });

    </script>

    <style>
        .Error{
            color:red;
        }

    </style>
    @endpush
@section('content')
    <form action = "/insertproduct" method = "post" name="productForm"  enctype="multipart/form-data" >
        <input type = "hidden" name = "_token" value = "{{ csrf_token()}}">

        <table>
            <tr>
                <td>Model</td>
                <td><input type='text' name='model' /><span class="Error"></span></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name'/><span class="Error"></span></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea rows="10" cols="100" name='description'></textarea><span class="Error"></span></td>
            </tr>

            <tr>
                <td>Image</td>
                <td><input type='file' name='image' /><span class="Error"></span> <img id="image" src="" alt="slected image" />
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type='number' name='price' /><span class="Error"></span></td>
            </tr>
            <tr>
                <td>Date Available</td>
                <td><input type='date' name='date_available' /><span class="Error"></span></td>
            </tr>
            <tr>
                <td>Weight</td>
                <td><input type='number' name='weight' /><span class="Error"></span></td>
            </tr>

            <tr>
                <td>Length</td>
                <td><input type='text' name='length' /><span class="Error"></span></td>
            </tr>
            <tr>
                <td>Width</td>
                <td><input type='text' name='width' /><span class="Error"></span></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="status">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select></td>
            </tr>
            <tr><td>Category</td><td><select name="parent_id">
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
            <tr><td>Style</td><td><input type="text" name="style"><span class="Error"></span></td></tr>
            <tr><td>Color</td><td><input type="text" name="color"><span class="Error"></span></td></tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 3/ EURO 36/ US 5">UK 3/EURO 36/US 5</td>

                <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 4/EURO 37/US 6">UK 4/EURO 37/US 6</td>

                <td><input type="number"  disabled/>Qty.<span class="Error"></span></td>
            </tr>
<tr>
    <td><input type="checkbox" name="size[]" value="UK 6/EURO 39/US 7">UK 6/EURO 39/US 7</td>
    <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>
</tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 7/EURO 41/US 8">UK 7/EURO 41/US 8</td>
                <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>

            </tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 8/EURO 42/US 9">UK 8/EURO 42/US 9</td>
                <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>

            </tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 9/EURO 43/US 10">UK 9/EURO 43/US 10</td>
                <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>

            </tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 10/EURO 44/US 11">UK 10/EURO 44/US 11</td>
                <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>

            </tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 11/EURO 45/US 12">UK 11/EURO 45/US 12</td>
                <td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>

            </tr>
            <tr>
                <td><input type="checkbox" name="size[]" value="UK 14/EURO 49/US 15">UK 14/EURO 49/US 15</td>
<td><input type="number" name="qty[]" disabled/>Qty.<span class="Error"></span></td>
            </tr>
            <tr>
                <td>Tag</td><td><input type="text" name="tag"/><span class="Error"></span></td>

            </tr>
            <tr>
                <td> Meta Description</td>
                <td><textarea rows="10" cols="100" name='meta_description'></textarea><span class="Error"></span></td>
            </tr>

            <tbody id="addimage">

           </tbody>
            <tr><td>Add More Image</td><td><input type="button" value="ADD" id="addButton"></td></tr>
            <tbody id="tech_spec"><tr><td>Specification</td></td><td>Name</td></tr></tbody>
            <tr><td>Add More Specification</td><td><input type="button" value="ADD" id="add_tech_spec"></td></tr>
    <tr>
                <td colspan = '2'>
                    <input type = 'submit' value = "Add product" id="submit"/>
                </td>
            </tr>
        </table>

    </form>
    @endsection