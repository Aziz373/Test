<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function index()
    {
        return Order::all();
    }

    public function store(array $orderDetails)
    {
        $data = $orderDetails;
        return Order::create([
            'details' => $data['detail'],
            'client' => $data['client'],
        ]);
    }

    public function destroy($orderId)
    {
        $order = Order::find($orderId);
        if (!$order){
            return false;
        }
        Order::destroy($orderId);
    }

    public function update($orderId, array $newDetails)
    {
      return  Order::find($orderId)->update($newDetails);
    }

}
