 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="background: #fff">
          <img src="{{ asset('webassets/imgs/logo.png')}}" style="width:80%" alt="User Image" />

      </div>

      <ul class="sidebar-menu">
        {{-- <li class="header">MAIN NAVIGATION</li> --}}

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>الرئيسية</span> <i class="fa fa-angle-left pull-right"></i>
          </a>

        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span> إعدادات الموقع</span>
            <i class="fa fa-angle-left pull-right"></i>
            {{-- <span class="label label-primary pull-right">4</span> --}}
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('home-slider.index') }}"><i class="fa fa-circle-o"></i> السلايدر الرئيسي </a></li>
             <li><a href="{{ route('admin-company-contact.index') }}"><i class="fa fa-circle-o"></i> بيانات التواصل</a></li>
             <li><a href="{{ route('admin-feedback.index') }}"><i class="fa fa-circle-o"></i> اراء العملاء </a></li>
             <li><a href="{{ route('whyus.index') }}"><i class="fa fa-circle-o"></i>  لماذا نحن</a></li>
             <li><a href="{{ route('admin-contact-form') }}"><i class="fa fa-circle-o"></i> رسائل العملاء </a></li>
             {{-- <li><a href="{{ route('admin-partners.index') }}"><i class="fa fa-circle-o"></i> شركاء النجاح</a></li>

            <li><a href="{{ route('admin-contact-form') }}"><i class="fa fa-circle-o"></i> رسائل العملاء </a></li> --}}




          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>المقالات</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{ route('admin-blogs.index') }}"><i class="fa fa-circle-o"></i> عرض المقالات </a></li>
            <li><a href="{{ route('admin-blogs.create') }}"><i class="fa fa-circle-o"></i> انشاء مقالة </a></li>


          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>الخدمات</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin-services.index') }}"><i class="fa fa-circle-o"></i> عرض الخدمات </a></li>
                <li><a href="{{ route('admin-services.create') }}"><i class="fa fa-circle-o"></i> انشاء خدمة </a></li>


            </ul>
          </li>

        <li class="treeview">
            <a href="">
              <i class="fa fa-edit"></i>
              <span>معرض الصور</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin-gallery-category.index') }}"><i class="fa fa-circle-o text-red"></i> <span> تصنيفات معرض الصور</span></a>
                    <li><a href="{{ route('admin-gallery.index') }}"><i class="fa fa-circle-o"></i> معرض الصور</a></li>

            </ul>
          </li>









     </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
