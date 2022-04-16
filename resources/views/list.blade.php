<h1 align="center"><u>List of members</u></h1>


<table border="1" align="center"> 
    <tr>
        <td>name</td>
        <td>age</td>
        <td>number</td>
        <td>email</td>
        <td>college_name</td>
        <td>gender</td>
        <td>city</td>
    </tr>
    @foreach($registers as $register)
    <tr>
        <td>{{$register['name']}}</td>
        <td>{{$register['age']}}</td>
        <td>{{$register['number']}}</td>
        <td>{{$register['email']}}</td>
        <td>{{$register['college_name']}}</td>
        <td>{{$register['gender']}}</td>
        <td>{{$register['city']}}</td>
    </tr>
    @endforeach
</table>
