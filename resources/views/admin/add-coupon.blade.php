@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Create new coupon discount :
            </header>
            <div class="panel-body">

                <div class="position-center">
                    <form action="/handle-add-coupon" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="giftcode_name">Giftcode Name</label>
                            <input type="text" name="giftcode_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="giftcode_times">Times used</label>
                            <input type="text" name="giftcode_times" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="giftcode_condidtion">Type of giftcode</label>
                            <select name="giftcode_condidtion" class="form-control input-sm m-bot15">
                                <option value="1">Discount by percent</option>
                                <option value="2">Direct discount</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="giftcode_discount">Discount price</label>
                            <input type="text" name="giftcode_discount" class="form-control" required>
                        </div>

                        <button type="submit" name="add_product" class="btn btn-info">Submit</button>

                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection