<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ backpack_url('plan') }}'><i class='fa fa-calendar-o'></i> <span>Plans</span></a></li>
<li><a href='{{ backpack_url('person') }}'><i class='fa fa-user'></i> <span>Persons</span></a></li>
<li><a href='{{ backpack_url('passport') }}'><i class='fa fa-tag'></i> <span>Passports</span></a></li>
<li><a href='{{ backpack_url('order') }}'><i class='fa fa-first-order'></i> <span>Orders</span></a></li>
<li><a href='{{ backpack_url('transaction') }}'><i class='fa fa-money'></i> <span>Transactions</span></a></li>
<li><a href='{{ backpack_url('schedule') }}'><i class='fa fa-calendar-check-o'></i> <span>Schedules</span></a></li>
<li><a href='{{ backpack_url('voucher') }}'><i class='fa fa-tag'></i> <span>Vouchers</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>
<li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
<li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
<!-- Users, Roles Permissions -->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>
  <li><a href="{{ backpack_url('menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>

  <li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>