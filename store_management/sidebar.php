    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand"><i class="fa fa-motorcycle" aria-hidden="true">&nbsp;&nbsp;Store Management</i></a>
                <a class="navbar-brand hidden"><i class="fa fa-motorcycle" aria-hidden="true">&nbsp;&nbsp;</i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Departments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Sales Departments</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="sales.php">Create Sales Order</a></li>
                            <li><i class="fa fa-sale"></i><a href="view_sales.php">View All Sales Order</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Purchase Department</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="purchase_order.php">Purchase Order</a></li>
                            <li><i class="fa fa-table"></i><a href="view_purchase.php">View All Purchase Order</a></li>
                        </ul>
                    </li>
                  <!--   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Store Department</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li> -->
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-inr"></i>Billing Department</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="billing_sales.php">Sales Billing</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="billing_purchase.php">Purchase Billing</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Create Categoery</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="tables-data.php">Create Vehicle Company</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="data_table_create_vehicle_name.php">Create Vehicle Name</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="data_table_create_company_part.PHP">Create Company Part</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="data_table_create_part_name.php">Create Part Name</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="config/logout.php"> <i class="menu-icon fa fa-power-off"></i>Logout
                    </li>
    </aside>
