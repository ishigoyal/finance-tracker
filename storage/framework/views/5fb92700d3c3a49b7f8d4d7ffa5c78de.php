<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            <?php echo e(trans('panel.site_title')); ?>

        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="<?php echo e(route("admin.home")); ?>" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                <?php echo e(trans('global.dashboard')); ?>

            </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/permissions*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/roles*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/users*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.userManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.permissions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.permission.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.roles.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.role.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.users.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.user.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/expense-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/income-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/expenses*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/incomes*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/expense-reports*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-money-bill c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.expenseManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.expense-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/expense-categories") || request()->is("admin/expense-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.expenseCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.income-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/income-categories") || request()->is("admin/income-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.incomeCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.expenses.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/expenses") || request()->is("admin/expenses/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-arrow-circle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.expense.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.incomes.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/incomes") || request()->is("admin/incomes/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-arrow-circle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.income.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_report_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.expense-reports.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/expense-reports") || request()->is("admin/expense-reports/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-chart-line c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.expenseReport.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : ''); ?>" href="<?php echo e(route('profile.password.edit')); ?>">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        <?php echo e(trans('global.change_password')); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                <?php echo e(trans('global.logout')); ?>

            </a>
        </li>
    </ul>

</div><?php /**PATH D:\PROJECTS\lara10\storage\quickadminpanel\projects\expense_management\resources\views/partials/menu.blade.php ENDPATH**/ ?>