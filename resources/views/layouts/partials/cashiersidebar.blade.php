@if(Route::is(['index-one','index-three'])) 
  <!-- Sidebar -->
  @if(!Route::is(['index-three']))
  <div class="sidebar new-header sidebar-one">
    @endif
    @if(Route::is(['index-three']))
    <div class="sidebar side-three new-header">
    @endif
    @if(Route::is(['index-three']))
    <div class="container">
    @endif
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="nav">
                <li class="submenu">
                    <a href="index" ><img src="{{ URL::asset('/assets/img/icons/menu-icon.svg')}}" alt="img"><span> Main Menu</span> <span class="menu-arrow"></span></a>
                    <ul>
					
                        <li><a href="{{ route('home') }}" ><img src="{{ URL::asset('/assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                            <ul>
								 <li><a href="inventory-list">Inventory List</a></li>
                                <li><a href="productlist">Product List</a></li>
                                <li><a href="addproduct">Add Product</a></li>
                                <li><a href="categorylist">Category List</a></li>
                                <li><a href="addcategory">Add Category</a></li>
                                <li><a href="subcategorylist">Sub Category List</a></li>
                                <li><a href="subaddcategory">Add Sub Category</a></li>
                                <li><a href="brandlist">Brand List</a></li>
                                <li><a href="addbrand">Add Brand</a></li>
                                <li><a href="importproduct">Import Products</a></li>
                                <li><a href="barcode">Print Barcode</a></li>
                            </ul>
                        </li>                                    
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/sales1.svg')}}" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="saleslist">Sales List</a></li>
                                <li><a href="pos">POS</a></li>
                                <li><a href="pos">New Sales</a></li>
                                <li><a href="salesreturnlists">Sales Return List</a></li>
                                <li><a href="createsalesreturns">New Sales Return</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/purchase1.svg')}}" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="purchaselist">Purchase List</a></li>
                                <li><a href="addpurchase">Add Purchase</a></li>
                                <li><a href="importpurchase">Import Purchase</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/expense1.svg')}}" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenselist">Expense List</a></li>
                                <li><a href="createexpense">Add Expense</a></li>
                                <li><a href="expensecategory">Expense Category</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/quotation1.svg')}}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="quotationList">Quotation List</a></li>
                                <li><a href="addquotation">Add Quotation</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/transfer1.svg')}}" alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transferlist">Transfer  List</a></li>
                                <li><a href="addtransfer">Add Transfer </a></li>
                                <li><a href="importtransfer">Import Transfer </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/return1.svg')}}" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="salesreturnlist">Sales Return List</a></li>
                                <li><a href="createsalesreturn">Add Sales Return </a></li>
                                <li><a href="purchasereturnlist">Purchase Return List</a></li>
                                <li><a href="createpurchasereturn">Add Purchase Return </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customerlist">Customer List</a></li>
                                <li><a href="addcustomer">Add Customer  </a></li>
                                <li><a href="supplierlist">Supplier List</a></li>
                                <li><a href="addsupplier">Add Supplier </a></li>
                                <li><a href="userlist">User List</a></li>
                                <li><a href="adduser">Add User</a></li>
                                <li><a href="storelist">Store List</a></li>
                                <li><a href="addstore">Add Store</a></li>
                            </ul>
                        </li>														
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/places.svg')}}" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newcountry">New Country</a></li>
                                <li><a href="countrieslist">Countries list</a></li>
                                <li><a href="newstate">New State </a></li>
                                <li><a href="statelist">State list</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="newuser">New User </a></li>
                        <li><a href="userlists">Users List</a></li>
                    </ul>
                </li>
                <li  class="submenu">
                    <a href="javascript:void(0);"><i data-feather="layers"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="components" ><i data-feather="layers"></i><span> Components</span> </a></li>									
                        <li  class="submenu">
                            <a href="javascript:void(0);"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="sweetalerts">Sweet Alerts</a></li>
                                <li><a href="tooltip">Tooltip</a></li>
                                <li><a href="popover">Popover</a></li>
                                <li><a href="ribbon">Ribbon</a></li>
                                <li><a href="clipboard">Clipboard</a></li>
                                <li><a href="drag-drop">Drag & Drop</a></li>
                                <li><a href="rangeslider">Range Slider</a></li>
                                <li><a href="rating">Rating</a></li>
                                <li><a href="toastr">Toastr</a></li>
                                <li><a href="text-editor">Text Editor</a></li>
                                <li><a href="counter">Counter</a></li>
                                <li><a href="scrollbar">Scrollbar</a></li>
                                <li><a href="spinner">Spinner</a></li>
                                <li><a href="notification">Notification</a></li>
                                <li><a href="lightbox">Lightbox</a></li>
                                <li><a href="stickynote">Sticky Note</a></li>
                                <li><a href="timeline">Timeline</a></li>
                                <li><a href="form-wizard">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li  class="submenu">
                            <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts  </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex">Apex Charts</a></li>
                                <li><a href="chart-js">Chart Js</a></li>
                                <li><a href="chart-morris">Morris Charts</a></li>
                                <li><a href="chart-flot">Flot Charts</a></li>
                                <li><a href="chart-peity">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li  class="submenu">
                            <a href="javascript:void(0);"><i data-feather="award"></i><span> Icons  </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome">Fontawesome Icons</a></li>
                                <li><a href="icon-feather">Feather Icons</a></li>
                                <li><a href="icon-ionic">Ionic Icons</a></li>
                                <li><a href="icon-material">Material Icons</a></li>
                                <li><a href="icon-pe7">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline">Simpleline Icons</a></li>
                                <li><a href="icon-themify">Themify Icons</a></li>
                                <li><a href="icon-weather">Weather Icons</a></li>
                                <li><a href="icon-typicon">Typicon Icons</a></li>
                                <li><a href="icon-flag">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li  class="submenu">
                            <a href="javascript:void(0);"><i data-feather="columns"></i> <span> Forms  </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs">Basic Inputs </a></li>
                                <li><a href="form-input-groups">Input Groups </a></li>
                                <li><a href="form-horizontal">Horizontal Form </a></li>
                                <li><a href="form-vertical"> Vertical Form </a></li>
                                <li><a href="form-mask">Form Mask </a></li>
                                <li><a href="form-validation">Form Validation </a></li>
                                <li><a href="form-select2">Form Select2 </a></li>
                                <li><a href="form-fileupload">File Upload </a></li>
                            </ul>
                        </li>
                        <li  class="submenu">
                            <a href="javascript:void(0);"><i data-feather="layout"></i> <span> Table  </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic" >Basic Tables </a></li>
                                <li><a href="data-tables">Data Table </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blankpage" ><i data-feather="file"></i><span> Blank Page</span> </a>
                        </li>
                        <li  class="submenu">
                            <a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages  </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="error-404">404 Error </a></li>
                                <li><a href="error-500">500 Error </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> Application</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chat">Chat</a></li>
                        <li><a href="calendar">Calendar</a></li>
                        <li><a href="email">Email</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/time.svg')}}" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="purchaseorderreport">Purchase order report</a></li>
                        <li><a href="inventoryreport">Inventory Report</a></li>
                        <li><a href="salesreport">Sales Report</a></li>
                        <li><a href="invoicereport">Invoice Report</a></li>
                        <li><a href="purchasereport">Purchase Report</a></li>
                        <li><a href="supplierreport">Supplier Report</a></li>
                        <li><a href="customerreport">Customer Report</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/settings.svg')}}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="generalsettings">General Settings</a></li>
                        <li><a href="emailsettings">Email Settings</a></li>
                        <li><a href="paymentsettings">Payment Settings</a></li>
                        <li><a href="currencysettings">Currency Settings</a></li>
                        <li><a href="grouppermissions">Group Permissions</a></li>
                        <li><a href="taxrates">Tax Rates</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    @if(Route::is(['index-three']))
    </div>
    @endif
