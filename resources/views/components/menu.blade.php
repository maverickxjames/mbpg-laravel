<div class="header__bottomsec">
    <div class="container">
        <nav class="navigation__slideShow" aria-label="global header menu">

            

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
              
                {{-- <li class="navigation__submenudropdown ">
                    <a href="javascript:;">About Us</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./academics/overview">Overview</a>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Study @ IITM</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./academics/study-at-iitm/non-campus-bs-programmes">Non-campus
                                        BS programmes</a></li>
                                <li class=""><a
                                        href="./academics/study-at-iitm/undergraduate-programmes">Undergraduate
                                        Programmes</a></li>
                                <li class=""><a
                                        href="./academics/study-at-iitm/postgraduate-programmes">Postgraduate
                                        Programmes</a></li>
                                <li class=""><a
                                        href="./academics/study-at-iitm/research-programmes">Research
                                        Programmes</a></li>
                                <li class=""><a
                                        href="./academics/study-at-iitm/international-interdisciplinary-masters-program-i2mp">International
                                        Masters’ Program (I2MP)</a></li>
                                <li class=""><a
                                        href="./academics/study-at-iitm/joint-degree-programmes">Joint
                                        Degree Programmes</a></li>
                                <li class=""><a
                                        href="./academics/study-at-iitm/exchange-Programmes">Exchange
                                        Programmes</a></li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Departments</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./academics/departments/department-of-aerospace-engineering">Aerospace
                                        Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-applied-mechanics">Applied
                                        Mechanics &amp; Biomedical Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-biotechnology">Biotechnology</a>
                                </li>
                                <li class=""><a
                                        href="./academics/departments/department-of-chemical-engineering">Chemical
                                        Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-chemistry">Chemistry</a>
                                </li>
                                <li class=""><a
                                        href="./academics/departments/department-of-civil-engineering">Civil
                                        Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-computer-science-engineering">Computer
                                        Science and Engineering</a></li>
                                <li class=""><a href="https://dsai.iitm.ac.in/" target="_blank">Data Science
                                        &amp; Artificial Intelligence</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-electrical-engineering">Electrical
                                        Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-engineering-design">Engineering
                                        Design</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-humanities-and-social-sciences">Humanities
                                        and Social Sciences</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-management-studies">Management
                                        Studies</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-mathematics">Mathematics</a>
                                </li>
                                <li class=""><a
                                        href="./academics/departments/department-of-mechanical-engineering">Mechanical
                                        Engineering</a></li>
                                <li class=""><a href="https://mst.iitm.ac.in/" target="_blank">Medical
                                        Science and Technology</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-metallurgical-and-materials-engineering">Metallurgical
                                        and Materials Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-ocean-engineering">Ocean
                                        Engineering</a></li>
                                <li class=""><a
                                        href="./academics/departments/department-of-physics">Physics</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Learning for All</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./academics/learning-for-all/centre-for-outreach-and-digital-education">Centre
                                        for Outreach and Digital Education (CODE)</a></li>
                                <li class=""><a
                                        href="./academics/learning-for-all/national-programme">National
                                        Programme (NPTEL)</a></li>
                                <li class=""><a href="./academics/learning-for-all/global-initiative">Global
                                        Initiative (GIAN)</a></li>
                                <li class=""><a
                                        href="./academics/learning-for-all/teaching-learning-centre">Teaching
                                        Learning Centre</a></li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="./academics/academic-calendar">Academic Calendar</a>
                        </li>
                        <li class=" ">
                            <a href="./academics/academic-curricula">Academic Curricula</a>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Academic Facilities</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./academics/academic-facilities/central-library">Central
                                        Library</a></li>
                                <li class=""><a
                                        href="./academics/academic-facilities/pg-senapathy-computer-centre">P
                                        G Senapathy Computer Centre</a></li>
                                <li class=""><a
                                        href="./academics/academic-facilities/central-skill-training-and-fabrication-facility-cstf">Central
                                        Skill Training and Fabrication Facility (CSTF)</a></li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Academic Services</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a href="./academics/academic-services/timetable">Timetable</a>
                                </li>
                                <li class=""><a href="./academics/academic-services/fees">Fees</a></li>
                                <li class=""><a
                                        href="./academics/academic-services/scholarships-and-financial-assistance">Scholarships
                                        &amp; Financial Assistance</a></li>
                                <li class=""><a
                                        href="./academics/academic-services/ordinances">Ordinances</a></li>
                                <li class=""><a href="./academics/academic-services/transcripts">Transcripts
                                        &amp; Other Academic Services</a></li>
                                <li class=""><a
                                        href="./academics/academic-services/duplicate-degree">Duplicate
                                        Degree</a></li>
                                <li class=""><a
                                        href="./academics/academic-services/orientation-programme">Orientation
                                        Programme</a></li>
                                <li class=""><a href="./academics/academic-services/downloads">Downloads</a>
                                </li>
                                <li class=""><a href="https://www.iitm.ac.in/ie" target="_blank">Inclusive
                                        Education Services</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Academics</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./research/research-highlights">Research Highlights</a>
                        </li>
                        <li class=" ">
                            <a href="./research/research-areas">Research Areas</a>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">National Research Centres</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./research/national-research-centres/indo-german-centre-for-sustainability">Indo-German
                                        Centre for Sustainability</a></li>
                                <li class=""><a
                                        href="./research/national-research-centres/national-cancer-tissue-biobank">National
                                        Cancer Tissue Biobank (NCTB)</a></li>
                                <li class=""><a
                                        href="./research/national-research-centres/national-centre-for-combustion-research-and-development">National
                                        Centre for Combustion Research and Development (NCCRD)</a></li>
                                <li class=""><a
                                        href="./research/national-research-centres/national-technology-centre-for-ports-waterways-and-coasts">National
                                        Technology Centre for Ports, Waterways and Coasts (NTCPWC)</a></li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Institute Research Centres</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./research/institute-research-centres/advanced-manufacturing-technology-development-centre">Advanced
                                        Manufacturing Technology Development Centre (AMTDC)</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/centre-for-computational-brain-research">Centre
                                        for Computational Brain Research</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/centre-of-excellence-in-wireless-technology">Centre
                                        of Excellence in Wireless Technology (CEWiT)</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/centre-for-nems-and-nanophotonics">Centre
                                        for NEMS and Nanophotonics (CNNP)</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/centre-for-railway-research">Centre
                                        for Railway Research</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/centre-for-technology-and-policy">Centre
                                        for Technology and Policy (CTAP)</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/healthcare-technology-innovation-centre">Healthcare
                                        Technology Innovation Centre (HTIC)</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/iitm-china-studies-centre">IITM
                                        China Studies Centre</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/international-centre-for-clean-water">International
                                        Centre for Clean Water (ICCW)</a></li>
                                <li class=""><a
                                        href="./research/institute-research-centres/robert-bosch-centre-for-data-science-and-artificial-intelligence">Robert
                                        Bosch Centre for Data Science and Artificial Intelligence</a></li>
                                <li class=""><a
                                        href="./research/research-centres/ttk-center-rehabilitation-research-and-device-development-r2d2">TTK
                                        Center for Rehabilitation Research and Device Development (R2D2)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Research Facilities</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./research/research-facilities/sophisticated-analytical-instrumentation-centre">Sophisticated
                                        Analytical Instrumentation Centre (SAIF)</a></li>
                                <li class=""><a
                                        href="./research/research-facilities/central-electronics-centre">Central
                                        Electronic Centre (CEC)</a></li>
                                <li class=""><a
                                        href="./research/research-facilities/high-performance-computing-environment">High
                                        Performance Computing Environment (HPCE)</a></li>
                                <li class=""><a href="http://cryoem.iitm.ac.in/" target="_blank">SERB
                                        National Facility for Cryo - Electron Microscopy (CryoEM)</a></li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="./research/iitm-journal">IITM Journal</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Admission</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./innovation/industrial-consultancy">Industrial Consultancy</a>
                        </li>
                        <li class=" ">
                            <a
                                href="./innovation/gopalakrishnan-deshpande-centre-for-innovation-and-entrepreneurship">Gopalakrishnan-Deshpande
                                Centre</a>
                        </li>
                        <li class=" ">
                            <a href="./innovation/technology-transfer">Technology Transfer</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/technology-and-innovation">Centre for Innovation</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Courses</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./research-park/iitm-research-park">IITM Research Park</a>
                        </li>
                        <li class=" ">
                            <a href="./research-park/incubation-cell">Incubation Cell</a>
                        </li>
                        <li class=" ">
                            <a href="./research-park/iit-madras-bioincubator">IITM Bioincubator</a>
                        </li>
                        <li class=" ">
                            <a href="./research-park/iitm-pravartak">IITM Pravartak</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Departments</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./happenings/events">Events</a>
                        </li>
                        <li class=" ">
                            <a href="./happenings/achievements">Achievements</a>
                        </li>
                        <li class=" ">
                            <a href="./happenings/campus-chronicles">Campus Chronicles</a>
                        </li>
                        <li class=" ">
                            <a href="./happenings/campus-news">Campus News</a>
                        </li>
                        <li class=" ">
                            <a href="./happenings/IITM-news">IITM News</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">IQAC NAAC</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./recognitions/distinguished-professors">Distinguished Professors</a>
                        </li>
                        <li class=" ">
                            <a href="./recognitions/institute-professors">Institute Professors</a>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Chair Professors</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./recognitions/chair-professors/iit-madras-chair-professors">IIT
                                        Madras</a></li>
                                <li class=""><a
                                        href="./recognitions/chair-professors/visiting-chair-professors">Visiting</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="./recognitions/faculty-awards">Faculty Awards</a>
                        </li>
                        <li class=" ">
                            <a href="./recognitions/student-awards">Students Awards</a>
                        </li>
                        <li class=" ">
                            <a href="./recognitions/distinguished-alum-awards">Distinguished Alum Awards</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Infrastructure</a>
                    <ul class="navigation__submenu">
                        <li class=" ">
                            <a href="./campus-life/overview">Overview</a>
                        </li>
                        <li class=" ">
                            <a href="https://www.wellnessiitm.com/" target="_blank">Wellness Community
                                Centre</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/hostel-life">Hostel Life</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/student-governance">Student Governance</a>
                        </li>
                        <li class=" ">
                            <a href="https://womensforum.iitm.ac.in/" target="_blank">Women&#039;s Forum</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/sports">Sports</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/clubs">Clubs</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/technology-and-innovation">Technology &amp;
                                Innovation</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/student-activities">Student Activities</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/social-conciousness">Social Consciousness</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/campus-festivals">Campus Festivals</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/campus-publications">Campus Publications</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/campus-amenities">Campus Amenities</a>
                        </li>
                        <li class=" ">
                            <a href="./campus-life/other-facilities">Other Facilities</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Forums</a>
                    <ul class="navigation__submenu">
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">About IIT Madras</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/overview">Overview</a></li>
                                <li class=""><a href="./the-institute/about-iit-madras/mission">Mission</a>
                                </li>
                                <li class=""><a href="./the-institute/about-iit-madras/history">History</a>
                                </li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/milestones">Milestones</a>
                                </li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/heritage-centre">Heritage
                                        Centre</a></li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/archive-of-iit-madras">Archive
                                        of IIT Madras</a></li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/publications">Publications</a>
                                </li>
                                <li class=""><a href="./the-institute/about-iit-madras/nirf">NIRF</a></li>
                                <li class=""><a href="./the-institute/about-iit-madras/ariia">ARIIA</a></li>
                                <li class=""><a href="./the-institute/about-iit-madras/past-directors">Past
                                        Directors</a></li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Administration</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a href="./the-institute/administration/overview">Overview</a>
                                </li>
                                <li class=""><a
                                        href="./the-institute/administration/governing-board">Governing
                                        Board</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/academic-administration">Academic
                                        Administration</a></li>
                                <li class=""><a href="./the-institute/administration/senate">Senate</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/administration-section">Administration
                                        Section</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/building-and-works-committee">Building
                                        and Works Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/central-administration">Central
                                        Administration</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/complaint-committee">Complaint
                                        Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/convenors-and-coordinators">Convenors
                                        and Coordinators</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/engineering-unit">Engineering
                                        Unit</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/finance-committee">Finance
                                        Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/high-power-committee">High
                                        Power Committee - SC/ST</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/high-power-committee-obc">High
                                        Power Committee - OBC</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/institutional-ethics-committee">Institutional
                                        Ethics Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/recruitment-and-promotion-norms">Recruitment
                                        and Promotion Norms</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/right-to-information">Right to
                                        Information</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/technical-committee">Technical
                                        Committee</a></li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="./the-institute/alumni-relations">Alumni and Corporate Relations</a>
                        </li>
                        <li class=" ">
                            <a href="./the-institute/global-engagement">Global Engagement</a>
                        </li>
                        <li class=" ">
                            <a href="./the-institute/climate-action-plan">Climate Action Plan</a>
                        </li>
                        <li class=" ">
                            <a href="./the-strategic-plan">IITM Strategic Plans</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation__submenudropdown ">
                    <a href="javascript:;">Students Corner</a>
                    <ul class="navigation__submenu">
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">About IIT Madras</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/overview">Overview</a></li>
                                <li class=""><a href="./the-institute/about-iit-madras/mission">Mission</a>
                                </li>
                                <li class=""><a href="./the-institute/about-iit-madras/history">History</a>
                                </li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/milestones">Milestones</a>
                                </li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/heritage-centre">Heritage
                                        Centre</a></li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/archive-of-iit-madras">Archive
                                        of IIT Madras</a></li>
                                <li class=""><a
                                        href="./the-institute/about-iit-madras/publications">Publications</a>
                                </li>
                                <li class=""><a href="./the-institute/about-iit-madras/nirf">NIRF</a></li>
                                <li class=""><a href="./the-institute/about-iit-madras/ariia">ARIIA</a></li>
                                <li class=""><a href="./the-institute/about-iit-madras/past-directors">Past
                                        Directors</a></li>
                            </ul>
                        </li>
                        <li class="navigation__innersubmenu ">
                            <a href="javascript:;">Administration</a>
                            <ul class="navigation__submenusecond">
                                <li class=""><a href="./the-institute/administration/overview">Overview</a>
                                </li>
                                <li class=""><a
                                        href="./the-institute/administration/governing-board">Governing
                                        Board</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/academic-administration">Academic
                                        Administration</a></li>
                                <li class=""><a href="./the-institute/administration/senate">Senate</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/administration-section">Administration
                                        Section</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/building-and-works-committee">Building
                                        and Works Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/central-administration">Central
                                        Administration</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/complaint-committee">Complaint
                                        Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/convenors-and-coordinators">Convenors
                                        and Coordinators</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/engineering-unit">Engineering
                                        Unit</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/finance-committee">Finance
                                        Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/high-power-committee">High
                                        Power Committee - SC/ST</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/high-power-committee-obc">High
                                        Power Committee - OBC</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/institutional-ethics-committee">Institutional
                                        Ethics Committee</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/recruitment-and-promotion-norms">Recruitment
                                        and Promotion Norms</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/right-to-information">Right to
                                        Information</a></li>
                                <li class=""><a
                                        href="./the-institute/administration/technical-committee">Technical
                                        Committee</a></li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="./the-institute/alumni-relations">Alumni and Corporate Relations</a>
                        </li>
                        <li class=" ">
                            <a href="./the-institute/global-engagement">Global Engagement</a>
                        </li>
                        <li class=" ">
                            <a href="./the-institute/climate-action-plan">Climate Action Plan</a>
                        </li>
                        <li class=" ">
                            <a href="./the-strategic-plan">IITM Strategic Plans</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</div>