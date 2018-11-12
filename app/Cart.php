<?php

namespace App;

class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }

    }

    public function add($item, $id){
        $storedItems = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items){
            if (array_key_exists($id, $this->items)) {
                $storedItems = $this->items[$id];
            }
        }
        $storedItems['qty']++;
        $storedItems['price'] = $item->price * $storedItems['qty'];
        $this->items[$id] = $storedItems;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function removeOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if ($this->items[$id]['qty'] <= 0)
        {
            unset($this->items[$id]);
        }
    }

    public function removeAll($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
