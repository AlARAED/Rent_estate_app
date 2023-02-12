<?php

namespace App\Http\Controllers;

use App\Exports\ExportOrder;
use App\Models\Order;
use Maatwebsite\Excel\Facades\Excel;

class ExportXlsController extends Controller
{

    public function ExportOrder()
    {
//        $orders = Order::get();
//
//        $ordersList = [];
//
//        foreach ($orders as $key => $order) {
//
//            $ordersList[] = [
//                'ID' => ++$key,
//                'serial_number' => $order->serial_number,
//                'user' => $order->user ? $order->user->name : '-',
//                'phone' => $order->phone,
//                'price' => $order->price,
//                'price_currency' => $order->price_currency,
//                'exchange_rate' => $order->exchange_rate,
//                'service_id' => $order->service ? $order->service->name : '-',
//                'coin_id' => $order->coin ? $order->coin->name : '-',
//                'sender_name' => $order->sender_name,
//                'sender_address' => $order->sender_address,
//                'note' => $order->note,
//                'status' => Order::statusList($order->status),
//
//            ];
//        }
//
//        return Excel::download(new ExportOrder($ordersList), 'reports.xlsx');
    }

}
