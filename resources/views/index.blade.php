<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel generate barcode</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-primary pt-4  text-center mb-5">Laravel general barcode</h1>
        <div class="row justify-content-md-center">
            <h1 class="pt-4 text-left mb-4"><b>List of Product</b></h1>
            <hr>
            <div class="pb-2">
                <a href="/create" class="btn btn-success">New Post</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <th>{{$product->title}}</th>
                        <th>{{$product->price}}</th>
                        <th>{!! DNS1D::getBarcodeHTML("$product->product_code",'UPCA',2,50)!!}p-{{$product->product_code}}</th>
                        <th>{{$product->description}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>