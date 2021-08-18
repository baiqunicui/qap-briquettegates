<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'style_create',
            ],
            [
                'id'    => 19,
                'title' => 'style_edit',
            ],
            [
                'id'    => 20,
                'title' => 'style_show',
            ],
            [
                'id'    => 21,
                'title' => 'style_delete',
            ],
            [
                'id'    => 22,
                'title' => 'style_access',
            ],
            [
                'id'    => 23,
                'title' => 'home_create',
            ],
            [
                'id'    => 24,
                'title' => 'home_edit',
            ],
            [
                'id'    => 25,
                'title' => 'home_show',
            ],
            [
                'id'    => 26,
                'title' => 'home_delete',
            ],
            [
                'id'    => 27,
                'title' => 'home_access',
            ],
            [
                'id'    => 28,
                'title' => 'about_create',
            ],
            [
                'id'    => 29,
                'title' => 'about_edit',
            ],
            [
                'id'    => 30,
                'title' => 'about_show',
            ],
            [
                'id'    => 31,
                'title' => 'about_delete',
            ],
            [
                'id'    => 32,
                'title' => 'about_access',
            ],
            [
                'id'    => 33,
                'title' => 'product_create',
            ],
            [
                'id'    => 34,
                'title' => 'product_edit',
            ],
            [
                'id'    => 35,
                'title' => 'product_show',
            ],
            [
                'id'    => 36,
                'title' => 'product_delete',
            ],
            [
                'id'    => 37,
                'title' => 'product_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_list_create',
            ],
            [
                'id'    => 39,
                'title' => 'product_list_edit',
            ],
            [
                'id'    => 40,
                'title' => 'product_list_show',
            ],
            [
                'id'    => 41,
                'title' => 'product_list_delete',
            ],
            [
                'id'    => 42,
                'title' => 'product_list_access',
            ],
            [
                'id'    => 43,
                'title' => 'contact_create',
            ],
            [
                'id'    => 44,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 45,
                'title' => 'contact_show',
            ],
            [
                'id'    => 46,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 47,
                'title' => 'contact_access',
            ],
            [
                'id'    => 48,
                'title' => 'base_access',
            ],
            [
                'id'    => 49,
                'title' => 'header_create',
            ],
            [
                'id'    => 50,
                'title' => 'header_edit',
            ],
            [
                'id'    => 51,
                'title' => 'header_show',
            ],
            [
                'id'    => 52,
                'title' => 'header_delete',
            ],
            [
                'id'    => 53,
                'title' => 'header_access',
            ],
            [
                'id'    => 54,
                'title' => 'footer_create',
            ],
            [
                'id'    => 55,
                'title' => 'footer_edit',
            ],
            [
                'id'    => 56,
                'title' => 'footer_show',
            ],
            [
                'id'    => 57,
                'title' => 'footer_delete',
            ],
            [
                'id'    => 58,
                'title' => 'footer_access',
            ],
            [
                'id'    => 59,
                'title' => 'contact_form_list_create',
            ],
            [
                'id'    => 60,
                'title' => 'contact_form_list_edit',
            ],
            [
                'id'    => 61,
                'title' => 'contact_form_list_show',
            ],
            [
                'id'    => 62,
                'title' => 'contact_form_list_delete',
            ],
            [
                'id'    => 63,
                'title' => 'contact_form_list_access',
            ],
            [
                'id'    => 64,
                'title' => 'upload_create',
            ],
            [
                'id'    => 65,
                'title' => 'upload_edit',
            ],
            [
                'id'    => 66,
                'title' => 'upload_show',
            ],
            [
                'id'    => 67,
                'title' => 'upload_delete',
            ],
            [
                'id'    => 68,
                'title' => 'upload_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
