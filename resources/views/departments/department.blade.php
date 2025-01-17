<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloudin Careers</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


  <nav class="navbar navbar-expand-sm bg-dark">
    <div class="container">
      <h1 class="text-light">Job Opening List</h1>
    </div>
  </nav>

  
</body>

</html>

@extends('jobopening.sidebar')
@section('content')
<div class="app-main__inner">

    <!-- <div class="row">
      <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Orders</div>
              <div class="widget-subheading">Last year expenses</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white"><span>1896</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Clients</div>
              <div class="widget-subheading">Total Clients Profit</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white"><span>$ 568</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Followers</div>
              <div class="widget-subheading">People Interested</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white"><span>46%</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Products Sold</div>
              <div class="widget-subheading">Revenue streams</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-warning"><span>$14M</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-6">
        <div class="mb-3 card">
          <div class="card-header-tab card-header-tab-animation card-header">
            <div class="card-header-title">
              <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
              Sales Report
            </div>
            <ul class="nav">
              <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Last</a></li>
              <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Current</a></li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-eg-77">
                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                  <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                      <canvas id="canvas"></canvas>
                    </div>
                  </div>
                </div>
                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                <div class="scroll-area-sm">
                  <div class="scrollbar-container">
                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="widget-content p-0">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-3">
                              <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                            </div>
                            <div class="widget-content-left">
                              <div class="widget-heading">Ella-Rose Henry</div>
                              <div class="widget-subheading">Web Developer</div>
                            </div>
                            <div class="widget-content-right">
                              <div class="font-size-xlg text-muted">
                                <small class="opacity-5 pr-1">$</small>
                                <span>129</span>
                                <small class="text-danger pl-2">
                                  <i class="fa fa-angle-down"></i>
                                </small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="widget-content p-0">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-3">
                              <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                            </div>
                            <div class="widget-content-left">
                              <div class="widget-heading">Ruben Tillman</div>
                              <div class="widget-subheading">UI Designer</div>
                            </div>
                            <div class="widget-content-right">
                              <div class="font-size-xlg text-muted">
                                <small class="opacity-5 pr-1">$</small>
                                <span>54</span>
                                <small class="text-success pl-2">
                                  <i class="fa fa-angle-up"></i>
                                </small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="widget-content p-0">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-3">
                              <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                            </div>
                            <div class="widget-content-left">
                              <div class="widget-heading">Vinnie Wagstaff</div>
                              <div class="widget-subheading">Java Programmer</div>
                            </div>
                            <div class="widget-content-right">
                              <div class="font-size-xlg text-muted">
                                <small class="opacity-5 pr-1">$</small>
                                <span>429</span>
                                <small class="text-warning pl-2">
                                  <i class="fa fa-dot-circle"></i>
                                </small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="widget-content p-0">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-3">
                              <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                            </div>
                            <div class="widget-content-left">
                              <div class="widget-heading">Ella-Rose Henry</div>
                              <div class="widget-subheading">Web Developer</div>
                            </div>
                            <div class="widget-content-right">
                              <div class="font-size-xlg text-muted">
                                <small class="opacity-5 pr-1">$</small>
                                <span>129</span>
                                <small class="text-danger pl-2">
                                  <i class="fa fa-angle-down"></i>
                                </small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="widget-content p-0">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-3">
                              <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                            </div>
                            <div class="widget-content-left">
                              <div class="widget-heading">Ruben Tillman</div>
                              <div class="widget-subheading">UI Designer</div>
                            </div>
                            <div class="widget-content-right">
                              <div class="font-size-xlg text-muted">
                                <small class="opacity-5 pr-1">$</small>
                                <span>54</span>
                                <small class="text-success pl-2">
                                  <i class="fa fa-angle-up"></i>
                                </small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="mb-3 card">
          <div class="card-header-tab card-header">
            <div class="card-header-title">
              <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
              Bandwidth Reports
            </div>
            <div class="btn-actions-pane-right">
              <div class="nav">
                <a href="javascript:void(0);" class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab 1</a>
                <a href="javascript:void(0);" class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab 2</a>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="tab-eg-55">
              <div class="widget-chart p-3">
                <div style="height: 350px">
                  <canvas id="line-chart"></canvas>
                </div>
                <div class="widget-chart-content text-center mt-5">
                  <div class="widget-description mt-0 text-warning">
                    <i class="fa fa-arrow-left"></i>
                    <span class="pl-1">175.5%</span>
                    <span class="text-muted opacity-8 pl-1">increased server resources</span>
                  </div>
                </div>
              </div>
              <div class="pt-2 card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">63%</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="text-muted opacity-6">Generated Leads</div>
                          </div>
                        </div>
                        <div class="widget-progress-wrapper mt-1">
                          <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">32%</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="text-muted opacity-6">Submitted Tickers</div>
                          </div>
                        </div>
                        <div class="widget-progress-wrapper mt-1">
                          <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">71%</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="text-muted opacity-6">Server Allocation</div>
                          </div>
                        </div>
                        <div class="widget-progress-wrapper mt-1">
                          <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">41%</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="text-muted opacity-6">Generated Leads</div>
                          </div>
                        </div>
                        <div class="widget-progress-wrapper mt-1">
                          <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Total Orders</div>
                <div class="widget-subheading">Last year expenses</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">1896</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Products Sold</div>
                <div class="widget-subheading">Revenue streams</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-warning">$3M</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Followers</div>
                <div class="widget-subheading">People Interested</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-danger">45,9%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Income</div>
                <div class="widget-subheading">Expected totals</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-focus">$147</div>
              </div>
            </div>
            <div class="widget-progress-wrapper">
              <div class="progress-bar-sm progress-bar-animated-alt progress">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
              </div>
              <div class="progress-sub-label">
                <div class="sub-label-left">Expenses</div>
                <div class="sub-label-right">100%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
