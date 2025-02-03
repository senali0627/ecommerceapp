<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Helpers\CartManagement;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;
use Stripe\Stripe;


#[Title("Home Page - Click Gift Shop")]

class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $street_address;
    public $city;
    public $state;
    public $zip_code;
    public $payment_method;

    public function placeOrder() {

        
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'payment_method' => 'required',
        ]);
    
        $cart_items = CartManagement::getCartItemsFromCookie();

        $line_items = [];
        
        foreach ($cart_items as $item) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'lkr',
                    'unit_amount' => $item['unit_amount'] * 100, // Convert to cents/paise
                    'product_data' => [
                        'name' => $item['name'],
                    ],
                ],
                'quantity' => $item['quantity'],
            ];
        }
        
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->grand_total = CartManagement::calculateGrandTotal($cart_items);
        $order->payment_method = $this->payment_method;
        $order->payment_status = 'pending';
        $order->status = 'new';
        $order->currency = 'lkr';
        $order->shipping_amount = '0';
        $order->shipping_method = 'none';
        $order->notes = 'order placed by user';

        $address = new Address();
        $address->first_name = $this->first_name;
        $address->last_name = $this->last_name;
        $address->phone = $this->phone;
        $address->street_address = $this->street_address;
        $address->city = $this->city;
        $address->state = $this->state;
        $address->zip_code = $this->zip_code;
        

        $redirect_url = "";

        if ($this->payment_method == 'stripe') {
            Stripe::setApiKey(env('STRIPE_SECRET'));

                $sessionCheckout = \Stripe\Checkout\Session::create([
                    'payment_method_types' => ['card'],
                    'customer_email' => Auth::user()->email,
                    'line_items' => $line_items,
                    'mode' => 'payment',
                    'success_url' => route('success').'?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => route('cancel'),
                ]);

                $redirect_url = $sessionCheckout->url;

        } else{
            $redirect_url = route('success');
        }

         $order->save();

        $address->order_id = $order->id;
        $address->save();

        $order->items()->createMany($cart_items);

        CartManagement::clearCartItems();

        return redirect($redirect_url);


    }
    
    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);

        return view('livewire.checkout-page', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
        ]);
    }
}
