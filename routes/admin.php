<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\controllerhome;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;



Route::get('', [controllerhome::class, 'index']);
Route::resource('users', UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('permissions', PermissionController::class)->names('admin.permissions');
