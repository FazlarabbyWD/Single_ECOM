<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">

            <span class="app-brand-text demo menu-text fw-bolder ms-2">ecom </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Category</span>
        </li>


        <li class="menu-item">
            <a href="{{ route('category.add') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account">Add Category</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('category.list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Notifications">List Category</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Sub Category</span>
        </li>


        <li class="menu-item">
            <a href="{{ route('subcategory.add') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account">Add Sub Category</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('subcategory.list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Notifications">List Sub Category</div>
            </a>
        </li>




        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Product</span>
        </li>


        <li class="menu-item">
            <a href="{{ route('product.add') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account">Add Product</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Notifications">List Product</div>
            </a>
        </li>




        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Order</span>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Order</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('order.list') }}" class="menu-link">
                        <div data-i18n="Account">Manage Order</div>
                    </a>
                </li>


            </ul>
        </li>



    </ul>
</aside>
