<h1>Student List</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>

    @foreach($data as $i)
    <tr>
        <td>$i{{'id'}}</td>
        <td>$i{{'first_names'}}</td>
        <td>$i{{'email'}}</td>
        <td><img src={{$i['avatar']}} /></td>
        
    </tr>
    @endforeach
</table>
