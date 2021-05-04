<table>
  <tr>
    <th>First Name</th>
    <th>CNIC</th>
    <th>Product Purchase</th>
    <th>Address</th>
    <th>Empolyee ID</th>
  </tr>
  @foreach($customers as $customer)
  <tr>
    <td>{{$customer->First_name}}</td>
    <td>{{$customer->CNIC}}</td>
    <td>{{$customer->Product_Purchase}}</td>
    <td>{{$customer->Address}}</td>
    <td>{{$customer->employee_id}}</td>
    <td> <a href='{{route("deletecustomer" , $customer->id)}}'>delete</a></td>
    <td><a href ='{{route("getcustomer", $customer->id)}}'> get</a></td>
  </tr>
  @endforeach

</table>