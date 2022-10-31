<li>
    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
        <i class="	fas fa-bread-slice"></i>
        <span class="nav-text">Food Management</span>
    </a>
    <ul aria-expanded="false">

        <li>
            <a href="{{ route('home.insert-menu') }}">Insert Menu (vendor)</a>
        </li>

        <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">View Menu
                (Vendor)</a>
            <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                <a href="{{ route('home.food-menu') }}">Food</a>
                <li><a href="{{ route('home.beverage-menu') }}">Beverage</a></li>

            </ul>
        </li>
        <li>
            <a href="{{ route('home.menu-from-vendor') }}">Menu From Vendor (GA)</a>
        </li>
        <li>
            <a href="{{ route('home.form-feedback') }}"> Form Feedback (Employee)</a>
        </li>
        <li>
            <a href="{{ route('home.confirmed-order') }}"> Confirmed Order (vendor)</a>
        </li>
        <li>
            <a href="{{ route('home.blast-email') }}"> Blast Email (GA)</a>
        </li>
        <li>
            <a href="{{ route('home.food-order') }}"> Food Order (Employee)</a>
        </li>
        <li>
            <a href=" {{ route('home.customer-feedback') }}"> Customer Feedback (Vendor)</a>
        </li>
    </ul>
</li>
