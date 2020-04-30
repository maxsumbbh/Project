<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <h4><i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    
                    {{ trans('จัดการข้อมูล') }}</h4>
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <h4><i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('สมาชิก') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></h4>
                    </a>
                    <ul class="treeview-menu">
                        {{-- @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <h4><i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('การอนุมัติ') }}</span></h4>
                                </a>
                            </li>
                        @endcan --}}
                        {{-- @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                <h4><i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('สถานะ') }}</span></h4>
                                </a>
                            </li>
                        @endcan --}}
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                <h4><i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('รายชื่อสมาชิก') }}</span></h4>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                    <h4><i class="glyphicon glyphicon-home">
                        </i>
                        <span>{{ trans('หน้าหลัก') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></h4>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                            <li class="{{ request()->is('admin/bheader') || request()->is('admin/bheader/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bheader") }}">
                                <h4><i class="fa-fw fas fa-unlock-alt">
                                    </i>
                                    <span>{{ trans('ส่วนบนของเว็บ') }}</span></h4>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bslideshow') || request()->is('admin/bslideshow/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bslideshow") }}">
                                <h4><i class="glyphicon glyphicon-calendar">
                                </i>
                                <span>{{ trans('สไลด์โชว์') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/bnewsupdate') || request()->is('admin/bnewsupdate/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bnewsupdate") }}">
                                <h4><i class="glyphicon glyphicon-bullhorn">

                                    </i>
                                    <span>{{ trans('ประชาสัมพันธ์') }}</span></h4>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bactivities') || request()->is('admin/bactivities/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bactivities") }}">
                            <h4><i class="glyphicon glyphicon-list-alt">

                                </i>
                                <span>{{ trans('กิจกรรม') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/babout') || request()->is('admin/babout/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.babout") }}">
                            <h4><i class="glyphicon glyphicon-credit-card">

                                </i>
                                <span>{{ trans('เกี่ยวกับเรา') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bcomment') || request()->is('admin/bcomment/*') ? 'active' : '' }}">
                            <a href="bcomment">
                            <h4><i class="glyphicon glyphicon-credit-card">

                                </i>
                                <span>{{ trans('ข้อเสนอแนะ') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                 
     
                
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                    <h4><i class="glyphicon glyphicon-education">
                        </i>
                        <span>{{ trans('หลักสูตร') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></h4>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                            <li class="{{ request()->is('admin/bcategory') || request()->is('admin/bcategory/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bcategory") }}">
                                <h4><i class="glyphicon glyphicon-book ">

                                    </i>
                                    <span>{{ trans('หมวดวิชา') }}</span></h4>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bsubgroup') || request()->is('admin/bsubgroup/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bsubgroup") }}">
                            <h4><i class="glyphicon glyphicon-book ">

                                </i>
                                <span>{{ trans('กลุ่มวิชา') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/bsubject') || request()->is('admin/bsubject/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bsubject") }}">
                                <h4><i class="glyphicon glyphicon-book ">

                                    </i>
                                    <span>{{ trans('วิชา') }}</span></h4>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bcoursegenaral') || request()->is('admin/bcoursegenaral/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bcoursegenaral") }}">
                            <h4><i class="glyphicon glyphicon-book ">

                                </i>
                                <span>{{ trans('หลักสูตรทั่วไป') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bbitcourse') || request()->is('admin/bbitcourse/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bbitcourse") }}">
                            <h4><i class="glyphicon glyphicon-book ">

                                </i>
                                <span>{{ trans('พัฒนาซอฟต์แวร์') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bmitcourse') || request()->is('admin/bmitcourse/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bmitcourse") }}">
                            <h4><i class="glyphicon glyphicon-book ">

                                </i>
                                <span>{{ trans('การจัดการสารสนเทศ') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                    <h4><i class="fa-fw fas fa-users">
                        </i>
                        <span>{{ trans('บุคลากร') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></h4>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                        <li class="{{ request()->is('admin/bposition') || request()->is('admin/bposition/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bposition") }}">
                            <h4><i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('ตำแหน่งคณาจารย์') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bmembers') || request()->is('admin/bmembers/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bmembers") }}">
                            <h4><i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('คณาจารย์') }}</span></h4>
                            </a>
                        </li>
                        @endcan
                    
                    </ul>
                </li>
                
                <li class="treeview">
                    <a href="#">
                    <h4><i class="glyphicon glyphicon-user">
                        </i>
                        <span>{{ trans('นักศึกษา') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></h4>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                            <li class="{{ request()->is('admin/bform') || request()->is('admin/bform/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bform") }}">
                                <h4><i class="glyphicon glyphicon-file">

                                    </i>
                                    <span>{{ trans('แบบฟอร์ม') }}</span></h4>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/baward') || request()->is('admin/baward/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.baward") }}">
                            <h4><i class="glyphicon glyphicon-glass">

                                </i>
                                <span>{{ trans('รางวัล') }}</span></h4>
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                    <li class="{{ request()->is('admin/bsuccess') || request()->is('admin/bsuccess/*') ? 'active' : '' }}">
                        <a href="{{ route("admin.bsuccess") }}">
                        <h4><i class="glyphicon glyphicon-briefcase">

                            </i>
                            <span>{{ trans('ความสำเร็จ') }}</span></h4>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ request()->is('admin/bcooperative') || request()->is('admin/bcooperative/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.bcooperative") }}">
                    <h4><i class="glyphicon glyphicon-bell">

                        </i>
                        <span>{{ trans('ผลงานสหกิจศึกษา') }}</span></h4>
                    </a>
                </li>
            @endcan
            @can('user_access')
            <li class="{{ request()->is('admin/bapprentice') || request()->is('admin/bapprentice/*') ? 'active' : '' }}">
                <a href="{{ route("admin.bapprentice") }}">
                <h4><i class="glyphicon glyphicon-bell">

                    </i>
                    <span>{{ trans('ผลงานโครงงาน') }}</span></h4>
                </a>
            </li>
        @endcan
        @can('user_access')
        <li class="{{ request()->is('admin/blocation') || request()->is('admin/blocation/*') ? 'active' : '' }}">
            <a href="{{ route("admin.blocation") }}">
            <h4><i class="glyphicon glyphicon-pushpin">

                </i>
                <span>{{ trans('สถานที่ฝึกประสบการณ์') }}</span></h4>
            </a>
        </li>
    @endcan
        @can('user_access')
        <li class="{{ request()->is('admin/bstudentyear') || request()->is('admin/bstudentyear/*') ? 'active' : '' }}">
            <a href="{{ route("admin.bstudentyear") }}">
            <h4><i class="glyphicon glyphicon-user">

                </i>
                <span>{{ trans('ปีที่เข้าศึกษา') }}</span></h4>
            </a>
        </li>
    @endcan
    @can('user_access')
        <li class="{{ request()->is('admin/bstudent') || request()->is('admin/bstudent/*') ? 'active' : '' }}">
            <a href="{{ route("admin.bstudent") }}">
            <h4><i class="glyphicon glyphicon-user">

                </i>
                <span>{{ trans('รายชื่อนักศึกษา') }}</span></h4>
            </a>
        </li>
    @endcan
                    </ul>
                </li>
            @endcan
            <li>
                <a href="" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <h4><i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('ออกจากระบบ') }}</h4>
                </a>
            </li>
        </ul>
    </section>
</aside>