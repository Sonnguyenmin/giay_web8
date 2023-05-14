<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('blog-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-blog'));
        });

        Gate::define('category-list', 'App\Policies\Categorypolicy@view');

        Gate::define('menu-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-menu'));
        });
        Gate::define('brand-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-brand'));
        });
        Gate::define('attribute-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-attribute'));
        });
        Gate::define('product-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-product'));
        });
        Gate::define('slide-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-slide'));
        });
        Gate::define('setting-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-setting'));
        });
        Gate::define('user-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-user'));
        });
        Gate::define('role-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-role'));
        });
        Gate::define('permission-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-permission'));
        });
        Gate::define('order-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-order'));
        });

        Gate::define('statistical-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-statistical'));
        });
        Gate::define('productImage-list', function (User $user) {
            return $user->checkPermissionAccess(config('permission.access.list-productImage'));
        });
    }
}
