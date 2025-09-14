<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriteriaController extends Controller
{
 public function criteria1()
{
    // Fetch all records for criteria_no = 1
   // Fetch criteria with indicators and links
    // $criteria_data = DB::table('criteria')
    //     ->where('criteria_no', 'like', '1.%') // only criteria starting with 1.x
    //     ->orderBy('sort_order')
    //     ->get()
    //     ->map(function ($criteria) {
    //         $criteria->indicators = DB::table('indicators')
    //             ->where('criteria_id', $criteria->id)
    //             ->orderBy('sort_order')
    //             ->get()
    //             ->map(function ($indicator) {
    //                 $indicator->links = DB::table('indicator_links')
    //                     ->where('indicator_id', $indicator->id)
    //                     ->orderBy('sort_order')
    //                     ->get();
    //                 return $indicator;
    //             });
    //         return $criteria;
    //     });

    //   $criteria_data = DB::table('criteria')
    //     ->where('criteria_no', 'like', '1.%')
    //     ->orderBy('sort_order')
    //     ->get()
    //     ->map(function ($c) {
    //         $c->indicators = DB::table('indicators')
    //             ->where('criteria_id', $c->id)
    //             ->orderBy('sort_order')
    //             ->get()
    //             ->map(function ($i) {
    //                 $i->links = DB::table('indicator_links')
    //                     ->where('indicator_id', $i->id)
    //                     ->orderBy('sort_order')
    //                     ->get();
    //                 return $i;
    //             });
    //         return $c;
    //     });
    $criteria_data = DB::table('criteria')
    ->where('criteria_no', 'like', '1.%')
    ->orderBy('sort_order')
    ->get();

    $indicators = DB::table('indicators')
    ->whereIn('criteria_id', $criteria_data->pluck('id'))
    ->orderBy('sort_order')
    ->get();

    $links = DB::table('indicator_links')
    ->whereIn('indicator_id', $indicators->pluck('id'))
    ->orderBy('link_group')
    ->orderBy('sort_order')
    ->get();

    // Attach grouped links to indicators & calculate rowspan
    $indicators->map(function ($indicator) use ($links) {
        $groups = $links
            ->where('indicator_id', $indicator->id)
            ->groupBy('link_group')
            ->values(); // group links by link_group

        $indicator->link_groups = $groups;

        // Rowspan = number of unique link_group values (NOT total links)
        $indicator->rowspan = $groups->count();

        return $indicator;
    });

    // Attach indicators to criteria
    $criteria_data->map(function ($criteria) use ($indicators) {
        $criteria->indicators = $indicators
            ->where('criteria_id', $criteria->id)
            ->values();
        return $criteria;
    });

    // return $criteria_data;

    return view('pages.criteria.criteria_1', compact('criteria_data'));

}


    public function criteria2()
    {
        $criteria_data = DB::table('criteria')
            ->where('criteria_no', 'like', '2.%')
            ->orderBy('sort_order')
            ->get();

        $indicators = DB::table('indicators')
            ->whereIn('criteria_id', $criteria_data->pluck('id'))
            ->orderBy('sort_order')
            ->get();

        $links = DB::table('indicator_links')
            ->whereIn('indicator_id', $indicators->pluck('id'))
            ->orderBy('link_group')
            ->orderBy('sort_order')
            ->get();

        // Attach grouped links to indicators & calculate rowspan
        $indicators->map(function ($indicator) use ($links) {
            $groups = $links
                ->where('indicator_id', $indicator->id)
                ->groupBy('link_group')
                ->values(); // group links by link_group

            $indicator->link_groups = $groups;

            // Rowspan = number of unique link_group values (NOT total links)
            $indicator->rowspan = $groups->count();

            return $indicator;
        });

        // Attach indicators to criteria
        $criteria_data->map(function ($criteria) use ($indicators) {
            $criteria->indicators = $indicators
                ->where('criteria_id', $criteria->id)
                ->values();
            return $criteria;
        });


        return view('pages.criteria.criteria_2', compact('criteria_data'));
}

    public function criteria3()
    {
        $criteria_data = DB::table('criteria')
            ->where('criteria_no', 'like', '3.%')
            ->orderBy('sort_order')
            ->get();

        $indicators = DB::table('indicators')
            ->whereIn('criteria_id', $criteria_data->pluck('id'))
            ->orderBy('sort_order')
            ->get();

        $links = DB::table('indicator_links')
            ->whereIn('indicator_id', $indicators->pluck('id'))
            ->orderBy('link_group')
            ->orderBy('sort_order')
            ->get();

        // Attach grouped links to indicators & calculate rowspan
        $indicators->map(function ($indicator) use ($links) {
            $groups = $links
                ->where('indicator_id', $indicator->id)
                ->groupBy('link_group')
                ->values(); // group links by link_group

            $indicator->link_groups = $groups;

            // Rowspan = number of unique link_group values (NOT total links)
            $indicator->rowspan = $groups->count();

            return $indicator;
        });

        // Attach indicators to criteria
        $criteria_data->map(function ($criteria) use ($indicators) {
            $criteria->indicators = $indicators
                ->where('criteria_id', $criteria->id)
                ->values();
            return $criteria;
        });

        return view('pages.criteria.criteria_3', compact('criteria_data'));
    }

    public function criteria4()
    {
         $criteria_data = DB::table('criteria')
            ->where('criteria_no', 'like', '4.%')
            ->orderBy('sort_order')
            ->get();

        $indicators = DB::table('indicators')
            ->whereIn('criteria_id', $criteria_data->pluck('id'))
            ->orderBy('sort_order')
            ->get();

        $links = DB::table('indicator_links')
            ->whereIn('indicator_id', $indicators->pluck('id'))
            ->orderBy('link_group')
            ->orderBy('sort_order')
            ->get();

        // Attach grouped links to indicators & calculate rowspan
        $indicators->map(function ($indicator) use ($links) {
            $groups = $links
                ->where('indicator_id', $indicator->id)
                ->groupBy('link_group')
                ->values(); // group links by link_group

            $indicator->link_groups = $groups;

            // Rowspan = number of unique link_group values (NOT total links)
            $indicator->rowspan = $groups->count();

            return $indicator;
        });

        // Attach indicators to criteria
        $criteria_data->map(function ($criteria) use ($indicators) {
            $criteria->indicators = $indicators
                ->where('criteria_id', $criteria->id)
                ->values();
            return $criteria;
        });

        return view('pages.criteria.criteria_4', compact('criteria_data'));
    }

    public function criteria5()
    {
         $criteria_data = DB::table('criteria')
            ->where('criteria_no', 'like', '5.%')
            ->orderBy('sort_order')
            ->get();

        $indicators = DB::table('indicators')
            ->whereIn('criteria_id', $criteria_data->pluck('id'))
            ->orderBy('sort_order')
            ->get();

        $links = DB::table('indicator_links')
            ->whereIn('indicator_id', $indicators->pluck('id'))
            ->orderBy('link_group')
            ->orderBy('sort_order')
            ->get();

        // Attach grouped links to indicators & calculate rowspan
        $indicators->map(function ($indicator) use ($links) {
            $groups = $links
                ->where('indicator_id', $indicator->id)
                ->groupBy('link_group')
                ->values(); // group links by link_group

            $indicator->link_groups = $groups;

            // Rowspan = number of unique link_group values (NOT total links)
            $indicator->rowspan = $groups->count();

            return $indicator;
        });

        // Attach indicators to criteria
        $criteria_data->map(function ($criteria) use ($indicators) {
            $criteria->indicators = $indicators
                ->where('criteria_id', $criteria->id)
                ->values();
            return $criteria;
        });

        return view('pages.criteria.criteria_5', compact('criteria_data'));
    }

    public function criteria6()
    {
         $criteria_data = DB::table('criteria')
            ->where('criteria_no', 'like', '6.%')
            ->orderBy('sort_order')
            ->get();

        $indicators = DB::table('indicators')
            ->whereIn('criteria_id', $criteria_data->pluck('id'))
            ->orderBy('sort_order')
            ->get();

        $links = DB::table('indicator_links')
            ->whereIn('indicator_id', $indicators->pluck('id'))
            ->orderBy('link_group')
            ->orderBy('sort_order')
            ->get();

        // Attach grouped links to indicators & calculate rowspan
        $indicators->map(function ($indicator) use ($links) {
            $groups = $links
                ->where('indicator_id', $indicator->id)
                ->groupBy('link_group')
                ->values(); // group links by link_group

            $indicator->link_groups = $groups;

            // Rowspan = number of unique link_group values (NOT total links)
            $indicator->rowspan = $groups->count();

            return $indicator;
        });

        // Attach indicators to criteria
        $criteria_data->map(function ($criteria) use ($indicators) {
            $criteria->indicators = $indicators
                ->where('criteria_id', $criteria->id)
                ->values();
            return $criteria;
        });

        return view('pages.criteria.criteria_6', compact('criteria_data'));
    }
    public function criteria7()
    {
         $criteria_data = DB::table('criteria')
            ->where('criteria_no', 'like', '7.%')
            ->orderBy('sort_order')
            ->get();

        $indicators = DB::table('indicators')
            ->whereIn('criteria_id', $criteria_data->pluck('id'))
            ->orderBy('sort_order')
            ->get();

        $links = DB::table('indicator_links')
            ->whereIn('indicator_id', $indicators->pluck('id'))
            ->orderBy('link_group')
            ->orderBy('sort_order')
            ->get();

        // Attach grouped links to indicators & calculate rowspan
        $indicators->map(function ($indicator) use ($links) {
            $groups = $links
                ->where('indicator_id', $indicator->id)
                ->groupBy('link_group')
                ->values(); // group links by link_group

            $indicator->link_groups = $groups;

            // Rowspan = number of unique link_group values (NOT total links)
            $indicator->rowspan = $groups->count();

            return $indicator;
        });

        // Attach indicators to criteria
        $criteria_data->map(function ($criteria) use ($indicators) {
            $criteria->indicators = $indicators
                ->where('criteria_id', $criteria->id)
                ->values();
            return $criteria;
        });

        return view('pages.criteria.criteria_7', compact('criteria_data'));
    }


    public function extended_profile()
    {
        $extended_profile = DB::table('extended_profile')
            ->where('status', 1)
            ->orderBy('sort_order', 'ASC')
            ->get();
        return view('pages.criteria.extended_profile', ['extended_profile' => $extended_profile]);
    }

   
}
