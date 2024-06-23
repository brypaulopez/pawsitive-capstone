<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container mt-5">
        <form action="/payment-success" method="POST" class='row borange'>
            @csrf
            <h2 class='hcyan'>Account creation</h2>
             <div class='col-md-6'>
                 <label for='first-name'>Name</label>
                 <input type='text' name="fname" class='form-control' required>
             </div>
             <div class='col-md-6'>
                 <label for='last-name'>Last Name</label>
                 <input type='text' name="lname" class='form-control' required>
             </div>
             <div class='col-md-6'>
                 <label for='address1'>Email</label>
                 <input type='text' name="email" class='form-control' required>
             </div>
             <div class='col-md-6'>
                 <label for='address2'>Password</label>
                 <input type='password' name="password" class='form-control'>
             </div>
             <h3 class='hpink mt-4'>Payment</h3>
             <div class='col-md-5 mt-0'>
                 <label for='card-number'>Card Number</label>
                 <input type='number' class='form-control' placeholder='0000 0000 0000 0000' id='card-number' required>
             </div>
             <div class='col-md-3 mt-0'>
                 <label for='card-expiry'>Expiry Date</label>
                 <input type='date' class='form-control' placeholder='MM/YY' id='card-expiry' required>
             </div>
             <div class='col-md-2 mt-0'>
                 <label for='card-cvv'>CVV</label>
                 <input type='number' class='form-control' placeholder='CVV' id='card-cvv' required>
             </div>
             <div class='col-12'>
                 <div class='form-check'>
                   <input class='form-check-input' type='checkbox' value='' id='invalidCheck' required>
                   <label class='form-check-label' for='invalidCheck'>
                     Agree to terms and conditions
                   </label>
                   <div class='invalid-feedback'>
                     You must agree before submitting.
                   </div>
                 </div>
             </div>
             <div class='col-12 text-center'>
                     <button type='submit' class='btn bgteal w-100 mb-2'>Purchase</button>
             </div>
         </form>
    </div>
</body>
</html>