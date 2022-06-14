<!-- Header -->
<header id="home" class="header">
    <div class="navbar fixed-top">
        <!-- <div class="adverts">
            <span>15% off your first purchase</span>
        </div> -->
        <div class="top">
            <a href="#">About</a>
            <a href="/order-tracker">Order tracker</a>
            <a href="#">Newletters Signup</a>
            <?php
            $name = Session::get('user_name');
            $id = Session::get('user_id');
            if (isset($name) && isset($id)) {
            ?>
                <a href="/my-account?id={{$id}}">Welcome {{$name}}</a>
            <?php } else {
            ?>
                <a href="/login-account">Login</a>
            <?php } ?>
        </div>
        <div class="bottom">
            <div class="logo">
                <a href="/"><img src="https://i.pinimg.com/564x/16/71/48/167148d24f8bbcdec890645011ab6086.jpg" alt=""></a>
            </div>
            <div class="options">
                <a href="/mans">Man</a>
                <a href="/womans">Women</a>
                <a href="/kids">Kids</a>
            </div>
            <div class="nav-items">
                <div class="search">
                    <form action="/search" method="get">
                        <input type="search" name="search" id="" placeholder="Search" required>
                        <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <a href="/view-cart"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
</header>