<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container text-center">
        <h2>Note: After selecting a package you are required to pay the membership fee before proceeding. Thanks!</h2>
        <h2>Please Select Package</h2>
        <div class="row">
            <div class="col-4">
                <a href="/package-a">
                    <div class="card bgorange">
                        <div class="card-body">
                            <h2 class="card-title">Package A</h2>
                            <h3>Inclusions:</h3>
                        </div>
                    </div>        
                </a>
            </div>
            <div class="col-4">
                <a href="/package-b">
                    <div class="card bgteal">
                        <div class="card-body">
                            <h2 class="card-title">Package B</h2>
                            <h3>Inclusions:</h3>
                            <ul>
                                <li>Payment Method: Card only (monthly)</li>
                                <li>Show information of grooming and/or boarding details</li>
                                <li>Maximum of 10 product entries</li>
                                <li>+20% to the product price for comission</li>
                                <li>Refreshes products once a month(ie: stock, price, details or the product itself)</li>
                                <li><b>Price:</b> &#8369;700</li>
                            </ul>
                        </div>
                    </div>        
                </a>
            </div>
            <div class="col-4">
                <a href="/package-c">
                    <div class="card bblack">
                        <div class="card-body">
                            <h2 class="card-title">Package C</h2>
                            <h3>Inclusions:</h3>
                            <ul>
                                <li>Payment Method: Card only (monthly)</li>
                                <li>Show information of grooming and/or boarding details</li>
                                <li>Maximum of 20 product entries</li>
                                <li>+20% to the product price for comission</li>
                                <li>Refreshes products twice a month(ie: stock, price, details or the product itself)</li>
                                <li><b>Price:</b> &#8369;1000</li>
                            </ul>
                        </div>
                    </div>        
                </a>
            </div>
        </div>
    </div>
</body>
</html>