<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            @can('user_management_access')
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext"
                        data-i18n="nav.dash.main">{{ trans('cruds.userManagement.title') }}</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    @can('permission_access')
                    <li class="">
                        <a href="{{ route("admin.permissions.index") }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.dash.default">{{ trans('cruds.permission.title') }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="">
                        <a href="{{ route("admin.roles.index") }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.dash.default">{{ trans('cruds.role.title') }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <li class="">
                        <a href="{{ route("admin.users.index") }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.dash.default">{{ trans('cruds.user.title') }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('service_access')
            <li class="">
                <a href="{{ route("admin.services.index") }}">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                    <span class="pcoded-mtext"
                        data-i18n="nav.documentation.main">{{ trans('cruds.service.title') }}</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            @can('employee_access')
            <li class="">
                <a href="{{ route("admin.employees.index") }}">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                    <span class="pcoded-mtext"
                        data-i18n="nav.documentation.main">{{ trans('cruds.employee.title') }}</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            @can('client_access')
            <li class="">
                <a href="{{ route("admin.clients.index") }}">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                    <span class="pcoded-mtext"
                        data-i18n="nav.documentation.main">{{ trans('cruds.client.title') }}</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            @can('appointment_access')
            <li class="">
                <a href="{{ route("admin.appointments.index") }}">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                    <span class="pcoded-mtext"
                        data-i18n="nav.documentation.main">{{ trans('cruds.appointment.title') }}</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            <li class="">
                <a href="{{ route("admin.systemCalendar") }}">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                    <span class="pcoded-mtext"
                        data-i18n="nav.documentation.main">{{ trans('global.systemCalendar') }}</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support">Support</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="../doc/index.html" target="_blank">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.documentation.main">Documentation</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="#" target="_blank">
                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i><b>SI</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.submit-issue.main">Submit Issue</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
