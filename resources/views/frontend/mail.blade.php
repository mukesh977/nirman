<?php include 'header.php'  ?>
<section class="main-mail sec-padding">
    <div class="container">
        <div class="mail-content">
            <div class="mail-header">
                <span><img src="images/logo.png" alt=""></span>
                <h4>Nirman Tools</h4>
            </div>
            <div class="mail-greetings">
                <h2>Thanks for Your Order</h2>
            </div>
            <div class="mail-body">
                <div class="mail-body-notice">
                    <p><i class="fas fa-info-circle"></i>Your order ID is <strong>#9802</strong>. A summary of your order is shown below. To view the status of your order <a href="#">click here.</a></p>
                </div>
                <div class="mail-body-address">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mba-content">
                                <h4>Billing Address</h4>
                                <ul>
                                    <li><span class="mba-name">Ramesh Rana</span></li>
                                    <li><span class="mba-address">House No. 29, Narayan Tole, SubidhaNagar-7</span></li>
                                    <li><span class="mba-address">Dhapakhel, Satdobato, Lalitpur</span></li>
                                    <li><span class="mba-phone">9860926177</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mba-content">
                                <h4>Shipping Address</h4>
                                <ul>
                                    <li><span class="mba-name">Ramesh Rana</span></li>
                                    <li><span class="mba-address">House No. 29, Narayan Tole, SubidhaNagar-7</span></li>
                                    <li><span class="mba-address">Dhapakhel, Satdobato, Lalitpur</span></li>
                                    <li><span class="mba-phone">9860926177</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mail-body-item">
                    <h4>Your Order Contains ...</h4>
                    <table>
                        <thead>
                            <tr>

                                <th class="product-img">Product</th>
                                <th class="product-name">Product Name</th>
                                <th class="product-code">Product Code</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="product-cart-item">
                                <td class="product-img">
                                    <a href="product-single.php"><img src="images/pro1.png" alt=""></a>
                                </td>
                                <td class="product-name">
                                    <h4><a href="product-single.php">Drill</a></h4>
                                </td>
                                <td class="product-code">
                                    <span>#2028</span>
                                </td>
                                <td class="product-price">
                                    <span>Rs 1200</span>
                                </td>
                                <td class="product-quantity">
                                    <span>2</span>
                                </td>
                                <td class="product-total">
                                    <span>Rs 2400</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="mail-body-item-total">
                    <div class="row">
                        <div class="offset-7 col-lg-5">
                            <div class="mail-body-item-total-calculation">
                                <table>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>Rs 2400</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>Rs 150</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>Rs 2550</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Method</th>
                                        <td>COD</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mail-footer">
                <h6>Nirman Tools</h6>
                <p>
                    <span>Gairigaon-09, Kathmandu, Nepal</span> <br>
                    <span> 9860238587, 9841374259</span>
                    <span>info@nirmantools.com</span>
                </p>
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
                <small><i class="far fa-copyright"></i> <?php echo date('Y'); ?>
                    <a href="#">nirmnantools.com</a>. All Rights Reserved.</small>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'  ?>