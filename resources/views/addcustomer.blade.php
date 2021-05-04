<form method= "post" action="{{route('saveCustomer')}}">
@csrf
  <div class="container">
    <h1>Register</h1>
    <p>Please fill the form to register.</p>
    <hr>

    <label form="Product Sold"><b>Product sold</b></label>
    <input type="text" placeholder="Enter Product sold" name="product_sold">

    <label form="CNIC"><b>CNIC</b></label>
    <input type="text" placeholder="Enter Your CNIC" name="CNIC">
    <label form="product Purchase"><b>Product Purchase</b></label>
    <input type="text" placeholder="Enter the product Name which the customer purchase" name="product_purchase">
    <label form="Empolyee id"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter employee id if the customer is employee " name="employee_id">
    <label form="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address " name="Address">
    <hr>
    <button type="submit">Register</button>
  </div>

</form>