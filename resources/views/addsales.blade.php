<form method= "post" action="{{route('savesales')}}">
@csrf
  <div class="container">
  
    <label form="Product Sold"><b>Product sold</b></label>
    <input type="text" placeholder="Enter Your Name" name="Product_sold" value="{{$sales->Product_sold}}" >

    <label form="Sale Price"><b>Sale Price</b></label>
    <input type="text" placeholder="Enter Your Sale Price" name="sale_price"  value= "{{$sales->sale_price}}">
    <label form="Discount Price"><b>Discount Price</b></label>
    <input type="text" placeholder="Discount Price" name="discount_price">
   
    <hr>
    <button type="submit">Sale inventory</button>
  </div>

</form>