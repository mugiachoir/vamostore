<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    public function addToCart(Request $request, $id)
    {
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        $product = Product::find($id);
        if ($product->discount_price == NULL) {
            Cart::add([
                'id' => $product->id,
                'name' => $request->product_name,
                'qty' => $request->product_qty,
                'price' => $product->selling_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_thambnail,
                    'color' => $request->product_color,
                    'size' => $request->product_size,
                ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } else {
            Cart::add([
                'id' => $product->id,
                'name' => $request->product_name,
                'qty' => $request->product_qty,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_thambnail,
                    'color' => $request->product_color,
                    'size' => $request->product_size,
                ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    } // end mehtod 

    // Mini Cart Section
    public function addMiniCart()
    {
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::priceTotal();



        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,
        ));
    } // end method 

    /// remove mini cart 
    public function removeMiniCart($rowId)
    {
        Cart::remove($rowId);

        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
    }

    // Cart Increment 
    public function cartIncrement($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);

        if (Session::has('coupon')) {

            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => Cart::priceTotal() * $coupon->coupon_discount / 100,
                'total_amount' => Cart::priceTotal() - Cart::priceTotal() * $coupon->coupon_discount / 100
            ]);
        }

        return response()->json('Increment');
    } // end mehtod 

    // Cart Decrement  
    public function cartDecrement($rowId)
    {

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        if (Session::has('coupon')) {

            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => Cart::priceTotal() * $coupon->coupon_discount / 100,
                'total_amount' => Cart::priceTotal() - Cart::priceTotal() * $coupon->coupon_discount / 100
            ]);
        }

        return response()->json('Decrement');
    } // end mehtod 

    public function couponApply(Request $request)
    {
        $coupon = Coupon::where('coupon_name', $request->coupon_name)->where('coupon_validity', '>=', Carbon::now()->format('Y-m-d'))->first();
        if ($coupon) {

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => Cart::priceTotal() * $coupon->coupon_discount / 100,
                'total_amount' => Cart::priceTotal() - Cart::priceTotal() * $coupon->coupon_discount / 100
            ]);

            return response()->json(array(
                'validity' => true,
                'success' => 'Coupon Applied Successfully'
            ));
        } else {
            return response()->json(['error' => 'Invalid Coupon']);
        }
    }

    public function couponCalculation()
    {

        if (Session::has('coupon')) {
            return response()->json(array(
                'subtotal' => Cart::priceTotal(),
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount' => session()->get('coupon')['total_amount'],
            ));
        } else {
            return response()->json(array(
                'total' => Cart::priceTotal(),
            ));
        }
    } // end method 

    public function couponRemove()
    {
        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successfully']);
    }

    // Checkout Method 
    public function checkoutCreate()
    {

        if (Auth::check()) {
            if (Cart::priceTotal() > 0) {
                $carts = Cart::content();
                $cartQty = Cart::count();
                $cartTotal = Cart::priceTotal();
                return view('front.checkout.index', compact('carts', 'cartQty', 'cartTotal'));
            } else {
                $notification = array(
                    'message' => 'Your cart is empty',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'You Need to Login First',
                'alert-type' => 'error'
            );

            return redirect()->route('login')->with($notification);
        }
    } // end method 

    public function checkoutStore(Request $request)
    {
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['post_code'] = $request->post_code;
        $data['provinsi'] = $request->provinsi;
        $data['kabupaten'] = $request->kabupaten;
        $data['kecamatan'] = $request->kecamatan;
        $data['address'] = $request->address;
        $data['notes'] = $request->notes;


        if ($request->payment_method == 'stripe') {
            return view('payment.stripe.index', $data);
        } elseif ($request->payment_method == 'card') {
            return 'card';
        } else {
            return 'cash';
        }
    } // end mehtod. 
}