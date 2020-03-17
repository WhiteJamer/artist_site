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
    public function loadMoreArts(Request $request)
    {
        # Подгружает 6 дополнительных артов по запросу(отдает HTML)
        $recentArts = Art::getRecentArts(6);

        if($request->ajax())
        {
            $view = view('site.arts', compact('recentArts'))->render();
            return response()->json(['html' => $view]);
        }
    }
}

