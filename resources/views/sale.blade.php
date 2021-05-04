<table style="width:100%">
  <tr>
    <th>Product Sold</th>
    <th>Sale Price</th>
    <th>Discount Price</th>
  </tr>
  @foreach($sales as $sale)
  <tr>
    <td>{{$sale->Product_sold}}</td>
    <td>{{$sale->sale_price}}</td>
    <td>{{$sale->discount_price}}</td>
  </tr>
  @endforeach
</table>