<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
    public function index();
//    public function create($orderId);
    public function store(array $orderDetails);

    public function destroy($id);

    public function update($orderId, array $newDetails);

}
