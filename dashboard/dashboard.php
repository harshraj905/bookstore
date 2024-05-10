<?php include '../db.php'; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="ceKdwoQjZ4VuoGqoSQaSREwB7MD9sjwFnfhlp7MH">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Falak Publications</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="css/vendors/tippy.css">
    <link rel="stylesheet" href="css/vendors/litepicker.css">
    <link rel="stylesheet" href="css/vendors/tiny-slider.css">
    <link rel="stylesheet" href="css/themes/rubick/side-nav.css">
    <link rel="stylesheet" href="css/vendors/leaflet.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <link rel="stylesheet" href="css/components/mobile-menu.css">
    <link rel="stylesheet" href="css/app.css"> <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body>
    <div>
        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge="" class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                    <i data-tw-merge="" data-lucide="x" class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"></i>
                </a>
                <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                    <div class="flex flex-col">
                        <div class="px-8 pb-8 pt-6">
                            <div class="text-base font-medium">Themes</div>
                            <div class="mt-0.5 text-slate-500">Choose your theme</div>
                            <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="image-fit h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/themes/rubick.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        rubick
                                    </div>
                                </div>
                                <div>
                                    <a href="icewall-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="image-fit h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/themes/icewall.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        icewall
                                    </div>
                                </div>
                                <div>
                                    <a href="tinker-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="image-fit h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/themes/tinker.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        tinker
                                    </div>
                                </div>
                                <div>
                                    <a href="enigma-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="image-fit h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/themes/enigma.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        enigma
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pb-8 pt-6">
                            <div class="text-base font-medium">Layouts</div>
                            <div class="mt-0.5 text-slate-500">Choose your layout</div>
                            <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/layouts/side-menu.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        side menu
                                    </div>
                                </div>
                                <div>
                                    <a href="rubick-simple-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/layouts/simple-menu.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        simple menu
                                    </div>
                                </div>
                                <div>
                                    <a href="rubick-top-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="dist/images/layouts/top-menu.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        top menu
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pb-8 pt-6">
                            <div class="text-base font-medium">Accent Colors</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your accent color
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-3.5">
                                <div>
                                    <a data-theme-color="default" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 default"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 default"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-1" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-1"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-1"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-2" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-2"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-2"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-3" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-3"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-4" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-4"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-4"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pb-8 pt-6">
                            <div class="text-base font-medium">Appearance</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your appearance
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-3.5">
                                <div>
                                    <a data-appearance-mode="light" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md bg-slate-200"></div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        Light
                                    </div>
                                </div>
                                <div>
                                    <a data-appearance-mode="dark" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md bg-slate-900"></div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        Dark
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 right-0 z-50 mb-5 mr-5 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-theme-1 text-white shadow-lg" data-tw-toggle="modal" data-tw-target="#theme-switcher">
            <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 w-5 h-5 animate-spin"></i>
        </div>
    </div>
    <div class="rubick px-5 sm:px-8 py-5 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu group top-0 inset-x-0 fixed bg-theme-1/90 z-[60] border-b border-white/[0.08] dark:bg-darkmode-800/90 md:hidden before:content-[''] before:w-full before:h-screen before:z-10 before:fixed before:inset-x-0 before:bg-black/90 before:transition-opacity before:duration-200 before:ease-in-out before:invisible before:opacity-0 [&.mobile-menu--active]:before:visible [&.mobile-menu--active]:before:opacity-100">
            <div class="flex h-[70px] items-center px-3 sm:px-8">
                <a class="mr-auto flex" href="">
                    <img class="w-6" src="dashlogo.png" alt="Midone - Tailwind Admin Dashboard Template">
                </a>
                <a class="mobile-menu-toggler" href="#">
                    <i data-tw-merge="" data-lucide="bar-chart2" class="stroke-1.5 h-8 w-8 -rotate-90 transform text-white"></i>
                </a>
            </div>
            <div class="scrollable h-screen z-20 top-0 left-0 w-[270px] -ml-[100%] bg-primary transition-all duration-300 ease-in-out dark:bg-darkmode-800 [&[data-simplebar]]:fixed [&_.simplebar-scrollbar]:before:bg-black/50 group-[.mobile-menu--active]:ml-0">
                <a href="#" class="fixed top-0 right-0 mt-4 mr-4 transition-opacity duration-200 ease-in-out invisible opacity-0 group-[.mobile-menu--active]:visible group-[.mobile-menu--active]:opacity-100">
                    <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mobile-menu-toggler h-8 w-8 -rotate-90 transform text-white"></i>
                </a>
                <ul class="py-2">
                    <!-- BEGIN: First Child -->
                    <li>
                        <a class="menu menu--active" href="dashboard.php">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Dashboard
                                <div class="menu__sub-icon transform rotate-180">
                                    
                                </div>
                            </div>
                        </a>
                        
                    </li>
                    
                                
                            
                    <li>
                        <a class="menu" href="listing.php">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Manage Products
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a class="menu" href="profile.php">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Manage Profile
                            </div>
                        </a>
                    </li>
                    
                                
                            </li>
                        </ul>
                    </li>
                    <!-- END: First Child -->
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="mt-[4.7rem] flex md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
                <a class="flex items-center pt-4 pl-5 intro-x" href="">
                    <img class="w-6" src="dashlogo.png" alt="Midone - Tailwind Admin Dashboard Template">
                    <span class="hidden ml-3 text-lg text-white xl:block">Falak Publications </span>
                </a>
                <div class="my-6 side-nav__divider"></div>
                <ul>
                    <li>
                        <a href="dashboard.php" class="side-menu side-menu--active">
                            <div class="side-menu__icon">
                                <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180">
                                    
                                </div>
                            </div>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="listing.php" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Manage Products
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Manage Profile
                            </div>
                        </a>
                    </li>
                    
                               
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                <!-- BEGIN: Top Bar -->
                <div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="flex -intro-x mr-auto hidden sm:flex">
                        <ol class="flex items-center text-theme-1 dark:text-slate-300">
                            <li class="">
                                <a href="">Application</a>
                            </li>
                            <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
                                <a href="">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="search intro-x relative mr-3 sm:mr-6">
                        <div class="relative hidden sm:block">
                            <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent ease-in-out text-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-opacity-40 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 w-56 rounded-full border-transparent bg-slate-300/50 pr-8 shadow-none transition-[width] duration-300 focus:w-72 focus:border-transparent dark:bg-darkmode-400/70">
                            <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3 text-slate-600 dark:text-slate-500"></i>
                        </div>
                        <a class="relative text-slate-600 sm:hidden" href="">
                            <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
                        </a>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="mt-5 invisible opacity-0 translate-y-1" data-enter-to="mt-[3px] visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="mt-[3px] visible opacity-100 translate-y-0" data-leave-to="mt-5 invisible opacity-0 translate-y-1" class="search-result absolute right-0 z-10 mt-[3px] hidden">
                            <div class="box w-[450px] p-5">
                                <div class="mb-2 font-medium">Pages</div>
                                <div class="mb-5">
                                    <a class="flex items-center" href="">
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                            <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 h-4 w-4"></i>
                                        </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                                            <i data-tw-merge="" data-lucide="users" class="stroke-1.5 h-4 w-4"></i>
                                        </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-4 w-4"></i>
                                        </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="mb-2 font-medium">Users</div>
                                <div class="mb-5">
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/profile-2.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        </div>
                                        <div class="ml-3">Kevin Spacey</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            kevinspacey@left4code.com
                                        </div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/profile-15.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        </div>
                                        <div class="ml-3">Christian Bale</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            christianbale@left4code.com
                                        </div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/profile-11.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        </div>
                                        <div class="ml-3">Leonardo DiCaprio</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            leonardodicaprio@left4code.com
                                        </div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/profile-12.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        </div>
                                        <div class="ml-3">Leonardo DiCaprio</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            leonardodicaprio@left4code.com
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-2 font-medium">Products</div>
                                <a class="mt-2 flex items-center" href="">
                                    <div class="image-fit h-8 w-8">
                                        <img class="rounded-full" src="dist/images/fakers/preview-5.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-3">Oppo Find X2 Pro</div>
                                    <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                        Smartphone & Tablet
                                    </div>
                                </a>
                                <a class="mt-2 flex items-center" href="">
                                    <div class="image-fit h-8 w-8">
                                        <img class="rounded-full" src="dist/images/fakers/preview-8.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-3">Nike Air Max 270</div>
                                    <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                        Sport & Outdoor
                                    </div>
                                </a>
                                <a class="mt-2 flex items-center" href="">
                                    <div class="image-fit h-8 w-8">
                                        <img class="rounded-full" src="dist/images/fakers/preview-12.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-3">Nikon Z6</div>
                                    <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                        Photography
                                    </div>
                                </a>
                                <a class="mt-2 flex items-center" href="">
                                    <div class="image-fit h-8 w-8">
                                        <img class="rounded-full" src="dist/images/fakers/preview-3.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-3">Oppo Find X2 Pro</div>
                                    <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                        Smartphone & Tablet
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search  -->
                    <!-- BEGIN: Notifications -->
                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative intro-x mr-auto sm:mr-6">
                        <div data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer relative block text-slate-600 outline-none before:absolute before:right-0 before:top-[-2px] before:h-[8px] before:w-[8px] before:rounded-full before:bg-danger before:content-['']"><i data-tw-merge="" data-lucide="bell" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i></div>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-2 w-[280px] p-5 sm:w-[350px]">
                                <div class="mb-5 font-medium">Notifications</div>
                                <div class="cursor-pointer relative flex items-center">
                                    <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                        <img class="rounded-full" src="dist/images/fakers/profile-2.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a class="mr-5 truncate font-medium" href="">
                                                Kevin Spacey
                                            </a>
                                            <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                01:10 PM
                                            </div>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                        <img class="rounded-full" src="dist/images/fakers/profile-15.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a class="mr-5 truncate font-medium" href="">
                                                Christian Bale
                                            </a>
                                            <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                05:09 AM
                                            </div>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-slate-500">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                        <img class="rounded-full" src="dist/images/fakers/profile-11.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a class="mr-5 truncate font-medium" href="">
                                                Leonardo DiCaprio
                                            </a>
                                            <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                05:09 AM
                                            </div>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-slate-500">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                        <img class="rounded-full" src="dist/images/fakers/profile-12.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a class="mr-5 truncate font-medium" href="">
                                                Leonardo DiCaprio
                                            </a>
                                            <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                06:05 AM
                                            </div>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-slate-500">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                        <img class="rounded-full" src="dist/images/fakers/profile-2.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                        <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a class="mr-5 truncate font-medium" href="">
                                                Johnny Depp
                                            </a>
                                            <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                01:10 PM
                                            </div>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-slate-500">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications  -->
                    <!-- BEGIN: Account Menu -->

                    <?php 
  $sql = mysqli_query($conn, "SELECT * FROM admin");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
