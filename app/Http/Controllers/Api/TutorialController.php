<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tutorials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TutorialController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category', '');

        $page = $request->query('page', 1);

        $cacheKey = 'tutorials_' . $category . '_page_' . $page;

        $tutorials = Cache::remember($cacheKey, now()->addMinutes(30), function () use ($category) {
            $query = Tutorials::select('title', 'pic', 'id', 'category');

            if (!empty($category)) {
                $query->where('category', $category);
            }

            return $query->orderBy('id', 'desc')->paginate(32);
        });

        return response()->json($tutorials);
    }
}

