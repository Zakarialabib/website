<x-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-3 px-3">

    <x-sidebar.link title="{{ __('Dashboard') }}" href="{{ route('admin.dashboard') }}" :isActive="request()->routeIs('admin.dashboard')">
        <x-slot name="icon">
            <span class="inline-block ltr:mx-3 rtl:mr-3">
                <x-icons.dashboard class="w-5 h-5" aria-hidden="true" />
            </span>
        </x-slot>
    </x-sidebar.link>

    @can('product_access')

        <x-sidebar.dropdown title="{{ __('Products') }}" :active="request()->routeIs([
            'admin.products.*',
            'admin.product-categories.index',
            'admin.product-subcategories.index',
            'admin.barcode.print',
            'admin.brands.index',
            'admin.warehouses.index',
            'admin.adjustments.index',
        ])">

            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-boxes w-5 h-5"></i>
                </span>
            </x-slot>

            @can('category_access')
                <x-sidebar.sublink title="{{ __('Categories') }}" href="{{ route('admin.product-categories.index') }}"
                    :active="request()->routeIs('admin.product-categories.index')" />
            @endcan
            @can('subcategory_access')
                <x-sidebar.sublink title="{{ __('SubCategories') }}" href="{{ route('admin.product-subcategories.index') }}"
                    :active="request()->routeIs('admin.product-subcategories.index')" />
            @endcan
            @can('brand_access')
                <x-sidebar.sublink title="{{ __('Brands') }}" href="{{ route('admin.brands.index') }}" :active="request()->routeIs('admin.brands.index')" />
            @endcan
            <x-sidebar.sublink title="{{ __('All Products') }}" href="{{ route('admin.products.index') }}"
                :active="request()->routeIs('admin.products.index')" />

            @can('print_barcodes')
                <x-sidebar.sublink title="{{ __('Print Barcode') }}" href="{{ route('admin.barcode.print') }}"
                    :active="request()->routeIs('admin.barcode.print')" />
            @endcan

            @can('warehouse_access')
                <x-sidebar.sublink title="{{ __('Warehouses') }}" href="{{ route('admin.warehouses.index') }}"
                    :active="request()->routeIs('admin.warehouses.index')" />
            @endcan
            @can('adjustment_access')
                <x-sidebar.sublink title="{{ __('Stock adjustments') }}" href="{{ route('admin.adjustments.index') }}"
                    :active="request()->routeIs('admin.adjustments.index')" />
            @endcan

            {{-- <x-sidebar.sublink title="{{ __('Device Models') }}" href="{{ route('admin.device-models') }}"
            :active="request()->routeIs('admin.device-models')" /> --}}

        </x-sidebar.dropdown>
    @endcan

    <x-sidebar.dropdown title="{{ __('Content') }}" :active="request()->routeIs([
        'admin.blogs.*',
        'admin.blogcategories.*',
        'admin.pages.*',
        'admin.sections.*',
        'admin.sliders.*',
        'admin.featuredBanners',
        'admin.contacts.*',
    ])">
        <x-slot name="icon">
            <span class="inline-block ltr:mx-3 rtl:mr-3">
                <i class="fas fa-file-alt w-5 h-5"></i>
            </span>
        </x-slot>

        @can('blog_access')
            <x-sidebar.sublink title="{{ __('All Blog') }}" href="{{ route('admin.blogs.index') }}" :active="request()->routeIs('admin.blogs.index')" />
            <x-sidebar.sublink title="{{ __('Blog Categories') }}" href="{{ route('admin.blog-categories.index') }}"
                :active="request()->routeIs('admin.blog-categories.index')" />
        @endcan
        <x-sidebar.sublink title="{{ __('Pages') }}" href="{{ route('admin.pages.index') }}" :active="request()->routeIs('admin.pages.index')" />
        <x-sidebar.sublink title="{{ __('Page Settings') }}" href="{{ route('admin.page.settings') }}"
            :active="request()->routeIs('admin.page.settings')" />
        <x-sidebar.sublink title="{{ __('Sections') }}" href="{{ route('admin.sections.index') }}"
            :active="request()->routeIs('admin.sections.index')" />
        <x-sidebar.sublink title="{{ __('Sliders') }}" href="{{ route('admin.sliders.index') }}" :active="request()->routeIs('admin.sliders.index')" />
        <x-sidebar.sublink title="{{ __('Featured Banners') }}" href="{{ route('admin.featuredBanners') }}"
            :active="request()->routeIs('admin.featuredBanners')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="{{ __('Transactions') }}" :active="request()->routeIs(['admin.orders.index', 'admin.orderforms', 'admin.contacts.index'])">
        <x-slot name="icon">
            <span class="inline-block ltr:mx-3 rtl:mr-3">
                <i class="fas fa-shopping-cart w-5 h-5"></i>
            </span>
        </x-slot>
        @can('order_access')
            <x-sidebar.sublink title="{{ __('Orders list') }}" href="{{ route('admin.orders.index') }}"
                :active="request()->routeIs('admin.orders.index')" />
            <x-sidebar.sublink title="{{ __('Order Forms') }}" href="{{ route('admin.orderforms') }}"
                :active="request()->routeIs('admin.orderforms')" />
            <x-sidebar.sublink title="{{ __('Contact Forms') }}" href="{{ route('admin.contacts.index') }}"
                :active="request()->routeIs('admin.contacts.index')" />
        @endcan
        <x-sidebar.sublink title="{{ __('Cash Register') }}" href="{{ route('admin.cash-register.index') }}"
            :active="request()->routeIs('admin.cash-register.index')" />
        <x-sidebar.sublink title="{{ __('Delivery') }}" href="{{ route('admin.deliveries.index') }}"
            :active="request()->routeIs('admin.deliveries.index')" />

    </x-sidebar.dropdown>

    @can('quotation_access')
        <x-sidebar.dropdown title="{{ __('Quotations') }}" :active="request()->routeIs('admin.quotations.index')">

            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-file-invoice-dollar w-5 h-5"></i>
                </span>
            </x-slot>
            <x-sidebar.sublink title="{{ __('All Quotations') }}" href="{{ route('admin.quotations.index') }}"
                :active="request()->routeIs('admin.quotations.index')" />
        </x-sidebar.dropdown>
    @endcan

    @can('purchase_access')
        <x-sidebar.dropdown title="{{ __('Purchases') }}" :active="request()->routeIs('admin.purchases.index') || request()->routeIs('purchase-returns.index')">
            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-shopping-cart w-5 h-5"></i>
                </span>
            </x-slot>
            <x-sidebar.sublink title="{{ __('All Purchases') }}" href="{{ route('admin.purchases.index') }}"
                :active="request()->routeIs('admin.purchases.index')" />
            @can('purchase_return_access')
                <x-sidebar.sublink title="{{ __('All Purchase Returns') }}" href="{{ route('admin.purchase-returns.index') }}"
                    :active="request()->routeIs('admin.purchase-returns.index')" />
            @endcan
        </x-sidebar.dropdown>
    @endcan
    @can('sale_access')
        <x-sidebar.dropdown title="{{ __('Sales') }}" :active="request()->routeIs(['admin.sales.index', 'admin.sale-returns.index'])">
            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-shopping-bag w-5 h-5"></i>
                </span>
            </x-slot>

            <x-sidebar.sublink title="{{ __('All Sales') }}" href="{{ route('admin.sales.index') }}" :active="request()->routeIs('admin.sales.index')" />

            @can('sale_return_access')
                <x-sidebar.sublink title="{{ __('All Sale Returns') }}" href="{{ route('admin.sale-returns.index') }}"
                    :active="request()->routeIs('admin.sale-returns.index')" />
            @endcan
        </x-sidebar.dropdown>
    @endcan


    @can('expense_access')
        <x-sidebar.dropdown title="{{ __('Expenses') }}" :active="request()->routeIs(['admin.expenses.index', 'admin.expense-categories.index'])">
            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-money-bill-alt w-5 h-5"></i>
                </span>
            </x-slot>

            @can('expense_categories_access')
                <x-sidebar.sublink title="{{ __('Categories') }}" href="{{ route('admin.expense-categories.index') }}"
                    :active="request()->routeIs('admin.expense-categories.index')" />
            @endcan
            <x-sidebar.sublink title="{{ __('All Expenses') }}" href="{{ route('admin.expenses.index') }}"
                :active="request()->routeIs('admin.expenses.index')" />
        </x-sidebar.dropdown>
    @endcan

    @can('report_access')
        <x-sidebar.dropdown title="{{ __('Reports') }}" :active="request()->routeIs([
            'admin.purchases-report.index',
            'admin.sales-report.index',
            'admin.sales-return-report.index',
            'admin.payments-report.index',
            'admin.purchases-return-report.index',
            'admin.profit-loss-report.index',
        ])">
            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-chart-line w-5 h-5"></i>
                </span>
            </x-slot>

            <x-sidebar.sublink title="{{ __('Customer Report') }}" href="{{ route('admin.customers-report.index') }}"
                :active="request()->routeIs('admin.customers-report.index')" />
            <x-sidebar.sublink title="{{ __('Profit Report') }}" href="{{ route('admin.profit-loss-report.index') }}"
                :active="request()->routeIs('admin.profit-loss-report.index')" />
            <x-sidebar.sublink title="{{ __('Profit Report') }}" href="{{ route('admin.profit-loss-report.index') }}"
                :active="request()->routeIs('admin.profit-loss-report.index')" />
            <x-sidebar.sublink title="{{ __('Purchases Report') }}" href="{{ route('admin.purchases-report.index') }}"
                :active="request()->routeIs('admin.purchases-report.index')" />
            <x-sidebar.sublink title="{{ __('Purchases Return Report') }}"
                href="{{ route('admin.purchases-return-report.index') }}" :active="request()->routeIs('admin.purchases-return-report.index')" />
            <x-sidebar.sublink title="{{ __('Sale Report') }}" href="{{ route('admin.sales-report.index') }}"
                :active="request()->routeIs('admin.sales-report.index')" />
            <x-sidebar.sublink title="{{ __('Sale Return Report') }}"
                href="{{ route('admin.sales-return-report.index') }}" :active="request()->routeIs('admin.sales-return-report.index')" />
            <x-sidebar.sublink title="{{ __('Payment Report') }}" href="{{ route('admin.payments-report.index') }}"
                :active="request()->routeIs('admin.payments-report.index')" />

        </x-sidebar.dropdown>
    @endcan

    @can('user_access')
        <x-sidebar.dropdown title="{{ __('People') }}" :active="request()->routeIs('admin.customers.*') ||
            request()->routeIs('admin.customer-group.*') ||
            request()->routeIs('admin.suppliers.*') ||
            request()->routeIs('admin.users.*') ||
            request()->routeIs('admin.roles.*') ||
            request()->routeIs('admin.permissions.*')">
            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-users w-5 h-5"></i>
                </span>
            </x-slot>
            <x-sidebar.sublink title="{{ __('Users') }}" href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.index')" />
            @can('customer_access')
                <x-sidebar.sublink title="{{ __('Customers') }}" href="{{ route('admin.customers.index') }}"
                    :active="request()->routeIs('admin.customers.index')" />
            @endcan
            @can('customer_group_access')
                <x-sidebar.sublink title="{{ __('Customer Groups') }}" href="{{ route('admin.customer-group.index') }}"
                    :active="request()->routeIs('admin.customer-group.index')" />
            @endcan
            @can('suppliers_access')
                <x-sidebar.sublink title="{{ __('Suppliers') }}" href="{{ route('admin.suppliers.index') }}"
                    :active="request()->routeIs('admin.suppliers.index')" />
            @endcan
            @can('access_roles')
                <x-sidebar.sublink title="{{ __('Roles') }}" href="{{ route('admin.roles.index') }}" :active="request()->routeIs('admin.roles.index')" />
            @endcan
            @can('access_permissions')
                <x-sidebar.sublink title="{{ __('Permissions') }}" href="{{ route('admin.permissions.index') }}"
                    :active="request()->routeIs('admin.permissions.index')" />
            @endcan
        </x-sidebar.dropdown>
    @endcan
    @can('access_settings')
        <x-sidebar.dropdown title="{{ __('Settings') }}" :active="request()->routeIs([
            'admin.settings.index',
            'admin.logs.index',
            'admin.currencies.index',
            'admin.languages.index',
            'setting.backup',
        ])">
            <x-slot name="icon">
                <span class="inline-block ltr:mx-3 rtl:mr-3">
                    <i class="fas fa-cog w-5 h-5"></i>
                </span>
            </x-slot>
            <x-sidebar.sublink title="{{ __('Settings') }}" href="{{ route('admin.settings.index') }}"
                :active="request()->routeIs('admin.settings.index')" />
            <x-sidebar.sublink title="{{ __('Menu Settings') }}" href="{{ route('admin.menu-settings.index') }}"
                :active="request()->routeIs('admin.menu-settings.index')" />

            @can('log_access')
                <x-sidebar.sublink title="{{ __('Logs') }}" href="{{ route('admin.logs.index') }}" :active="request()->routeIs('admin.logs.index')" />
            @endcan
            @can('currency_access')
                <x-sidebar.sublink title="{{ __('Currencies') }}" href="{{ route('admin.currencies.index') }}"
                    :active="request()->routeIs('admin.currencies.index')" />
            @endcan
            @can('language_access')
                <x-sidebar.sublink title="{{ __('Languages') }}" href="{{ route('admin.languages.index') }}"
                    :active="request()->routeIs('admin.languages.index')" />
            @endcan
            @can('backup_access')
                <x-sidebar.sublink title="{{ __('Backup') }}" href="{{ route('admin.setting.backup') }}"
                    :active="request()->routeIs('admin.setting.backup')" />
            @endcan

            <x-sidebar.sublink title="{{ __('Shipping') }}" href="{{ route('admin.shipping.index') }}"
                :active="request()->routeIs('admin.shipping.index')" />
            <x-sidebar.sublink title="{{ __('Redirects') }}" href="{{ route('admin.setting.redirects') }}"
                :active="request()->routeIs('admin.setting.redirects')" />

        </x-sidebar.dropdown>
    @endcan

    <x-sidebar.link title="{{ __('Logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logoutform').submit();"
        href="#">
        <x-slot name="icon">
            <span class="inline-block ltr:mx-3 rtl:mr-3">
                <i class="fas fa-sign-out-alt w-5 h-5" aria-hidden="true"></i>
            </span>
        </x-slot>
    </x-sidebar.link>

</x-scrollbar>
