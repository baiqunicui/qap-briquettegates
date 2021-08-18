<nav
    class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
    <div
        class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
        <button
            class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-700 whitespace-nowrap"
            href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none"
            id="example-collapse-sidebar">
            <div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-700 whitespace-nowrap"
                            href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="flex justify-end w-6/12">
                        <button type="button"
                            class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}"
                        class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('user_management_access')
                <li class="items-center">
                    <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="#" onclick="window.openSubNav(this)">
                        <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="hidden ml-4 subnav">
                        @can('permission_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.permissions.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.roles.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.users.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('style_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/styles*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.styles.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.style.title') }}
                    </a>
                </li>
                @endcan
                @can('base_access')
                <li class="items-center">
                    <a class="has-sub {{ request()->is("admin/headers*")||request()->is("admin/footers*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="#" onclick="window.openSubNav(this)">
                        <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                        </i>
                        {{ trans('cruds.base.title') }}
                    </a>
                    <ul class="hidden ml-4 subnav">
                        @can('header_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/headers*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.headers.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.header.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('footer_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/footers*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.footers.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.footer.title') }}
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('home_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/homes*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.homes.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.home.title') }}
                    </a>
                </li>
                @endcan
                @can('about_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/abouts*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.abouts.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.about.title') }}
                    </a>
                </li>
                @endcan
                @can('product_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/products*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.products.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.product.title') }}
                    </a>
                </li>
                @endcan
                @can('product_list_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/product-lists*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.product-lists.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.productList.title') }}
                    </a>
                </li>
                @endcan
                @can('contact_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/contacts*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.contacts.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.contact.title') }}
                    </a>
                </li>
                @endcan
                @can('contact_form_list_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/contact-form-lists*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.contact-form-lists.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.contactFormList.title') }}
                    </a>
                </li>
                @endcan
                @can('upload_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/uploads*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.uploads.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.upload.title') }}
                    </a>
                </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                @can('auth_profile_edit')
                <li class="items-center">
                    <a href="{{ route("profile.show") }}"
                        class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                        {{ trans('global.my_profile') }}
                    </a>
                </li>
                @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                        class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
