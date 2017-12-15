<html>
<body>
<form method="POST" action="/fileuploadaction" enctype="multipart/form-data">
<input type="hidden" value="{{csrf_token()}}" name="_token">
    <input type="file" name="filename">
<br>
<input type="submit" value="Submit"/>
</form>
</body>
</html>