</div>
<!-- /Sidebar -->
@endif
<!-- Sidebar -->
@if(Route::is(['index-two']))
<div class="container">
@endif
@if(!Route::is(['index-one','index-two','index-three','index-four']))
<div class="sidebar" id="sidebar">
@endif
@if(Route::is(['index-one']))
<div class="sidebar sidebar-one hide-sidebar" id="sidebar">
@endif
@if(Route::is(['index-two']))
<div class="sidebar sidebar-two" id="sidebar">
@endif    
@if(Route::is(['index-three']))
<div class="sidebar sidebar-three hide-sidebar" id="sidebar">
@endif
@if(Route::is(['index-four']))
<div class="sidebar sidebar-four" id="sidebar">
@endif
    <div class="sidebar-inner slimscroll">
        @if(!Route::is(['index-four']))
        <div id="sidebar-menu" class="sidebar-menu">
            @endif
            @if(Route::is(['index-four']))
            <div id="sidebar-menu" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-controls="home" aria-selected="true">
                          <img src="{{ URL::asset('/assets/img/icons/menu-icon.svg')}}" alt="">
                      </a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="tablinks nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"  role="tab" aria-controls="messages" aria-selected="false">
                          <img src="{{ URL::asset('/assets/img/icons/menu-icon-01.svg')}}" alt="">
                      </a>
                  </li>
                  <li class="nav-item" role="presentation"> 
                      <a class="tablinks nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"  role="tab" aria-controls="profile" aria-selected="false">
                          <img src="{{ URL::asset('/assets/img/icons/menu-icon-02.svg')}}" alt="">
                      </a>
                  </li>
                  <li class="nav-item" role="presentation"> 
                      <a class="tablinks nav-link" id="app-tab" data-bs-toggle="tab" data-bs-target="#app"  role="tab" aria-controls="app" aria-selected="false">
                          <img src="{{ URL::asset('/assets/img/icons/menu-icon-04.svg')}}" alt="">
                      </a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#report"  role="tab" aria-controls="report" aria-selected="true">
                          <img src="{{ URL::asset('/assets/img/icons/menu-icon-05.svg')}}" alt="">
                      </a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#set"  role="tab" aria-controls="set" aria-selected="true">
                          <img src="{{ URL::asset('/assets/img/icons/menu-icon-06.svg')}}" alt="">
                      </a>
                  </li>
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
                <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                    <li><a href="index" ><span> Dashboard</span> </a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Product</span> <span class="menu-arrow"></span></a>
                            <ul>
								<li><a href="inventory-list">Inventory List</a></li>
                                <li><a href="productlist">Product List</a></li>
                                <li><a href="addproduct">Add Product</a></li>
                                <li><a href="categorylist">Category List</a></li>
                                <li><a href="addcategory">Add Category</a></li>
                                <li><a href="subcategorylist">Sub Category List</a></li>
                                <li><a href="subaddcategory">Add Sub Category</a></li>
                                <li><a href="brandlist">Brand List</a></li>
                                <li><a href="addbrand">Add Brand</a></li>
                                <li><a href="importproduct">Import Products</a></li>
                                <li><a href="barcode">Print Barcode</a></li>
                            </ul>
                        </li>                                    
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="saleslist">Sales List</a></li>
                                <li><a href="pos">POS</a></li>
                                <li><a href="pos">New Sales</a></li>
                                <li><a href="salesreturnlists">Sales Return List</a></li>
                                <li><a href="createsalesreturns">New Sales Return</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Purchase</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="purchaselist">Purchase List</a></li>
                                <li><a href="addpurchase">Add Purchase</a></li>
                                <li><a href="importpurchase">Import Purchase</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Expense</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenselist">Expense List</a></li>
                                <li><a href="createexpense">Add Expense</a></li>
                                <li><a href="expensecategory">Expense Category</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Quotation</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="quotationList">Quotation List</a></li>
                                <li><a href="addquotation">Add Quotation</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Transfer</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transferlist">Transfer  List</a></li>
                                <li><a href="addtransfer">Add Transfer </a></li>
                                <li><a href="importtransfer">Import Transfer </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Return</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="salesreturnlist">Sales Return List</a></li>
                                <li><a href="createsalesreturn">Add Sales Return </a></li>
                                <li><a href="purchasereturnlist">Purchase Return List</a></li>
                                <li><a href="createpurchasereturn">Add Purchase Return </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> People</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customerlist">Customer List</a></li>
                                <li><a href="addcustomer">Add Customer  </a></li>
                                <li><a href="supplierlist">Supplier List</a></li>
                                <li><a href="addsupplier">Add Supplier </a></li>
                                <li><a href="userlist">User List</a></li>
                                <li><a href="adduser">Add User</a></li>
                                <li><a href="storelist">Store List</a></li>
                                <li><a href="addstore">Add Store</a></li>
                            </ul>
                        </li>														
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Places</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newcountry">New Country</a></li>
                                <li><a href="countrieslist">Countries list</a></li>
                                <li><a href="newstate">New State </a></li>
                                <li><a href="statelist">State list</a></li>
                            </ul>
                        </li>
                </ul>
                <ul class="tab-pane" id="messages" aria-labelledby="messages-tab">
                    <li><a href="newuser">New User </a></li>
                    <li><a href="userlists">Users List</a></li>
                </ul>
                <ul class="tab-pane" id="profile" aria-labelledby="profile-tab">
                    <li><a href="components" ><span> Components</span> </a></li>									
                    <li  class="submenu">
                        <a href="javascript:void(0);"><span>Elements</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="sweetalerts">Sweet Alerts</a></li>
                            <li><a href="tooltip">Tooltip</a></li>
                            <li><a href="popover">Popover</a></li>
                            <li><a href="ribbon">Ribbon</a></li>
                            <li><a href="clipboard">Clipboard</a></li>
                            <li><a href="drag-drop">Drag & Drop</a></li>
                            <li><a href="rangeslider">Range Slider</a></li>
                            <li><a href="rating">Rating</a></li>
                            <li><a href="toastr">Toastr</a></li>
                            <li><a href="text-editor">Text Editor</a></li>
                            <li><a href="counter">Counter</a></li>
                            <li><a href="scrollbar">Scrollbar</a></li>
                            <li><a href="spinner">Spinner</a></li>
                            <li><a href="notification">Notification</a></li>
                            <li><a href="lightbox">Lightbox</a></li>
                            <li><a href="stickynote">Sticky Note</a></li>
                            <li><a href="timeline">Timeline</a></li>
                            <li><a href="form-wizard">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li  class="submenu">
                        <a href="javascript:void(0);"><span>Charts  </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="chart-apex">Apex Charts</a></li>
                            <li><a href="chart-js">Chart Js</a></li>
                            <li><a href="chart-morris">Morris Charts</a></li>
                            <li><a href="chart-flot">Flot Charts</a></li>
                            <li><a href="chart-peity">Peity Charts</a></li>
                        </ul>
                    </li>
                    <li  class="submenu">
                        <a href="javascript:void(0);"><span> Icons </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="icon-fontawesome">Fontawesome Icons</a></li>
                            <li><a href="icon-feather">Feather Icons</a></li>
                            <li><a href="icon-ionic">Ionic Icons</a></li>
                            <li><a href="icon-material">Material Icons</a></li>
                            <li><a href="icon-pe7">Pe7 Icons</a></li>
                            <li><a href="icon-simpleline">Simpleline Icons</a></li>
                            <li><a href="icon-themify">Themify Icons</a></li>
                            <li><a href="icon-weather">Weather Icons</a></li>
                            <li><a href="icon-typicon">Typicon Icons</a></li>
                            <li><a href="icon-flag">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li  class="submenu">
                        <a href="javascript:void(0);"> <span>Forms  </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="form-basic-inputs">Basic Inputs </a></li>
                            <li><a href="form-input-groups">Input Groups </a></li>
                            <li><a href="form-horizontal">Horizontal Form </a></li>
                            <li><a href="form-vertical"> Vertical Form </a></li>
                            <li><a href="form-mask">Form Mask </a></li>
                            <li><a href="form-validation">Form Validation </a></li>
                            <li><a href="form-select2">Form Select2 </a></li>
                            <li><a href="form-fileupload">File Upload </a></li>
                        </ul>
                    </li>
                    <li  class="submenu">
                        <a href="javascript:void(0);"> <span>Table  </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="tables-basic" >Basic Tables </a></li>
                            <li><a href="data-tables">Data Table </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blankpage" ><span> Blank Page<span> </a>
                    </li>
                    <li  class="submenu">
                        <a href="javascript:void(0);"><span> Error Pages  </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="error-404">404 Error </a></li>
                            <li><a href="error-500">500 Error </a></li>
                        </ul>
                    </li>
                </ul>                            
                <ul class="tab-pane" id="app" aria-labelledby="app-tab">
                    <li><a href="chat">Chat</a></li>
                    <li><a href="calendar">Calendar</a></li>
                    <li><a href="email">Email</a></li>
                </ul>                         
                <ul class="tab-pane" id="report" aria-labelledby="report-tab">
                    <li><a href="purchaseorderreport">Purchase order report</a></li>
                        <li><a href="inventoryreport">Inventory Report</a></li>
                        <li><a href="salesreport">Sales Report</a></li>
                        <li><a href="invoicereport">Invoice Report</a></li>
                        <li><a href="purchasereport">Purchase Report</a></li>
                        <li><a href="supplierreport">Supplier Report</a></li>
                        <li><a href="customerreport">Customer Report</a></li>
                </ul>                      
                <ul class="tab-pane" id="set" aria-labelledby="set-tab">
                    <li><a href="generalsettings">General Settings</a></li>
                    <li><a href="emailsettings">Email Settings</a></li>
                    <li><a href="paymentsettings">Payment Settings</a></li>
                    <li><a href="currencysettings">Currency Settings</a></li>
                    <li><a href="grouppermissions">Group Permissions</a></li>
                    <li><a href="taxrates">Tax Rates</a></li>
                </ul>
                
             </div>
            @endif
            @if(!Route::is(['index-four']))
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="{{ Request::is('index','index-two') ? 'active' : '' }}" >
                            <a href="{{ route('home') }}"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                        
                    </ul>								
                </li>
                  <!-- Roster/Schedule Menu -->
                  <li class="submenu-open">
                    <h6 class="submenu-hdr">Schedule</h6>		
                    <ul>
                        <li class="{{ Request::is('manageRoster.viewSchedule') ? 'active' : '' }}"><a href="{{route('manageRoster.viewSchedule')}}"><i data-feather="calendar"></i><span>Schedule</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Announcement</h6>		
                    <ul>
                        <li class="{{ Request::is('announcementlist') ? 'active' : '' }}"><a href="{{route('manageannouncement.announcementlist')}}"><i data-feather="pen-tool"></i><span>Announcement</span></a></li>
                    </ul>
                </li>


                <li class="submenu-open">
                    <h6 class="submenu-hdr">Inventory</h6>
                    <ul>
					<li class="{{ Request::is('inventory-list','inventorylist') ? 'active' : '' }}"><a href="{{url('inventory-list')}}"><i data-feather="box"></i>Inventory List</a></li>
                    </ul>
                </li>
                
                
              
                
               														
                			
                
              
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>		
                    <ul>
                        <li>
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" ><i data-feather="log-out"></i><span>Logout</span> </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif 
            
        </div>
    </div>
</div>
<!-- /Sidebar -->
