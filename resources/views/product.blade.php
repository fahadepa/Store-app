<table style="width:100%">
  <tr>
    <th>Product Name</th>
    <th>product ID</th>
    <th>Purchase Date</th>
    <th>Expire Date</th>
  </tr>
  @foreach($products as $product)
  <tr>
    <td>{{$product->Product_name}}</td>
    <td>{{$product->Product_id}}</td>
    <td>{{$product->Purchase_date}}</td>
    <td>{{$product->Expire_date}}</td>
  </tr>
  @endforeach
</table>