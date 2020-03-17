<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">
                        </i>
                        <span>{{ trans('หน้าหลัก') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                            <li class="{{ request()->is('admin/bheader') || request()->is('admin/bheader/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bheader") }}">
                                    <i class="fa-fw fas fa-unlock-alt">
                                    </i>
                                    <span>{{ trans('ส่วนบนของเว็บ') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bslideshow') || request()->is('admin/bslideshow/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bslideshow") }}">
                                <i class="fa-fw fas fa-user">
                                </i>
                                <span>{{ trans('สไลด์โชว์') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/bnewsupdate') || request()->is('admin/bnewsupdate/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bnewsupdate") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('ประชาสัมพันธ์') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bactivities') || request()->is('admin/bactivities/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bactivities") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('กิจกรรม') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/babout') || request()->is('admin/babout/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.babout") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('เกี่ยวกับเรา') }}</span>
                            </a>
                        </li>
                        @endcan
     
                
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">
                        </i>
                        <span>{{ trans('หลักสูตร') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                            <li class="{{ request()->is('admin/bcategory') || request()->is('admin/bcategory/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bcategory") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('หมวดวิชา') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bsubgroup') || request()->is('admin/bsubgroup/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bsubgroup") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('กลุ่มวิชา') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/bsubject') || request()->is('admin/bsubject/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bsubject") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('วิชา') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bcoursegenaral') || request()->is('admin/bcoursegenaral/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bcoursegenaral") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('หลักสูตรทั่วไป') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bbitcourse') || request()->is('admin/bbitcourse/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bbitcourse") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('หลักสูตรสารสนเทศ') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bmitcourse') || request()->is('admin/bmitcourse/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bmitcourse") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('หลักสูตรการจัดการสารสนเทศ') }}</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">
                        </i>
                        <span>{{ trans('คณาจารย์') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                        <li class="{{ request()->is('admin/bposition') || request()->is('admin/bposition/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bposition") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('ตำแหน่งอาจารย์') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/bmembers') || request()->is('admin/bmembers/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.bmembers") }}">
                                <i class="fa-fw fas fa-user">

                                </i>
                                <span>{{ trans('อาจารย์') }}</span>
                            </a>
                        </li>
                        @endcan
                    
                    </ul>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">
                        </i>
                        <span>{{ trans('นักศึกษา') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_access')
                            <li class="{{ request()->is('admin/bform') || request()->is('admin/bform/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.bform") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('แบบฟอร์ม') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/baward') || request()->is('admin/baward/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.baward") }}">
                                <i class="fa-fw fas fa-unlock-alt">

                                </i>
                                <span>{{ trans('รางวัล') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                    <li class="{{ request()->is('admin/bsuccess') || request()->is('admin/bsuccess/*') ? 'active' : '' }}">
                        <a href="{{ route("admin.bsuccess") }}">
                            <i class="fa-fw fas fa-unlock-alt">

                            </i>
                            <span>{{ trans('ความสำเร็จของศิษย์เก่า') }}</span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ request()->is('admin/bcooperative') || request()->is('admin/bcooperative/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.bcooperative") }}">
                        <i class="fa-fw fas fa-unlock-alt">

                        </i>
                        <span>{{ trans('ผลงานสหกิจศึกษา') }}</span>
                    </a>
                </li>
            @endcan
            @can('user_access')
            <li class="{{ request()->is('admin/bapprentice') || request()->is('admin/bapprentice/*') ? 'active' : '' }}">
                <a href="{{ route("admin.bapprentice") }}">
                    <i class="fa-fw fas fa-unlock-alt">

                    </i>
                    <span>{{ trans('ผลงานฝึกงาน') }}</span>
                </a>
            </li>
        @endcan
        @can('user_access')
        <li class="{{ request()->is('admin/blocation') || request()->is('admin/blocation/*') ? 'active' : '' }}">
            <a href="{{ route("admin.blocation") }}">
                <i class="fa-fw fas fa-unlock-alt">

                </i>
                <span>{{ trans('สถานที่ศึกษานอกพื้นที่') }}</span>
            </a>
        </li>
    @endcan
        @can('user_access')
        <li class="{{ request()->is('admin/bstudentyear') || request()->is('admin/bstudentyear/*') ? 'active' : '' }}">
            <a href="{{ route("admin.bstudentyear") }}">
                <i class="fa-fw fas fa-unlock-alt">

                </i>
                <span>{{ trans('ปีที่เข้าศึกษา') }}</span>
            </a>
        </li>
    @endcan
    @can('user_access')
        <li class="{{ request()->is('admin/bstudent') || request()->is('admin/bstudent/*') ? 'active' : '' }}">
            <a href="{{ route("admin.bstudent") }}">
                <i class="fa-fw fas fa-unlock-alt">

                </i>
                <span>{{ trans('รายชื่อนักศึกษา') }}</span>
            </a>
        </li>
    @endcan
                    </ul>
                </li>
            @endcan
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>