?>

                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg"><img src="dist/images/fakers/profile-2.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-px w-56 bg-theme-1 text-white">
                                <div class="p-2 font-medium font-normal">
                                    <div class="font-medium"><?php echo $row['email'] ?></div>
                                    
                                </div>
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                                </div>
                                
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                                </div>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5" href="../logout.php"><i data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-9">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 mt-8">
                                <div class="intro-y flex h-10 items-center">
                                    <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                                    <a class="ml-auto flex items-center text-primary" href="">
                                        <i data-tw-merge="" data-lucide="refresh-ccw" class="stroke-1.5 mr-3 h-4 w-4"></i>
                                        Reload Data
                                    </a>
                                </div>
                                <div class="mt-5 grid grid-cols-12 gap-6">
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-tw-merge="" data-lucide="shopping-cart" class="stroke-1.5 h-[28px] w-[28px] text-primary"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="33% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">33%
                                                            <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-6 text-3xl font-medium leading-8">N/A</div>
                                                <div class="mt-1 text-base text-slate-500">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-[28px] w-[28px] text-pending"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="2% Lower than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-danger py-[3px] pl-2 pr-1 text-xs font-medium text-white">2%
                                                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-6 text-3xl font-medium leading-8">N/A</div>
                                                <div class="mt-1 text-base text-slate-500">New Orders</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-tw-merge="" data-lucide="monitor" class="stroke-1.5 h-[28px] w-[28px] text-warning"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="12% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">12%
                                                            <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                        </div>
                                                    </div>
                                                </div>

                        <?php
                        // Query to count rows
                        $sql = "SELECT COUNT(*) as total FROM products";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                           // output data of each row
                            $row = $result->fetch_assoc();
                            
                        } else {
                            
                        }
                        ?>


                                                <div class="mt-6 text-3xl font-medium leading-8"><?php echo $row['total'] ?></div>
                                                <div class="mt-1 text-base text-slate-500">
                                                    Total Products
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-tw-merge="" data-lucide="user" class="stroke-1.5 h-[28px] w-[28px] text-success"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="22% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">22%
                                                            <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php 
  $sql = mysqli_query($conn, "SELECT * FROM visitor_count");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
