<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container">
        <h2 class="mt-5">Note: After selecting a package you are required to pay the membership fee before proceeding. Thanks!</h2>
        <div class="row mt-4">
            <div class="col-4">
                <a href="/package/a">
                    <div class="card bgorange" style="height: 389px;" id="packageA">
                        <div class="card-body">
                            <h2 class="card-title">Package A</h2>
                            <p><b>Inclusions:</b></p>
                            <ul>
                                <li>Payment Method: Card only (monthly)</li>
                                <li>Show information of grooming and/or boarding details</li>
                                <li>Unfortunately, no products to be sold. (choose Package A or B)</li>
                                <li><b>Price:</b> &#8369;300</li>
                            </ul>
                        </div>
                    </div>        
                </a>
            </div>
            <div class="col-4">
                <a href="/package/b">
                    <div class="card bgteal" id="packageB">
                        <div class="card-body">
                            <h2 class="card-title">Package B</h2>
                            <p><b>Inclusions:</b></p>
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
                <a href="/package/c">
                    <div class="card bblack" id="packageC">
                        <div class="card-body">
                            <h2 class="card-title">Package C</h2>
                            <p><b>Inclusions:</b></p>
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