<?php include '../db.php'; ?>
<?php include 'dashhead.php'; ?>

<!-- END: Head -->
<body>
    
<div>
        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge="" class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                    <i data-tw-merge="" data-lucide="x" class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"></i>
                </a>
                
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
                        <a href="dashboard.php" class="side-menu">
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
                        <a href="profile.php" class="side-menu side-menu--active">
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
                                <a href="">Manage Profile</a>
                            </li>
                        </ol>
                    </nav>
                </div>


    
    

    

<section>
	<h5 style="text-align: center; padding: 20px;">You Can Update Website Details Here!</h5>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address:</label><br>
    <input type="text" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number:</label>
    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>





   
</body>
</html>

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