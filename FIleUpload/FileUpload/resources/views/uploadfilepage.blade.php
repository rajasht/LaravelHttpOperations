<h1>Upload File</h1>

<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="docs"><br><br>
    <button type="submit">Upload</button>
</form>