  <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
           <img src="{{ URL::asset('uploads/avatar.png')}}" class="user-image" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active">
            <a href="/administrator/dashboard" >
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="/administrator/listvideos" >
              <i class="fa fa-play-circle-o"></i>
              <span>Videos</span>

            </a>
                
          </li>

          <li>
            <a href="/administrator/listcategory" >
              <i class="fa fa fa-tasks"></i>
              <span>Category</span>

            </a>

          </li>

          <li>
            <a href="{{'/administrator/listsubvideos'}}" >
              <i class="fa fa-play-circle"></i>
              <span>Sub Videos</span>

            </a>

          </li>

          <li>
            <a href="{{'/administrator/listuser'}}" >
              <i class="fa fa-users"></i>
              <span>User</span>

            </a>

          </li>

          <li>
            <a href="{{ route('listlogos') }}" >
              <i class="fa fa-dribbble"></i>
              <span>Logos</span>

            </a>

          </li>
          <li>
            <a href="/administrator/listads" >
             <i class="fa fa-adn"></i>
             <span>ADS</span>

           </a>

         </li>
         <li>
          <a href="/administrator/listfooter" >
           <i class="fa fa-outdent"></i>
           <span>Footer</span>

         </a>

       </li>

       <li>
        <a href="/administrator/listvideos" >
         <i class="glyphicon glyphicon-log-out"></i>
         <span>Log out</span>

       </a>

     </li>
   </ul>
   <!-- /.sidebar-menu -->
 </section>
 <!-- /.sidebar -->
</aside>