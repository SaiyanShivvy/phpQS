<style type="text/css">
    .list-group {
        margin:auto;
        float:left;
        padding-top:20px;
    }
</style>

<div class="list-group">
    <a href="{{route('admin.dashboard')}}" class="list-group-item"><i class="fa fa-id-card" aria-hidden="true"></i> <span>Dashbaord</span></a>
    <a class="list-group-item" data-remote="true" href="#product-menu" id="products" data-toggle="collapse" data-parent="#product-menu">
        <i class="fa fa-gift" aria-hidden="true"> </i><span>Products</span>
        <span class="menu-ico-collapse"><i class="fa fa-chevron-down"></i></span>
    </a>
    <div class="collapse list-group-submenu" id="product-menu">
        <a href="{{route('admin.products')}}" class="list-group-item sub-item" data-parent="#product-menu">Index</a>
        <a href="{{route('product.create')}}" class="list-group-item sub-item" data-parent="#product-menu">Create</a>
    </div>
    {{--<a href="#" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Support</span></a>--}}
    {{--<a href="#" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Sandbox Account</span></a>--}}
    {{--<a href="#" class="list-group-item"><i class="fa fa-book"></i> <span>QuickStart Overview</span></a>--}}
    {{--<a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Documentation</span></a>--}}
</div>
