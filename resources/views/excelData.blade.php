<table>
    <tr>
        <td colspan="5" style="background:green;color:white;font-size:16px;text-align: center;font-weight: bold;">All Person</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Name</td>
        <td style="border: 1px solid black;">Register No</td>
        <td style="border: 1px solid black;">Date Of Birth</td>
        <td style="border: 1px solid black;">Address</td>
        <td style="border: 1px solid black;">Phone</td>
    </tr>
    @foreach ($persons as $person )
    <tr>
        <td style="border: 1px solid black;">{{$person->name}}</td>
        <td style="border: 1px solid black;">{{$person->reg_no}}</td>
        <td style="border: 1px solid black;">{{$person->dob}}</td>
        <td style="border: 1px solid black;">{{$person->address}}</td>
        <td style="border: 1px solid black;">{{$person->phone}}</td>
    </tr>
    @endforeach
</table>