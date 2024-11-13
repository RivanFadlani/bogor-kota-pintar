<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar Permission
        $permissions = [
            // permissions
            'create permissions',
            'view permissions',
            'edit permissions',
            'delete permissions',
            // roles
            'create roles',
            'view roles',
            'edit roles',
            'delete roles',
            // users
            'create users',
            'view users',
            'edit users',
            'delete users',
            // dokumens
            'create dokumens',
            'view dokumens',
            'edit dokumens',
            'delete dokumens',
            // kategori dokumens
            'create kategori dokumens',
            'view kategori dokumens',
            'edit kategori dokumens',
            'delete kategori dokumens',
            // visimisis
            'create visimisis',
            'view visimisis',
            'edit visimisis',
            'delete visimisis',
            // program implementasis
            'create program implementasis',
            'view program implementasis',
            'edit program implementasis',
            'delete program implementasis',
            // dimensis
            'create dimensis',
            'view dimensis',
            'edit dimensis',
            'delete dimensis',
            // sub dimensis
            'create sub dimensis',
            'view sub dimensis',
            'edit sub dimensis',
            'delete sub dimensis',
            // booklets
            'create booklets',
            'view booklets',
            'edit booklets',
            'delete booklets',
            // sub dimensis
            'create sub dimensis',
            'view sub dimensis',
            'edit sub dimensis',
            'delete sub dimensis',
            // videos
            'create videos',
            'view videos',
            'edit videos',
            'delete videos',
            // road maps
            'create road maps',
            'view road maps',
            'edit road maps',
            'delete road maps',
            // penilaians
            'create penilaians',
            'view penilaians',
            'edit penilaians',
            'delete penilaians',
            // sertifikats
            'create sertifikats',
            'view sertifikats',
            'edit sertifikats',
            'delete sertifikats',
            // navigasis
            'create navigasis',
            'view navigasis',
            'edit navigasis',
            'delete navigasis',
        ];

        // membuat semua permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // mambuat roles
        $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $operatorRole = Role::firstOrCreate(['name' => 'operator']);

        // memberikan permissions pada masing-masing roles

        // superadmin
        $superAdminRole->syncPermissions(Permission::all());

        // admin
        $adminPermissions = [
            // permissions
            'create permissions',
            'view permissions',
            'edit permissions',
            'delete permissions',
            // roles
            'create roles',
            'view roles',
            'edit roles',
            'delete roles',
            // users
            'create users',
            'view users',
            'edit users',
            'delete users',
            // dokumens
            'create dokumens',
            'view dokumens',
            'edit dokumens',
            'delete dokumens',
            // kategori dokumens
            'create kategori dokumens',
            'view kategori dokumens',
            'edit kategori dokumens',
            'delete kategori dokumens',
            // visimisis
            'create visimisis',
            'view visimisis',
            'edit visimisis',
            'delete visimisis',
            // program implementasis
            'create program implementasis',
            'view program implementasis',
            'edit program implementasis',
            'delete program implementasis',
            // dimensis
            'create dimensis',
            'view dimensis',
            'edit dimensis',
            'delete dimensis',
            // sub dimensis
            'create sub dimensis',
            'view sub dimensis',
            'edit sub dimensis',
            'delete sub dimensis',
            // booklets
            'create booklets',
            'view booklets',
            'edit booklets',
            'delete booklets',
            // sub dimensis
            'create sub dimensis',
            'view sub dimensis',
            'edit sub dimensis',
            'delete sub dimensis',
            // videos
            'create videos',
            'view videos',
            'edit videos',
            'delete videos',
            // road maps
            'create road maps',
            'view road maps',
            'edit road maps',
            'delete road maps',
            // penilaians
            'create penilaians',
            'view penilaians',
            'edit penilaians',
            'delete penilaians',
            // sertifikats
            'create sertifikats',
            'view sertifikats',
            'edit sertifikats',
            'delete sertifikats',
            // navigasis
            'create navigasis',
            'view navigasis',
            'edit navigasis',
            'delete navigasis',
        ];
        $adminRole->syncPermissions($adminPermissions);

        // operator
        $operatorPermissions = [
            // dokumens
            'create dokumens',
            'view dokumens',
            'edit dokumens',
            'delete dokumens',
            // kategori dokumens
            'create kategori dokumens',
            'view kategori dokumens',
            'edit kategori dokumens',
            'delete kategori dokumens',
            // visimisis
            'create visimisis',
            'view visimisis',
            'edit visimisis',
            'delete visimisis',
            // program implementasis
            'create program implementasis',
            'view program implementasis',
            'edit program implementasis',
            'delete program implementasis',
            // dimensis
            'create dimensis',
            'view dimensis',
            'edit dimensis',
            'delete dimensis',
            // sub dimensis
            'create sub dimensis',
            'view sub dimensis',
            'edit sub dimensis',
            'delete sub dimensis',
            // booklets
            'create booklets',
            'view booklets',
            'edit booklets',
            'delete booklets',
            // sub dimensis
            'create sub dimensis',
            'view sub dimensis',
            'edit sub dimensis',
            'delete sub dimensis',
            // videos
            'create videos',
            'view videos',
            'edit videos',
            'delete videos',
            // road maps
            'create road maps',
            'view road maps',
            'edit road maps',
            'delete road maps',
            // penilaians
            'create penilaians',
            'view penilaians',
            'edit penilaians',
            'delete penilaians',
            // sertifikats
            'create sertifikats',
            'view sertifikats',
            'edit sertifikats',
            'delete sertifikats',
            // navigasis
            'create navigasis',
            'view navigasis',
            'edit navigasis',
            'delete navigasis',
        ];
        $operatorRole->syncPermissions($operatorPermissions);
    }
}