<!--     
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
          <div class="widget-content">
            <div class="widget-content-outer">
              <div class="widget-content-wrapper">
                <div class="widget-content-left pr-2 fsize-1">
                  <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                </div>
                <div class="widget-content-right w-100">
                  <div class="progress-bar-xs progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                  </div>
                </div>
              </div>
              <div class="widget-content-left fsize-1">
                <div class="text-muted opacity-6">Income Target</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
          <div class="widget-content">
            <div class="widget-content-outer">
              <div class="widget-content-wrapper">
                <div class="widget-content-left pr-2 fsize-1">
                  <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                </div>
                <div class="widget-content-right w-100">
                  <div class="progress-bar-xs progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                  </div>
                </div>
              </div>
              <div class="widget-content-left fsize-1">
                <div class="text-muted opacity-6">Expenses Target</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
          <div class="widget-content">
            <div class="widget-content-outer">
              <div class="widget-content-wrapper">
                <div class="widget-content-left pr-2 fsize-1">
                  <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                </div>
                <div class="widget-content-right w-100">
                  <div class="progress-bar-xs progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                  </div>
                </div>
              </div>
              <div class="widget-content-left fsize-1">
                <div class="text-muted opacity-6">Spendings Target</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
          <div class="widget-content">
            <div class="widget-content-outer">
              <div class="widget-content-wrapper">
                <div class="widget-content-left pr-2 fsize-1">
                  <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                </div>
                <div class="widget-content-right w-100">
                  <div class="progress-bar-xs progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                  </div>
                </div>
              </div>
              <div class="widget-content-left fsize-1">
                <div class="text-muted opacity-6">Totals Target</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row">
      <div class="col-md-12">
        <div class="main-card mb-3 card">
          <div class="card-header">Department List
            <div class="btn-actions-pane-right">
              <div role="group" class="btn-group-sm btn-group">
                <a href="/departments/create" class="active btn btn-success">ADD</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">


    <table  class="align-middle mb-0 table table-borderless table-striped table-hover">
      <thead>
        <tr>
          <th>Sno.</th>
          <th>Departments List</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($departments as $departments)
        <tr>
          <td>{{ $loop->index+1 }}</td>
          <td>{{ $departments->Departments}}</td>

          <td>
            <a href="departments/{{ $departments->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
            <button class="btn btn-danger btn-sm" onclick="myFunction(<?php echo $departments->id; ?>)">Delete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <input type="hidden" name="unique_id" id="unique_id">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Local host says</h5>
            <button type="button" class="close closeModel" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure want to Delete.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="deleteApi()">Yes</button>
            <button type="button" class="btn btn-secondary closeModel" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script>
      $('document').ready(function() {
        $('.modal').hide();

        $('.closeModel').click(function(e) {
          $('.modal').hide();
        });
      });

      function myFunction(id) {
        $('#unique_id').val("");
        $('#unique_id').val(id);
        $('.modal').show();
      }

      function deleteApi() {
        var id = $('#unique_id').val();
        $.ajax({
          type: 'delete',
          dataType: "json",
          url: 'departments/delete/'+ id,
          data: {
            '_token': '{{ csrf_token() }}',
          },
          cache: false,
          // headers: {
          //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          // },
          success: function(data, status, xhr) {
            $('.modal').hide();
            location.reload();
          }
        });
      }
     </script>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection