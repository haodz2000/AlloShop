<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            margin: 0 auto;
            width: 500px;
            padding-top: 15px;
        }
        .table  h3{
            margin: 20px auto;
            text-align: center;
        }
        .table{
            margin: 0 auto;
            padding: 2px
        }
        .table table,thead,tbody,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            box-sizing: border-box;
        }
        .table th,td{
            text-align: center;
            padding: 10px;
        }
        span{
            margin: 0 auto;
            padding: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>AlloShop Order</h3>
    <div class="table">
        <h2>Đơn hàng số:{{ $order->order_id }}</h2>
        <h3>Chi tiết đơn hàng</h3>
        <table>
            <thead>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Size</th>
                <th>Color</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($cart))
                <?php $count = 1; ?>
                @foreach($cart->products as $item)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$item['productInfo']->product_name}}</td>
                        <td>{{ $item['size'] }}</td>
                        <td>{{ $item['color'] }}</td>
                        <td>{{$item['productInfo']->price}}</td>
                        <td>{{$item['quantity']}}</td>
                        <td>{{number_format($item['price'],2)}}$</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            <tr>
                <td colspan="6"><strong>Tổng Sản Phẩm</strong>:</td>
                <td><strong>{{$cart->totalQuantity}}</strong></td>
            </tr>
            <tr>
                <td colspan="6"><strong>Tổng Tiền</strong></td>
                <td><strong>{{number_format($cart->totalPrice,2)}}$</strong></td>
            </tr>
        </table>
    </div>
    <h3>Mã kiểm tra đơn hàng : <strong>{{$order->key_token}}</strong></h3>
    <h3>Địa chỉ: {{ $order->address }}</h3>
    <h3>Note:{{ $order->note }}</h3>
</div>
</body>
</html>
