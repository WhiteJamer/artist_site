<?php

namespace  App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\models\Art;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $recentArts = Art::getRecentArts(6);
        return view('site.index', ['recentArts' => $recentArts]);
    }

    public function artDetail($id)
    {
        $art = Art::find($id);
        return view('site.arts.detail', ['art' => $art]);
    }
    public function artList()
    {
        $arts = Art::get();
        return view('site.arts.index', ['arts' => $arts]);
    }

    public function loadMoreArts(Request $request)
    {
        /*
         * Подгружает 6 дополнительных артов по запросу( отдает HTML )
         */
        $recentArts = Art::getRecentArts(6);

        if($request->ajax())
        {
            $view = view('site.includes.arts', compact('recentArts'))->render();
            return response()->json(['html' => $view]);
        }
    }
}

