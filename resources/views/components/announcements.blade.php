<div class="announcements">
    <div class="container">
        <p class="announcements__text">Announcements</p>
        <div class="marquee__movecotent">
            <div id="marqueeContent" class="marquee__content clearfix">
                @php
                $announcements =
                DB::table('announcements')->where('status',1)->orderBy('id','DESC')->get();
                @endphp
                @foreach($announcements as $announcement)
                <div class="announcements__list">
                    <a href="{{ asset($announcement->link) }}" target="_blank">{{
                        $announcement->topic }}</a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>