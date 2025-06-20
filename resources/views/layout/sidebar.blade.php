<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ url('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Snacked</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class="bi bi-list"></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
                <div class="menu-title">Books Management</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.issued.books') }}"><i class="bi bi-circle"></i>Issued Book List</a></li>
                <li><a href="{{ route('admin.available.books') }}"><i class="bi bi-circle"></i>Available Books</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0)">
                <div class="parent-icon"><i class="bi bi-tags"></i></div>
                <div class="menu-title">Book Categories</div>
            </a>
            <ul>
                <li><a href="#"><i class="bi bi-circle"></i>Category List</a></li>
                <li><a href="#"><i class="bi bi-circle"></i>Add Category</a></li>
                <li><a href="#"><i class="bi bi-circle"></i>Subcategories</a></li>
                <li><a href="#"><i class="bi bi-circle"></i>Add Subcategory</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="menu-title">Authors</div>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)">
                <div class="parent-icon"><i class="bi bi-book-half"></i></div>
                <div class="menu-title"> Borrowing</div>
            </a>
            <ul>
                <li><a href="#"><i class="bi bi-arrow-right-circle"></i>Issue Books</a></li>
                <li><a href="#"><i class="bi bi-arrow-left-circle"></i>Return Books</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-clock-history"></i></div>
                <div class="menu-title">Transaction History</div>
            </a>
        </li>

        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-bar-chart-line"></i></div>
                <div class="menu-title">Reports</div>
            </a>
        </li>

        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-gear"></i></div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
