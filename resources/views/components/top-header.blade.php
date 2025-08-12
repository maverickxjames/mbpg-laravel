<div class="header__topmenu">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="header__mobileMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>


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
            <div class="col-sm-4">
                <div class="header__toprightmenu">
                    <div class="header__bodythemes">
                        <a href="javascript:;" title="IITM Visual Assist" class="header__bodythemedark"
                            id="dark__theme">A<span class="sr-only">Visual Assist</span></a>
                        <a href="javascript:;" title="IITM Normal" class="header__bodythemewhite"
                            id="white__theme">A<span class="sr-only">Normal</span></a>
                    </div>
                    <div class="header__bodyfontcontrols">
                        <a href="javascript:;" id="decrease_fontSize" class="header__languagesmall"
                            title="IITM Decrease Font Size">A- <span class="sr-only">Decrease Font
                                Size</span></a>
                        <a href="javascript:;" id="reset_fontSize" class="header__languagereset"
                            title="IITM Standard Font Size">A <span class="sr-only">Standard Font
                                Size</span></a>
                        <a href="javascript:;" id="increase__fontSize" class="header__languagelarge"
                            title="IITM Increase Font Size">A+ <span class="sr-only">Increase Font
                                Size</span></a>
                    </div>


                    <ul class="header__language">
                        <li class="menuitem"><a
                                href="https://docs.google.com/forms/d/e/1FAIpQLSd1eUM452iT6lzgFr6o0JQV71cCg426XUpS2TgLoPgI9uEVSg/viewform"
                                class="language-link">Admission
                                Open</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>