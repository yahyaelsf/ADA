<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admins',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'مدراء النظام',
                'parent_id' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admins-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'رؤية المدراء',
                'parent_id' => 1,
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'admins-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'اضافة تعديل مدير',
                'parent_id' => 1,
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'admins-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'تغيير حالة المدراء',
                'parent_id' => 1,
            ),
            4 =>
            array (
                'id' => 6,
                'name' => 'admins-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'حذف المدراء',
                'parent_id' => 1,
            ),
            5 =>
            array (
                'id' => 7,
                'name' => 'users',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'المستخدمين',
                'parent_id' => NULL,
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'users-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:40',
                'display_name' => 'رؤية المستخدمين',
                'parent_id' => 7,
            ),
            7 =>
            array (
                'id' => 9,
                'name' => 'users-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:21',
                'display_name' => 'اضافة وتعديل المستخدمين',
                'parent_id' => 7,
            ),
            8 =>
            array (
                'id' => 10,
                'name' => 'users-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:09',
                'display_name' => 'تغيير حالة المستخدمين',
                'parent_id' => 7,
            ),
            9 =>
            array (
                'id' => 11,
                'name' => 'users-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:02',
                'display_name' => 'حذف المستخدمين',
                'parent_id' => 7,
            ),
            10 =>
            array (
                'id' => 12,
                'name' => 'settings',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الإعدادات',
                'parent_id' => NULL,
            ),
            11 =>
            array (
                'id' => 13,
                'name' => 'settings-edit',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:20:48',
                'display_name' => 'تعديل إعدادات النظام',
                'parent_id' => 12,
            ),
            12 =>
            array (
                'id' => 14,
                'name' => 'roles',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 00:00:00',
                'updated_at' => NULL,
                'display_name' => 'الأدوار',
                'parent_id' => NULL,
            ),
            13 =>
            array (
                'id' => 15,
                'name' => 'roles-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'رؤية الأدوار',
                'parent_id' => 14,
            ),
            14 =>
            array (
                'id' => 16,
                'name' => 'roles-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'اضافة وتعديل دور',
                'parent_id' => 14,
            ),
            15 =>
            array (
                'id' => 17,
                'name' => 'roles-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'حذف الأدوار',
                'parent_id' => 14,
            ),
            16 =>
            array (
                'id' => 18,
                'name' => 'agricultrels',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Agricultrels',
                'parent_id' => NULL,
            ),
            17 =>
            array (
                'id' => 19,
                'name' => 'agricultrels-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All Agricultrels',
                'parent_id' => 18,
            ),
            18 =>
            array (
                'id' => 20,
                'name' => 'agricultrels-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit Agricultrel',
                'parent_id' => 18,
            ),
            19 =>
            array (
                'id' => 21,
                'name' => 'agricultrels-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status Agricultrel',
                'parent_id' => 18,
            ),
            20 =>
            array (
                'id' => 22,
                'name' => 'agricultrels-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete Agricultrel',
                'parent_id' => 18,
            ),
            21 =>
            array (
                'id' => 23,
                'name' => 'news',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'News',
                'parent_id' => NULL,
            ),
            22 =>
            array (
                'id' => 24,
                'name' => 'news-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All News',
                'parent_id' => 23,
            ),
            23 =>
            array (
                'id' => 25,
                'name' => 'news-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit News',
                'parent_id' => 23,
            ),
            24 =>
            array (
                'id' => 26,
                'name' => 'news-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status News',
                'parent_id' => 23,
            ),
            25 =>
            array (
                'id' => 27,
                'name' => 'news-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete News',
                'parent_id' => 23,
            ),
            26 =>
            array (
                'id' => 28,
                'name' => 'articles',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Articles',
                'parent_id' => NULL,
            ),
            27 =>
            array (
                'id' => 29,
                'name' => 'articles-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All Articles',
                'parent_id' => 28,
            ),
            28 =>
            array (
                'id' => 30,
                'name' => 'articles-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit Articles',
                'parent_id' => 28,
            ),
            29 =>
            array (
                'id' => 31,
                'name' => 'articles-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status Article',
                'parent_id' => 28,
            ),
            30 =>
            array (
                'id' => 32,
                'name' => 'articles-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete Article',
                'parent_id' => 28,
            ),
            31 =>
            array (
                'id' => 33,
                'name' => 'activities',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Activities',
                'parent_id' => NULL,
            ),
            32 =>
            array (
                'id' => 34,
                'name' => 'activities-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All Activities',
                'parent_id' => 33,
            ),
            33 =>
            array (
                'id' => 35,
                'name' => 'activities-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit Activity',
                'parent_id' => 33,
            ),
            34 =>
            array (
                'id' => 36,
                'name' => 'activities-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status Activity',
                'parent_id' => 33,
            ),
            35 =>
            array (
                'id' => 37,
                'name' => 'activities-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete Activity',
                'parent_id' => 33,
            ),
            36 =>
            array (
                'id' => 38,
                'name' => 'albums',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Albums',
                'parent_id' => NULL,
            ),
            37 =>
            array (
                'id' => 39,
                'name' => 'albums-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All Albums',
                'parent_id' => 38,
            ),
            38 =>
            array (
                'id' => 40,
                'name' => 'albums-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit Album',
                'parent_id' => 38,
            ),
            39 =>
            array (
                'id' => 41,
                'name' => 'albums-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status Album',
                'parent_id' => 38,
            ),
            40 =>
            array (
                'id' => 42,
                'name' => 'albums-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete Album',
                'parent_id' => 38,
            ),
            41 =>
            array (
                'id' => 43,
                'name' => 'programs',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Programs',
                'parent_id' => NULL,
            ),
            42 =>
            array (
                'id' => 44,
                'name' => 'programs-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All Programs',
                'parent_id' => 43,
            ),
            43 =>
            array (
                'id' => 45,
                'name' => 'programs-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit Program',
                'parent_id' => 43,
            ),
            44 =>
            array (
                'id' => 46,
                'name' => 'programs-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status Program',
                'parent_id' => 43,
            ),
            45 =>
            array (
                'id' => 47,
                'name' => 'programs-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete Program',
                'parent_id' => 43,
            ),
            46 =>
            array (
                'id' => 48,
                'name' => 'projects',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Projects',
                'parent_id' => NULL,
            ),
            47 =>
            array (
                'id' => 49,
                'name' => 'projects-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'All Projects',
                'parent_id' => 48,
            ),
            48 =>
            array (
                'id' => 50,
                'name' => 'projects-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'Add / Edit Project',
                'parent_id' => 48,
            ),
            49 =>
            array (
                'id' => 51,
                'name' => 'projects-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'Change Status Project',
                'parent_id' => 48,
            ),
            50 =>
            array (
                'id' => 52,
                'name' => 'projects-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'Delete Project',
                'parent_id' => 48,
            ),
        ));


    }
}
