<html>
<title>Add Product</title>

<body>
<form action = "/insertproduct" method = "post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <table>
        <tr>
            <td>Model</td>
            <td><input type='text' name='model' /></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type='text' name='quantity' /></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type='file' name='image' /></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' /></td>
        </tr>
        <tr>
            <td>Date Available</td>
            <td><input type='text' name='date_available' /></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><input type='text' name='weight' /></td>
        </tr>

        <tr>
            <td>Length</td>
            <td><input type='text' name='length' /></td>
        </tr>
        <tr>
            <td>Width</td>
            <td><input type='text' name='width' /></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><select name="status">
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select></td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Add product"/>
            </td>
        </tr>



    </table>

</form>
</body>

</html>