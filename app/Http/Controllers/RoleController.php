<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    protected $allowedPerPage = [5, 10, 25, 50];

    public function index(Request $request)
    {
        $sortField = $request->query('sort_by', 'name');
        $sortDirection = $request->query('direction', 'asc');
        $perPage = (int) $request->query('per_page', 5);
        $query = $request->input('query'); // Ambil input pencarian dari request

        if (!in_array($perPage, $this->allowedPerPage)) {
            $perPage = 5;
        }

        // Query dengan pagination dan pencarian
        $items = Role::with('permissions')
            ->when($query, function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%')
                    // ->orWhere('url', 'like', '%' . $query . '%')
                    ->orWhereHas('permissions', function ($q) use ($query) {
                        $q->where('permissions', 'like', '%' . $query . '%'); // Pencarian berdasarkan nama kategori
                    });
                // ->orWhere('status', 'like', '%' . $query . '%');
            })
            ->orderBy($sortField, $sortDirection) // asc, desc
            ->paginate($perPage); // Pagination

        return view('admin.roles.index', [
            'items' => $items,
            'query' => $query,
            'sortField' => $sortField,
            'sortDirection' => $sortDirection,
            'perPage' => $perPage,
            'allowedPerPage' => $this->allowedPerPage
        ]); // Kirim data ke view
    }

    public function create()
    {
        $permissions = Permission::orderBy('name', 'ASC')->get();

        return view('admin.roles.create', [
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles|min:3'
        ]);

        if ($validator->passes()) {
            $role = Role::create(['name' => $request->name]);

            if (!empty($request->permission)) {
                foreach ($request->permission as $name) {
                    $role->givePermissionTo($name);
                }
            }

            return redirect()->route('roles.index')->with('success', 'Role added successfully');
        } else {
            return redirect()->route('roles.create')->withInput()->withErrors($validator);
        }
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $hasPermissions = $role->permissions->pluck('name');
        $permissions = Permission::orderBy('name', 'ASC')->get();

        return view('admin.roles.edit', [
            'permissions' => $permissions,
            'hasPermission' => $hasPermissions,
            'role' => $role
        ]);
    }

    public function update($id, Request $request)
    {
        $role = Role::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name,' . $id . ',id'
        ]);

        if ($validator->passes()) {
            // $role = Role::create(['name' => $request->name]);
            $role->name = $request->name;
            $role->save();

            if (!empty($request->permission)) {
                $role->syncPermissions($request->permission);
            } else {
                $role->syncPermissions([]);
            }

            return redirect()->route('roles.index')->with('success', 'Role added successfully');
        } else {
            return redirect()->route('roles.edit', $id)->withInput()->withErrors($validator);
        }
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Status deleted successfully!');
    }
}
