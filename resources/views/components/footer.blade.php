<div>
    <footer class="footer">
        <div class="container">
            <!-- Footer User Bar -->
            <div class="footer__breadcrumblist">



                <ul class="clearfix">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Research &amp; Innovation</a>
                    </li>
                    <li>
                        <a href="#">NSS</a>
                    </li>
                    <li>
                        <a href="#">NCTE</a>
                    </li>
                    <li>
                        <a href="#">Photo Gallery</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- EOF-Footer User Bar -->

            <!-- Footer To Navigation -->
            <nav class="footer__navigation" aria-label="global footer menu">
                <div class="navigation__slideShow clearfix">

                    <ul class="navigation__menu">
                        @php
                        $menus = DB::table('menus')->whereNull('parent_id')->orderBy('sort_order', 'asc')->get();
                        @endphp
                        @foreach($menus as $menu)
                        @php
                            $submenus = DB::table('menus')->where('parent_id', $menu->id)->orderBy('sort_order', 'asc')->get();
                        @endphp
                        <li class="navigation__submenudropdown">
                            @if($submenus->isEmpty())
                                <a href="{{ $menu->url }}">{{ $menu->title }}</a>
                            @else
                                <a href="javascript:;">{{ $menu->title }}</a>
                                <ul class="navigation__submenu">
                                    @foreach($submenus as $submenu)
                                        @php
                                            $sub_submenus = DB::table('menus')->where('parent_id', $submenu->id)->orderBy('sort_order', 'asc')->get();
                                        @endphp
                                        @if($sub_submenus->isNotEmpty())
                                            <li class="navigation__innersubmenu">
                                                <a href="javascript:;">{{ $submenu->title }}</a>
                                                <ul class="navigation__submenusecond">
                                                    @foreach($sub_submenus as $sub_submenu)
                                                        <li><a href="{{ $sub_submenu->url }}">{{ $sub_submenu->title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="{{ $submenu->url }}">{{ $submenu->title }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
           
                    </ul>
                </div>
            </nav>
            <!-- EOF-Footer To Navigation -->

            <!-- Departments Items -->
            <div class="footer__departments">
                <div class="footer__deptinnersec">
                    <p class="footer__heading">Departments</p>
                    <div class="footer__deptrow clearfix">
                        <div class="footer__deptcolm">
                            <ul>
                                <li><a href="./academics/departments/department-of-aerospace-engineering">Aerospace
                                        Engineering</a></li>
                                <li><a href="./academics/departments/department-of-civil-engineering">Civil
                                        Engineering</a></li>
                                <li><a href="./academics/departments/department-of-humanities-and-social-sciences">Humanities
                                        and Social Sciences</a></li>
                                <li><a href="./academics/departments/department-of-mathematics">Mathematics</a></li>
                            </ul>
                        </div>
                        <div class="footer__deptcolm">
                            <ul>
                                <li><a href="./academics/departments/department-of-applied-mechanics">Applied
                                        Mechanics</a></li>
                                <li><a href="./academics/departments/department-of-computer-science-engineering">Computer
                                        Science and Engineering</a></li>
                                <li><a href="./academics/departments/department-of-management-studies">Management
                                        Studies</a></li>
                                <li><a href="./academics/departments/department-of-ocean-engineering">Ocean
                                        Engineering</a></li>
                            </ul>
                        </div>
                        <div class="footer__deptcolm">
                            <ul>
                                <li><a href="./academics/departments/department-of-biotechnology">Biotechnology</a>
                                </li>
                                <li><a href="https://dsai.iitm.ac.in/" target="_blank">Data Science & Artificial
                                        Intelligence</a></li>
                                <li><a href="./academics/departments/department-of-mechanical-engineering">Mechanical
                                        Engineering</a></li>
                                <li><a href="./academics/departments/department-of-physics">Physics</a></li>
                            </ul>
                        </div>
                        <div class="footer__deptcolm">
                            <ul>
                                <li><a href="./academics/departments/department-of-chemical-engineering">Chemical
                                        Engineering</a></li>
                                <li><a href="./academics/departments/department-of-electrical-engineering">Electrical
                                        Engineering</a></li>
                                <li><a href="https://mst.iitm.ac.in/" target="_blank">Medical Science and
                                        Technology</a></li>
                            </ul>
                        </div>
                        <div class="footer__deptcolm">
                            <ul>
                                <li><a href="./academics/departments/department-of-chemistry">Chemistry</a></li>
                                <li><a href="./academics/departments/department-of-engineering-design">Engineering
                                        Design</a></li>
                                <li><a
                                        href="./academics/departments/department-of-metallurgical-and-materials-engineering">Metallurgical
                                        and Materials Engineering</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF-Departments Items -->

            <!-- Statutory links -->
            <div class="footer__breadcrumblist footer__breadcrumblist--small">
                <div>

                    <div id="block-statutorymenu" data-block-plugin-id="system_menu_block:statutory-menu">
                        <div class="content block-content">

                            <ul>
                                <li>
                                    <a href="./annual-reports" data-drupal-link-system-path="node/78">Annual
                                        Reports</a>
                                </li>
                                <li>
                                    <a href="./annual-accounts" data-drupal-link-system-path="node/79">Annual
                                        Accounts</a>
                                </li>
                                <li>
                                    <a href="./annual-budget" data-drupal-link-system-path="node/14781">Annual
                                        Budget</a>
                                </li>
                                <li>
                                    <a href="./act-and-statutes" data-drupal-link-system-path="node/77">Act and
                                        Statutes</a>
                                </li>
                                <li>
                                    <a href="./quality-policy" data-drupal-link-system-path="node/76">Quality
                                        Policy</a>
                                </li>
                                <li>
                                    <a href="./iso-9001" data-drupal-link-system-path="node/75">ISO 9001:2015</a>
                                </li>
                            </ul>



                        </div>
                    </div>

                </div>

            </div>
            <!-- EOF-Statutory links -->

            <!-- Copyright section -->
            <div class="footer__iitlogosec">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="footer__iitlogo" role="img" aria-label="Best College in Kota">
                            <a href="/" title="Maa Bharti PG College"><img alt="Best College in Kota"
                                    src="{{ asset('images/logo_white.png') }}"></a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>

            <div class="footer__copyright">
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <ul class="clearfix">
                            <li>
                                <a href="./accessibility">Accessibility</a>
                            </li>
                            <li>
                                <a href="./privacy-policy">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="./terms-use">Term of Use</a>
                            </li>
                            <li>
                                <a href="./sitemap">Sitemap</a>
                            </li>
                        </ul>
                        <p>&copy; 2025 <strong>MAA BHARTI PG COLLEGE</strong> - All rights reserved</p>
                    </div>
                    <div class="col-sm-5 col-md-6 text-right">
                        <p>Developed by</p>
                        <h5><a href="/" target="_blank">Jaykishan Rawat</a></h5>

                        <p style="padding-top : 5px; font-size:12px;">
                            Website last updated on: 2025-04-15 20:00:02 PM
                        </p>
                    </div>
                </div>
            </div>
            <!-- EOF-Copyright section -->
        </div>
    </footer>
</div>