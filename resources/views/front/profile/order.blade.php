@extends('front.master')
@section('content')
    <div class="body-content mt-4">
        <div class="container">
            <div class="row">
                @include('front/common/user_sidebar')



                <div class="col-md-10">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr style="background: #e2e2e2;">
                                    <td class="col-md-1">
                                        <label for=""> Date</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Total</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Payment</label>
                                    </td>


                                    <td class="col-md-2">
                                        <label for=""> Order</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> Status</label>
                                    </td>

                                    <td class="col-md-1">
                                        <label for=""> Action </label>
                                    </td>

                                </tr>


                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="col-md-1">
                                            <label for=""> {{ $order->order_date }}</label>
                                        </td>

                                        <td class="col-md-3">
                                            <label for=""> Rp.{{ $order->gross_amount }}</label>
                                        </td>


                                        <td class="col-md-3">
                                            <label for=""> {{ ucwords($order->payment_type) }}</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for=""> {{ $order->order_id }}</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for="">
                                                <span class="badge badge-pill badge-warning"
                                                    style="background: #418DB9;">{{ $order->status }} </span>

                                            </label>
                                        </td>
                                        <td> <span
                                                style="background:{{ $order->shipping->delivery_status == 0 ? '#EF3737' : '#418DB9' }} ; "
                                                class="badge badge-pill {{ $order->shipping->delivery_status == 0 ? 'badge-danger' : 'badge-primary' }} ">{{ $order->shipping->delivery_status == 0 ? 'In Progress' : 'Sent' }}
                                            </span> </td>

                                        <td class="col-md-1">
                                            <a href="{{ url('/user/order/detail/' . $order->id) }}"
                                                class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>

                                            <a target="_blank" href="{{ url('user/invoice_download/' . $order->id) }}"
                                                class="btn btn-sm btn-danger" style="margin-top: 5px;"><i
                                                    class="fa fa-download" style="color: white;"></i> Invoice </a>

                                        </td>



                                        </td>


                                        </td>

                                    </tr>
                                @endforeach





                            </tbody>

                        </table>

                    </div>





                </div> <!-- / end col md 8 -->



            </div> <!-- // end row -->

        </div>

    </div>
@endsection
