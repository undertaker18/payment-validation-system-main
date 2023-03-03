@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                     You are login as a super admin role
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="content-wrapper">
    <div class="content">                
            <!-- Top Statistics -->
            <div class="row" style="padding-left: 2%; padding-right: 2%;">
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: none">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-black">VALID RECEIPTS</span>
                      <span class="mx-1">
                        <h1 style="color: #008000;">  1000 </h1>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: none">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-black">PENDING RECEIPTS</span>
                      <span class="mx-1">
                         <h1 style="color: 	#FFA500;">  542  </h1>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: none">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-black">REJECT RECEIPTS</span>
                      <span class="mx-1">
                         <h1 style="color: #FF0000;">  42  </h1>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: none">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-black">TOTAL RECEIPTS</span>
                      <span class="mx-1">
                         <h1 style="color: #000000; ">  1562  </h1>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
  </div>
@endsection

@section('scripts')
@endsection