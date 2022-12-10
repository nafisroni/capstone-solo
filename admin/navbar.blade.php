<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-icon fs-3">
                <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar-right ms-auto">
                <ul class="navbar-nav align-items-center">

                </ul>
            </div>
            <div class="dropdown dropdown-user-setting">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                    <div class="user-setting d-flex align-items-center gap-3">
                        <img src="assets_admin/images/avatars/avatar-18.png" class="user-img" alt="">
                        <x-app-layout>
                        </x-app-layout>
                    </div>
                </a>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="assets_admin/images/favicon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Wilo Apps</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="">
                    <div class="parent-icon"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label">Utilitas</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                    </div>
                    <div class="menu-title">Destinations</div>
                </a>
                <ul>
                    <li> <a href="{{url('/destination')}}"><i class="bi bi-pencil-square"></i>Input Destinations</a>
                    </li>
                    <li> <a href="{{url('/destinationlist')}}"><i class="bi bi-geo-alt-fill"></i>Destinations List</a>
                    </li>
                    <li> <a href="ecommerce-transactions.html"><i class="bi bi-journal-plus"></i></i>Reviews</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                    </div>
                    <div class="menu-title">Utils</div>
                </a>
                <ul>
                    <li> <a href="{{url('/categorylist')}}"><i class="bi bi-circle"></i>Categories</a>
                    </li>
                    <li> <a href="{{url('/category')}}"><i class="bi bi-circle"></i>Input Categories</a>
                    </li>
                </ul>
            </li>
            <li class="menu-label">UserS</li>
            <li>
                <a class="" href="{{url('/users')}}">
                    <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                    </div>
                    <div class="menu-title">Authentication Users</div>
                </a>
            </li>
            <li>
                <a href="pages-user-profile.html">
                    <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="menu-title">Guide List</div>
                </a>
            </li>
            <li>
                <a class="" href="javascript:;">
                    <div class="parent-icon text-danger"><i class="bi bi-exclamation-triangle-fill"></i>
                    </div>
                    <div class="menu-title">Errors</div>
                </a>
            </li>
            <li>
                <a href="{{url('/faq')}}">
                    <div class="parent-icon"><i class="bi bi-question-lg"></i>
                    </div>
                    <div class="menu-title">FAQ</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </aside>
    <!--end sidebar -->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
</div>
<!--end wrapper-->
<!--start footer-->
<footer class="footer">
    <div class="footer-text">
        Copyright © 2022. Onedash UI.
    </div>
</footer>
<!--end footer-->