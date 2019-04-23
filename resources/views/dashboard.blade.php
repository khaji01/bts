@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @if (Auth::user()->hasRole('Admin')==1)
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Dashboard</h2>
                    </div>
                </div>
            </div>

            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>{{number_format($total_agents)}}</h2>
                                    <span>Total Agents</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-bus"></i>
                                </div>
                                <div class="text">
                                    <h2>{{number_format($total_busses)}}</h2>
                                    <span>Total Busses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <div class="text">
                                    <h2>{{number_format($total_tickets)}}</h2>
                                    <span>Ticket Booked</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                                <div class="text">
                                    <h3>{{number_format($total_earnings)}}</h3>
                                    <span>Total Earning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif


            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Recently Ticket Booked</h2>
                    @if(count($tickets) > 0 )
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Bus</th>
                                    <th>Route</th>
                                    <th>Booked Date</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->customerName}}</td>
                                    <td>{{$ticket->bus_id}}</td>
                                    <td>{{$ticket->from}} - {{$ticket->to}}</td>
                                    <td>{{$ticket->bookedDate->format('d M Y')}}</td>
                                    <td class="text-right">{{$ticket->amount}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>No ticket booked yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
