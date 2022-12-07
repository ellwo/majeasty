<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartOrder;
use App\Models\Cartordernormal;
use App\Models\NormalOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeCotroller extends Controller
{
    //

    public function  index(Request $request){



        if($request->user()->roles()->where('name','admin')->count()<1)
{
    return redirect()->route('Home');
}

else{


       $provisitcount= visits('App\Models\Product')->count();
       $userscount=User::role('custmor')->count();
       $userordercount=Order::count();
       $normalordercount=NormalOrder::count();
       $cartuserorder=CartOrder::count();
       $cartnormalorder=Cartordernormal::count();
        $orderscount=$userordercount+$normalordercount+$cartuserorder+$cartnormalorder;
        $counterorder=[];
        $counterorder[]=[
            'name'=>'طلبات مستخدمين',
            'count'=>$userordercount,
            'persint'=>ceil(($userordercount/$orderscount)*100)
        ];
        $counterorder[]=[
            'name'=>'طلبات غير المسجلين',
            'count'=>$normalordercount,
            'persint'=>ceil(($normalordercount/$orderscount)*100)
        ];
        $counterorder[]=[
            'name'=>'طلبات السلة للمسجلين',
            'count'=>$cartuserorder,
            'persint'=>ceil(($cartuserorder/$orderscount)*100)
        ];
        $counterorder[]=[
            'name'=>'طلبات السلة لغير المسجلين',
            'count'=>$cartnormalorder,
            'persint'=>ceil( ($cartnormalorder/$orderscount)*100)
        ];


        $pro1=Product::withCount('orders as ocount','normalorders as nocount'
            ,'cartorders as cocount','cartordernromals as cncount')

            ->orderByDesc('ocount')->orderByDesc('nocount')->orderByDesc('cocount')->orderByDesc('cncount')->take(5)->get();

        return view('admin.admin-home',compact(
            'provisitcount',
            'userscount','orderscount','pro1','counterorder'));
    }}



    function selectionSort($data)
    {
        $n=count($data);
        $nextSwap=null;     //the index of next min value or max value
        $temp=null;

        for($i=0; $i<$n-1; $i++)//outer loop
        {

            $nextSwap=$i;
            for($j=$i+1; $j<$n; $j++)//inner loop
            {
                if( $data[$j]->sum_qun > $data[$nextSwap]->sum_qun ) //change the < to > for descending order
                {
                    $nextSwap=$j;
                }
            }

            //swap the current index of the outer loop with the next min value
            $temp=$data[$i];
            $data[$i]=$data[$nextSwap];
            $data[$nextSwap]=$temp;
        }

        return $data;
    }
}
