<html>
    <head>
        <title>
            Details
        </title>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Telephone No</th>
                <th>NIC</th>
                <th>Gender</th>
                
            </tr>
            @foreach ($data as $x)
               <tr>
                   <td> {{$x[name]}} </td>
                   <td> {{$x[dob]}} </td>
                   <td> {{$x[phone]}} </td>
                   <td> {{$x[NIC]}} </td>
                   <td> {{$x[Gender]}} </td>
               </tr> 

            @endforeach
        </table>
    </body>
</html>

