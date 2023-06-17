<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials.head')
  </head>
  @if(!Route::is(['error-404','error-500']))
<body>
 @endif 
@if(Route::is(['error-404','error-500']))
<body class="error-page">
@endif 
@if(Route::is(['forgetpassword','resetpassword','signin','signup']))
<body class="account-page">
@endif 
@include('layouts.partials.loader')
  <!-- Main Wrapper -->
<div class="main-wrapper">
  @if(!Route::is(['error-404','error-500','forgetpassword','resetpassword','signin','signup']))
    @include('layouts.partials.header')
    @if (Auth::user()->auth_type === 'Cashier')
      @include('layouts.partials.cashiersidebar')
    @else
      @include('layouts.partials.adminsidebar')
    @endif
  @endif
    @yield('content')
</div>		
<!-- /Main Wrapper -->
    @include('layouts.partials.footer-scripts')
  </body>
</html>