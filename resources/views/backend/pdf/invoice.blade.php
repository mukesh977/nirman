<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Invoice</title>
</head>

<body>
  <section class="main-invoice sec-padding">
    <div class="main-invoice-paper">
      <div class="mip-title">
        <h4>Invoice</h4>
      </div>
      <div class="mip-meta">
        <ul>
        <li>Invoice Id: <strong>#{{ $invoice->id }}</strong></li>
        <li>Order Id: <strong>#{{ $invoice->order->id }}</strong></li>
        <li>Order Date: <strong>{{ date('d-M Y h:m A', strtotime($invoice->order->created_at)) }}</strong></li>
        </ul>
      </div>
      <div class="mip-table-add">
        <table>
          <thead>
            <tr>

              <th>Bill From</th>
              <th>Ship To</th>

            </tr>
          </thead>
          <tbody>
            <tr>

              <td>
                <ul>
                  <li>Ultrabyte Int'l Pvt Ltd</li>
                  <li> Maitidevi</li>
                  <li> Kathmandu</li>
                  <li> care@ultrabyteit.com</li>
                  <li> Contact : 01-4418141</li>
                </ul>
              </td>
              <td>
                <ul>
                <li>{{ $invoice->order->name }}</li>
                <li> {{ $invoice->order->street_address }}</li>
                <li>525 {{ $invoice->order->city }}</li>
                <li> {{ $invoice->order->email }}</li>
                  <li> Contact: {{ $invoice->order->phone }}</li>
                </ul>
              </td>

            </tr>

          </tbody>

        </table>
      </div>
      <div class="mip-table-meth">
        <table>
          <thead>
            <tr>

              <th>Payment Method</th>
              <th>Shipping Method</th>

            </tr>
          </thead>
          <tbody>
            <tr>

              <td>
                <span>Cash On Delivery</span>
              </td>
              <td>
                <span>Flat Rate - Flat Rate</span>
              </td>

            </tr>

          </tbody>

        </table>
      </div>
      <div class="mip-table-det">
        <table>
          <thead>
            <tr>
              <th class="product-id">Product ID</th>
              <th class="product-name">Product Name</th>
              <th class="product-price">Price</th>
              <th class="product-qty">Quantity</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($ordered_products as $item)
            <tr class="invoice-item-details">
              <td class="product-id">
              <span>{{ (isset($item->sku))?$item->sku:'' }}</span>
              </td>
              <td class="product-name">
              <h4>{{ $item->product }}</h4>
              </td>
              <td class="product-price">
                <span>Rs {{ $item->price }}</span>
              </td>
              <td class="product-qty">
                <span>{{ $item->quantity }}</span>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>

      </div>
      <div class="mip-table-total">
        <div class="invoice-total">
          <h4> Total</h4>
          <table>
            <tbody>
              <tr class="invoice-subtotal">
                <td>Subtotal</td>
                <td class="subtotal-amt">Rs {{ $invoice->order->total_price }}</td>

              </tr>
              <tr class="invoice-total">
                <td>Total</td>
                <td class="total-amt">Rs {{ $invoice->order->total_price }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>



  <style>
    .main-invoice ul {
      margin: 0;
      padding: 0;
    }

    .main-invoice ul li {
      list-style-type: none;
    }

    .main-invoice-paper {
      background-color: white;
      /* padding: 70px 50px;
      margin: 50px 150px; */
      box-shadow: 0px 0px 10px 0px #0000001f;
    }

    .mip-title {
      text-align: center;
      padding-bottom: 20px;
    }

    .mip-title h4 {
      font-size: 40px;
      text-transform: uppercase;
      font-weight: 600;
    }

    .mip-meta {
      padding-bottom: 20px;
    }

    .mip-meta ul li {
      padding-bottom: 7px;
    }

    .mip-meta ul li strong {
      margin-left: 5px;
    }

    .main-invoice-paper table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 30px;
    }

    .main-invoice-paper table thead tr {
      background-color: #f6f9ff;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .main-invoice-paper table thead th {
      padding: 8px;
    }

    .main-invoice-paper table tbody {
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .main-invoice-paper table tbody tr td {
      padding: 12px 8px;
    }

    .mip-table-add tbody tr td,
    .mip-table-meth tbody tr td {
      width: 49%;
    }

    .mip-table-total {
      display: flex;
      justify-content: flex-end;
    }

    .invoice-total {
      margin-top: 10px;
      padding: 15px;
      background-color: #f6f9ff;
      width: 40%;
    }

    .invoice-total h4 {
      font-size: 17px;
      margin-bottom: 10px;
    }

    .invoice-total table {
      border-collapse: collapse;
      width: 100%;
      font-weight: 600;
      padding: 0 20px;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .invoice-total table tbody tr td {
      padding: 5px;
    }
  </style>
</body>

</html>