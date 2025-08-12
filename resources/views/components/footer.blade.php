<style>
    .map{
        width: 500%
    }

    /* for mobile device  */
    @media (max-width: 768px) {
        .map {
            width: 100%;
        }
    }
</style>
<div>
    <footer class="footer">
        <div class="container">
            <!-- Footer User Bar -->
            <div class="footer__breadcrumblist">



                 @php
                $links = DB::table('top_headers')
                ->where('status', 1)
                ->orderBy('sort_order')
                ->get();
                @endphp
               <ul class="header__topleftmenu">
                    @foreach($links as $link)
                    <li>
                        <a href="{{ $link->url }}" @if(str_starts_with($link->url, 'http')) target="_blank" @endif
                            >
                            {{ $link->title }}
                        </a>
                    </li>
                    @endforeach
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
                    <p class="footer__heading">Location</p>
                    <div class="footer__deptrow clearfix">
                        <div class="footer__deptcolm">
                            <ul>
                                <li><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.9483694461596!2d75.83557337605305!3d25.137436334117478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f85164b2fae33%3A0x2809780229a969ea!2sMaa%20Bharti%20PG%20College%20%2C%20Kota!5e0!3m2!1sen!2sin!4v1753502066447!5m2!1sen!2sin" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF-Departments Items -->

            <!-- Statutory links -->
            {{-- <div class="footer__breadcrumblist footer__breadcrumblist--small">
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

            </div> --}}
            <!-- EOF-Statutory links -->

            <!-- Copyright section -->
            <div class="footer__iitlogosec">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="footer__iitlogo" role="img" aria-label="Best College in Kota">
                            <a href="/" width="800" title="Maa Bharti PG College"><img alt="Best College in Kota"
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
                        <h5><a href="https://maverickxjames.me" target="_blank">Jaykishan Rawat</a></h5>

                        <p style="padding-top : 5px; font-size:12px;">
                            Website last updated on: 2025-07-26 10:00:02 AM
                        </p>
                    </div>
                </div>
            </div>
            <!-- EOF-Copyright section -->
        </div>
    </footer>
</div>