<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AddPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPermissions = [
            [
                "name" => "Manage affiliate_overview",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],

            [
                "name" => "Manage payout_configurations",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],

            [
                "name" => "Manage affiliate_earnings",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],

            [
                "name" => "Manage withdraw_requests",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],

            [
                "name" => "Manage payment_histories",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],

            [
                "name" => "Manage affiliate_configurations",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "name" => "Manage affiliate_withdraw",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "name" => "Manage affiliate_payment_histories",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "name" => "Manage affiliate_earning_histories",
                "guard_name" => "web",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
        ];
        Permission::insert($arrPermissions);

        $superAdminRole  = Role::whereName('super admin')->first();

        $superAdminPermissions = [
            ["name" => "Manage affiliate_configurations"],
            ["name" => "Manage affiliate_earning_histories"],
            ["name" => "Manage affiliate_withdraw"],
            ["name" => "Manage affiliate_payment_histories"],
        ];

        $superAdminRole->givePermissionTo($superAdminPermissions);


        $superAdmin    = User::whereName('Super Admin')->first();
        $superAdmin->assignRole($superAdminRole);

        $ownerRole        = Role::whereName('Owner')->first();
        $ownerPermissions = [
            ["name" => "Manage affiliate_overview"],
            ["name" => "Manage payout_configurations"],
            ["name" => "Manage affiliate_earnings"],
            ["name" => "Manage withdraw_requests"],
            ["name" => "Manage payment_histories"],

            ["name" => "Manage affiliate_configurations"],
            ["name" => "Manage affiliate_earning_histories"],
            ["name" => "Manage affiliate_withdraw"],
            ["name" => "Manage affiliate_payment_histories"],
        ];
        $ownerRole->givePermissionTo($ownerPermissions);

        $admin = User::where('name', 'Owner')->first();
        $admin->assignRole($ownerRole);
    }
}