?>
                                                <div class="mt-6 text-3xl font-medium leading-8"><?php echo $row['total_count'] ?></div>
                                                <div class="mt-1 text-base text-slate-500">
                                                    Unique Visitor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            <!-- BEGIN: Sales Report -->
                            <div class="col-span-12 mt-8 lg:col-span-6">
                                <div class="intro-y block h-10 items-center sm:flex">
                                    <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                                    <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                                        <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                                        <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker !box pl-10 sm:w-56">
                                    </div>
                                </div>
                                <div class="intro-y box mt-12 p-5 sm:mt-5">
                                    <div class="flex flex-col md:flex-row md:items-center">
                                        <div class="flex">
                                            <div>
                                                <div class="text-lg font-medium text-primary dark:text-slate-300 xl:text-xl">
                                                    $15,000
                                                </div>
                                                <div class="mt-0.5 text-slate-500">This Month</div>
                                            </div>
                                            <div class="mx-4 h-12 w-px border border-r border-dashed border-slate-200 dark:border-darkmode-300 xl:mx-5">
                                            </div>
                                            <div>
                                                <div class="text-lg font-medium text-slate-500 xl:text-xl">
                                                    $10,000
                                                </div>
                                                <div class="mt-0.5 text-slate-500">Last Month</div>
                                            </div>
                                        </div>
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative mt-5 md:ml-auto md:mt-0"><button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 font-normal">Filter by Category
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-2 h-4 w-4"></i></button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 h-32 w-40 overflow-y-auto">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">PC & Laptop</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Smartphone</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Electronic</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Photography</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Sport</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative before:content-[''] before:block before:absolute before:w-16 before:left-0 before:top-0 before:bottom-0 before:ml-10 before:mb-7 before:bg-gradient-to-r before:from-white before:via-white/80 before:to-transparent before:dark:from-darkmode-600 after:content-[''] after:block after:absolute after:w-16 after:right-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-white after:via-white/80 after:to-transparent after:dark:from-darkmode-600">
                                        <div class="w-auto h-[275px]">
                                            <canvas id="report-line-chart" class="chart -mb-6 mt-6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Sales Report -->
                            <!-- BEGIN: Weekly Top Seller -->
                            <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                                <div class="intro-y flex h-10 items-center">
                                    <h2 class="mr-5 truncate text-lg font-medium">Weekly Top Seller</h2>
                                    <a class="ml-auto truncate text-primary" href=""> Show More </a>
                                </div>
                                <div class="intro-y box mt-5 p-5">
                                    <div class="mt-3">
                                        <div class="w-auto h-[213px]">
                                            <canvas id="report-pie-chart" class="chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="mx-auto mt-8 w-52 sm:w-auto">
                                        <div class="flex items-center">
                                            <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                            <span class="truncate">17 - 30 Years old</span>
                                            <span class="ml-auto font-medium">62%</span>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                            <span class="truncate">31 - 50 Years old</span>
                                            <span class="ml-auto font-medium">33%</span>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                            <span class="truncate">&gt;= 50 Years old</span>
                                            <span class="ml-auto font-medium">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weekly Top Seller -->
                            <!-- BEGIN: Sales Report -->
                            <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                                <div class="intro-y flex h-10 items-center">
                                    <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                                    <a class="ml-auto truncate text-primary" href=""> Show More </a>
                                </div>
                                <div class="intro-y box mt-5 p-5">
                                    <div class="mt-3">
                                        <div class="w-auto h-[213px]">
                                            <canvas id="report-donut-chart" class="chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="mx-auto mt-8 w-52 sm:w-auto">
                                        <div class="flex items-center">
                                            <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                            <span class="truncate">17 - 30 Years old</span>
                                            <span class="ml-auto font-medium">62%</span>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                            <span class="truncate">31 - 50 Years old</span>
                                            <span class="ml-auto font-medium">33%</span>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                            <span class="truncate">&gt;= 50 Years old</span>
                                            <span class="ml-auto font-medium">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Sales Report -->
                            <!-- BEGIN: Official Store -->
                            <div class="col-span-12 mt-6 xl:col-span-8">
                                <div class="intro-y block h-10 items-center sm:flex">
                                    <h2 class="mr-5 truncate text-lg font-medium">Location</h2>
                                    <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                                        <i data-tw-merge="" data-lucide="map-pin" class="stroke-1.5 absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                                        
                                    </div>
                                </div>
                                <div class="intro-y box mt-12 p-5 sm:mt-5">
                                    <div>
                                    </div>
                                    <div data-lat="23.033863" data-long="72.585022" data-sources="" data-api-key="1e86fd5a7f60486a8e899411776f60d5" class="leaflet z-0 [&_.leaflet-tile-pane]:saturate-[.3] mt-5 h-[310px] rounded-md bg-slate-200">
                                    </div>
                                </div>
                            </div>
                            <!-- END: Official Store -->
                            <!-- BEGIN: Weekly Best Sellers -->
                            <div class="col-span-12 mt-6 xl:col-span-4">
                                <div class="intro-y flex h-10 items-center">
                                    <h2 class="mr-5 truncate text-lg font-medium">
                                        Weekly Best Sellers
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-y">
                                        <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                            <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                <img src="dist/images/fakers/profile-6.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Al Pacino</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    7 December 2020
                                                </div>
                                            </div>
                                            <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                137 Sales
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                            <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                <img src="dist/images/fakers/profile-15.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Denzel Washington</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    14 October 2021
                                                </div>
                                            </div>
                                            <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                137 Sales
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                            <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                <img src="dist/images/fakers/profile-7.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Denzel Washington</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    13 October 2022
                                                </div>
                                            </div>
                                            <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                137 Sales
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                            <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                <img src="dist/images/fakers/profile-13.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Robert De Niro</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    7 August 2022
                                                </div>
                                            </div>
                                            <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                137 Sales
                                            </div>
                                        </div>
                                    </div>
                                    <a class="intro-y block w-full rounded-md border border-dotted border-slate-400 py-4 text-center text-slate-500 dark:border-darkmode-300" href="">
                                        View More
                                    </a>
                                </div>
                            </div>
                            <!-- END: Weekly Best Sellers -->
                            
                            <!-- END: Weekly Top Products -->
                        </div>
                    </div>
                    
            <!-- END: Content -->
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="js/vendors/dom.js"></script>
    <script src="js/vendors/tailwind-merge.js"></script>
    <script src="js/vendors/lucide.js"></script>
    <script src="js/vendors/tippy.js"></script>
    <script src="js/vendors/dayjs.js"></script>
    <script src="js/vendors/litepicker.js"></script>
    <script src="js/vendors/popper.js"></script>
    <script src="js/vendors/dropdown.js"></script>
    <script src="js/vendors/tiny-slider.js"></script>
    <script src="js/vendors/transition.js"></script>
    <script src="js/vendors/chartjs.js"></script>
    <script src="js/vendors/leaflet-map.js"></script>
    <script src="js/vendors/axios.js"></script>
    <script src="js/utils/colors.js"></script>
    <script src="js/utils/helper.js"></script>
    <script src="js/vendors/simplebar.js"></script>
    <script src="js/vendors/modal.js"></script>
    <script src="js/components/base/theme-color.js"></script>
    <script src="js/components/base/lucide.js"></script>
    <script src="js/components/base/tippy.js"></script>
    <script src="js/components/base/litepicker.js"></script>
    <script src="js/components/report-line-chart.js"></script>
    <script src="js/components/report-pie-chart.js"></script>
    <script src="js/components/report-donut-chart.js"></script>
    <script src="js/components/report-donut-chart-1.js"></script>
    <script src="js/components/simple-line-chart-1.js"></script>
    <script src="js/components/base/tiny-slider.js"></script>
    <script src="js/themes/rubick.js"></script>
    <script src="js/components/base/leaflet-map-loader.js"></script>
    <script src="js/components/mobile-menu.js"></script>
    <script src="js/components/themes/rubick/top-bar.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>
</html>