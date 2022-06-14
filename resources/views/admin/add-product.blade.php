@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                ADD PRODUCT
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo '<span class="text-alert" style="color: red">' . $message . '</span>';
                        Session::put('message', null);
                    }
                    ?>
                    <form action="/handle-add-product" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product main image</label>
                            <input type="file" name="product_image" class="form-control" placeholder="Product Image" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product image 1</label>
                            <input type="file" name="product_image1" class="form-control" placeholder="Product Image 1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product image 2</label>
                            <input type="file" name="product_image2" class="form-control" placeholder="Product Image 2" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product image 3</label>
                            <input type="file" name="product_image3" class="form-control" placeholder="Product Image 3" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity</label>
                            <input type="text" name="product_quantity" class="form-control" placeholder="Product Quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" name="product_price" class="form-control" placeholder="Product Price" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Discount ( % )</label>
                            <input type="number" name="product_discount" class="form-control" placeholder="Discount" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Content</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_content" placeholder="Product Content" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Description</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_discription" placeholder="Product Description" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select name="category_id" class="form-control input-sm m-bot15">
                                @foreach($catalog as $key => $option)
                                <option value="{{$option->catalog_id}}">{{$option->catalog_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" name="add_product" class="btn btn-info">Submit</button>

                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection