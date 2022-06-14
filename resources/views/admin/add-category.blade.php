@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Create new product catalog :
            </header>
            <div class="panel-body">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert" style="color: red">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="position-center">
                    <form action="/handle-add-catalog" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Category_name">Catalog Name</label>
                            <input type="text" name="Category_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Category_name">Catalog Main</label>
                            <input type="text" name="Category_main" class="form-control" required>
                        </div>

                        <button type="submit" name="add_product" class="btn btn-info">Submit</button>

                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection