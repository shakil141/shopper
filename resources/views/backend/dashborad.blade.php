@extends('master')

@section('title','HomePage')

@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">$<span class="count">23569</span></div>
                                        <div class="stat-heading">Revenue</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">3435</span></div>
                                        <div class="stat-heading">Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">349</span></div>
                                        <div class="stat-heading">Templates</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">2986</span></div>
                                        <div class="stat-heading">Clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->
            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Traffic </h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <!-- <canvas id="TrafficChart"></canvas>   -->
                                    <div id="traffic-chart" class="traffic-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="235.396875" x2="235.396875" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="420.79375" x2="420.79375" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="606.190625" x2="606.190625" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="791.5875" x2="791.5875" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="976.984375" x2="976.984375" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line y1="300" y2="300" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="259.2857142857143" y2="259.2857142857143" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="218.57142857142856" y2="218.57142857142856" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="177.85714285714286" y2="177.85714285714286" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="137.14285714285714" y2="137.14285714285714" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="96.42857142857142" y2="96.42857142857142" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="55.71428571428572" y2="55.71428571428572" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="976.984375" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,300L50,300C111.799,251.143,173.598,200.89,235.397,153.429C297.196,105.967,358.995,15,420.794,15C482.593,15,544.392,83.901,606.191,96.429C667.99,108.956,729.789,106.526,791.588,120.857C853.386,135.189,915.185,240.286,976.984,300L976.984,300Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,300L50,300C111.799,210.429,173.598,31.286,235.397,31.286C297.196,31.286,358.995,177.857,420.794,177.857C482.593,177.857,544.392,137.143,606.191,137.143C667.99,137.143,729.789,157.603,791.588,177.857C853.386,198.111,915.185,257.657,976.984,297.557L976.984,300Z" class="ct-area"></path></g><g class="ct-series ct-series-c"><path d="M50,300L50,300C111.799,259.286,173.598,215.663,235.397,177.857C297.196,140.051,358.995,72,420.794,72C482.593,72,544.392,177.857,606.191,177.857C667.99,177.857,729.789,55.714,791.588,55.714C853.386,55.714,915.185,191.429,976.984,259.286L976.984,300Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="305" width="185.396875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 185px; height: 20px;">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="235.396875" y="305" width="185.396875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 185px; height: 20px;">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="420.79375" y="305" width="185.39687499999997" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 185px; height: 20px;">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="606.190625" y="305" width="185.39687500000002" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 185px; height: 20px;">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="791.5875" y="305" width="185.39687500000002" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 185px; height: 20px;">May</span></foreignObject><foreignObject style="overflow: visible;" x="976.984375" y="305" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">Jun</span></foreignObject><foreignObject style="overflow: visible;" y="259.2857142857143" x="10" height="40.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="218.57142857142856" x="10" height="40.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">5000</span></foreignObject><foreignObject style="overflow: visible;" y="177.85714285714283" x="10" height="40.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">10000</span></foreignObject><foreignObject style="overflow: visible;" y="137.14285714285714" x="10" height="40.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">15000</span></foreignObject><foreignObject style="overflow: visible;" y="96.42857142857142" x="10" height="40.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">20000</span></foreignObject><foreignObject style="overflow: visible;" y="55.71428571428572" x="10" height="40.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">25000</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="40.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">30000</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">35000</span></foreignObject></g></svg></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-body">
                                    <div class="progress-box progress-1">
                                        <h4 class="por-title">Visits</h4>
                                        <div class="por-txt">96,930 Users (40%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box progress-2">
                                        <h4 class="por-title">Bounce Rate</h4>
                                        <div class="por-txt">3,220 Users (24%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box progress-2">
                                        <h4 class="por-title">Unique Visitors</h4>
                                        <div class="por-txt">29,658 Users (60%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box progress-2">
                                        <h4 class="por-title">Targeted  Visitors</h4>
                                        <div class="por-txt">99,658 Users (90%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div> <!-- /.card-body -->
                            </div>
                        </div> <!-- /.row -->
                        <div class="card-body"></div>
                    </div>
                </div><!-- /# column -->
            </div>
            <!--  /Traffic -->
            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Orders </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="avatar">Avatar</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="serial">1.</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/1.jpg') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td> #5469 </td>
                                                <td>  <span class="name">Louis Stanley</span> </td>
                                                <td> <span class="product">iMax</span> </td>
                                                <td><span class="count">231</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">2.</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/2.jpg') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td> #5468 </td>
                                                <td>  <span class="name">Gregory Dixon</span> </td>
                                                <td> <span class="product">iPad</span> </td>
                                                <td><span class="count">250</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">3.</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/3.jpg') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td> #5467 </td>
                                                <td>  <span class="name">Catherine Dixon</span> </td>
                                                <td> <span class="product">SSD</span> </td>
                                                <td><span class="count">250</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">4.</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td> #5466 </td>
                                                <td>  <span class="name">Mary Silva</span> </td>
                                                <td> <span class="product">Magic Mouse</span> </td>
                                                <td><span class="count">250</span></td>
                                                <td>
                                                    <span class="badge badge-pending">Pending</span>
                                                </td>
                                            </tr>
                                            <tr class=" pb-0">
                                                <td class="serial">5.</td>
                                                <td class="avatar pb-0">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td> #5465 </td>
                                                <td>  <span class="name">Johnny Stephens</span> </td>
                                                <td> <span class="product">Monitor</span> </td>
                                                <td><span class="count">250</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->

                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0">
                                    <div class="card-body">
                                        <div class="chart-container ov-h">
                                            <div id="flotPie1" class="float-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="270" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 270px; height: 150px;"></canvas><canvas class="flot-overlay" width="270" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 270px; height: 150px;"></canvas><div class="legend"><div style="position: absolute; width: 97px; height: 72px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #5c6bc0;overflow:hidden"></div></div></td><td class="legendLabel">Desktop visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #ef5350;overflow:hidden"></div></div></td><td class="legendLabel">Tab visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #66bb6a;overflow:hidden"></div></div></td><td class="legendLabel">Mobile visits</td></tr></tbody></table></div></div>
                                        </div>
                                    </div>
                                </div><!-- /.card -->
                            </div>

                            <div class="col-lg-6 col-xl-12">
                                <div class="card bg-flat-color-3  ">
                                    <div class="card-body">
                                        <h4 class="card-title m-0  white-color ">August 2018</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="flotLine5" class="flot-line" style="padding: 0px; position: relative;"><canvas class="flot-base" width="461" height="105" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 461px; height: 105px;"></canvas><canvas class="flot-overlay" width="461" height="105" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 461px; height: 105px;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div>
            </div>
            <!-- /.orders -->
            <!-- To Do and Live Chat -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title box-title">To Do List</h4>
                            <div class="card-content">
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                                        <a href="#" class="fa fa-times"></a>
                                                        <a href="#" class="fa fa-pencil"></a>
                                                        <a href="#" class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                        <a href="#" class="fa fa-times"></a>
                                                        <a href="#" class="fa fa-pencil"></a>
                                                        <a href="#" class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked=""><i class="check-box"></i><span>Follow back those who follow you</span>
                                                        <a href="#" class="fa fa-times"></a>
                                                        <a href="#" class="fa fa-pencil"></a>
                                                        <a href="#" class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked=""><i class="check-box"></i><span>Design One page theme</span>
                                                        <a href="#" class="fa fa-times"></a>
                                                        <a href="#" class="fa fa-pencil"></a>
                                                        <a href="#" class="fa fa-check"></a>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked=""><i class="check-box"></i><span>Creating component page</span>
                                                        <a href="#" class="fa fa-times"></a>
                                                        <a href="#" class="fa fa-pencil"></a>
                                                        <a href="#" class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- /.todo-list -->
                            </div>
                        </div> <!-- /.card-body -->
                    </div><!-- /.card -->
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title box-title">Live Chat</h4>
                            <div class="card-content">
                                <div class="messenger-box">
                                    <ul>
                                        <li>
                                            <div class="msg-received msg-container">
                                                <div class="avatar">
                                                <img src="{{ asset('assets/images/avatar/64-1.jpg') }}" alt="">
                                                <div class="send-time">11.11 am</div>
                                                </div>
                                                <div class="msg-box">
                                                    <div class="inner-box">
                                                        <div class="name">
                                                            John Doe
                                                        </div>
                                                        <div class="meg">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.msg-received -->
                                        </li>
                                        <li>
                                            <div class="msg-sent msg-container">
                                                <div class="avatar">
                                                <img src="{{ asset('assets/images/avatar/64-2.jpg') }}" alt="">
                                                <div class="send-time">11.11 am</div>
                                                </div>
                                                <div class="msg-box">
                                                    <div class="inner-box">
                                                        <div class="name">
                                                            John Doe
                                                        </div>
                                                        <div class="meg">
                                                            Hay how are you doing?
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.msg-sent -->
                                        </li>
                                    </ul>
                                    <div class="send-mgs">
                                        <div class="yourmsg">
                                            <input class="form-control" type="text">
                                        </div>
                                        <button class="btn msg-send-btn">
                                            <i class="pe-7s-paper-plane"></i>
                                        </button>
                                    </div>
                                </div><!-- /.messenger-box -->
                            </div>
                        </div> <!-- /.card-body -->
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /To Do and Live Chat -->
            <!-- Calender Chart Weather  -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="box-title">Chandler</h4> -->
                            <div class="calender-cont widget-calender">
                                <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>August 2021</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 732px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 122px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-08-01"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-08-02"></td><td class="fc-day fc-widget-content fc-tue fc-today " data-date="2021-08-03"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-08-04"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-08-05"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-08-06"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-08-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2021-08-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-past" data-date="2021-08-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-today " data-date="2021-08-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-08-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-08-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-08-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-08-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">10:14p</span> <span class="fc-title">See John Deo</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-dark fc-draggable"><div class="fc-content"><span class="fc-time">6:08p</span> <span class="fc-title">Hey!</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable"><div class="fc-content"><span class="fc-time">8:08p</span> <span class="fc-title">Buy a Theme</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 122px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-08-08"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-08-09"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-08-10"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-08-11"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-08-12"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-08-13"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-08-14"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-08-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-08-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-08-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-08-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-08-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-08-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-08-14"><span class="fc-day-number">14</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 122px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-08-15"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-08-16"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-08-17"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-08-18"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-08-19"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-08-20"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-08-21"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-08-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-08-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-08-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-08-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-08-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-08-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-08-21"><span class="fc-day-number">21</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 122px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-08-22"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-08-23"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-08-24"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-08-25"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-08-26"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-08-27"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-08-28"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-08-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-08-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-08-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-08-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-08-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-08-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-08-28"><span class="fc-day-number">28</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 122px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-08-29"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-08-30"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-08-31"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-09-01"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-09-02"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-09-03"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-09-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-08-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-08-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-08-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-09-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-09-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-09-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-09-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 122px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2021-09-05"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2021-09-06"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-09-07"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-09-08"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-09-09"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-09-10"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-09-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2021-09-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2021-09-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2021-09-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-09-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-09-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-09-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-09-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card ov-h">
                        <div class="card-body bg-flat-color-2">
                            <div id="flotBarChart" class="float-chart ml-4 mr-4" style="padding: 0px; position: relative;"><canvas class="flot-base" width="413" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 413px; height: 150px;"></canvas><canvas class="flot-overlay" width="413" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 413px; height: 150px;"></canvas></div>
                        </div>
                        <div id="cellPaiChart" class="float-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="501" height="160" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 501px; height: 160px;"></canvas><canvas class="flot-overlay" width="501" height="160" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 501px; height: 160px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 90px; left: 283px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#5b83de;">Direct Sell<br>65%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 18px; left: 132px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#00bfa5;">Channel Sell<br>35%</div></span></div>
                    </div><!-- /.card -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card weather-box">
                        <h4 class="weather-title box-title">Weather</h4>
                        <div class="card-body">
                            <div class="weather-widget">
                                <div id="weather-one" class="weather-one"></div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /Calender Chart Weather -->
            <!-- Modal - Calendar - Add New Event -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#event-modal -->
            <!-- Modal - Calendar - Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
@endsection
