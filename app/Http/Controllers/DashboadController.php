<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboadController extends Controller
{
    public function index(){

        $from = Carbon::today()->startOfDay();
        $to = Carbon::today()->endOfDay();

        //select count(*) as 'new_order' from `order`
        //WHERE `created_at` >= '2022-12-17 00:00:00' AND `created_at` <= '2022-12-17 23:59:59';
        $newOrder = Order::whereBetween('created_at', [$from, $to])->get()->count();

        //SELECT count(*) as 'order_pending' FROM `order` where status = 'pending';
        $orderPending = Order::where('status', Order::STATUS_PENDING)->get()->count();
        $orderShipping = Order::where('status', Order::STATUS_SHIPPING)->get()->count();
        $orderDone = Order::where('status', Order::STATUS_DONE)->get()->count();
        $orderCancel = Order::where('status', Order::STATUS_CANCEL)->get()->count();

        //SELECT count(*), DATE_FORMAT(created_at, '%Y%m') FROM `order` GROUP BY DATE_FORMAT(created_at, '%Y%m');
        $chartMonth = DB::table('order')
        ->select(DB::raw("count(*) as order_total, YEAR(created_at) as year, MONTH(created_at) as month"))
        // ->where(DB::raw("YEAR(created_at)"), '=', Carbon::now()->year)
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y%M')"))
        ->get();

        // dd($chartMonth->toArray());

        return view('admin.report.dashboard', compact('newOrder', 'orderPending', 'orderShipping', 'orderDone', 'orderCancel','chartMonth'));
    }
}
