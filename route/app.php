<?php
use think\facade\Route;

Route::pattern([
    'id'    => '\d+',
    'name'  => '[\w\-]+',
    'uuid'  => '[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}',
]);

// 登入登出
Route::get('/',                'Auth/index');
Route::get('/login',           'Auth/index');
Route::post('/login',          'Auth/login');
Route::post('/logout',         'Auth/logout');

// 注册账户
Route::get('/register',        'Auth/registerIndex');
Route::post('/register/code',  'Auth/registerCode');
Route::post('/register',       'Auth/publicRegister');

// 重置密码
Route::get('/forget',          'Auth/forgetIndex');
Route::post('/forget/code',    'Auth/forgetCode');
Route::post('/forget',         'Auth/resetPassword');

// 用户中心
Route::get('/user',            'UserDashboard/index');
Route::get('/user/login',      'UserDashboard/loginLog');

// 个人资料
Route::get('/user/profile',                       'UserDashboard/profile');
Route::put('/user/profile/notify',                'UserDashboard/saveNotify');
Route::put('/user/profile/passwd',                'UserDashboard/savePasswd');

// Azure 账户
Route::resource('/user/azure',                    'UserAzure');
Route::post('/user/azure/quota/:id',              'UserAzure/queryAccountQuota');
Route::post('/user/azure/cost/:id',               'UserAzure/estimatedCost');
Route::post('/user/azure/refresh',                'UserAzure/refreshAllAzureSubscriptionStatus');
Route::post('/user/azure/search',                 'UserAzure/searchAccount');
Route::post('/user/azure/refresh/:id',            'UserAzure/refreshAzureSubscriptionStatus');
Route::post('/user/azure/update/:id',             'UserAzure/updateAzureSubscriptionResources');
Route::delete('/user/azure/disabled',             'UserAzure/deleteAzureDisabledSubscription');

// Azure 服务器
Route::resource('/user/server/azure',             'UserAzureServer');
Route::post('/user/server/azure/search',          'UserAzureServer/search');
Route::post('/user/server/azure/available',       'UserAzureServer/available');
Route::post('/user/server/azure/price',           'UserAzureServer/price');
Route::patch('/user/server/azure/:action/:uuid',  'UserAzureServer/status');
Route::put('/user/server/azure/resize/:uuid',     'UserAzureServer/resize');
Route::put('/user/server/azure/redisk/:uuid',     'UserAzureServer/redisk');
Route::post('/user/server/azure/remark/:uuid',    'UserAzureServer/remark');
Route::post('/user/server/azure/refresh/:uuid',   'UserAzureServer/refresh');
Route::post('/user/server/azure/change/:uuid',    'UserAzureServer/change');
Route::post('/user/server/azure/check/:ipv4',     'UserAzureServer/check');
Route::delete('/user/server/azure/remove/:uuid',  'UserAzureServer/delete');
Route::delete('/user/server/azure/destroy/:uuid', 'UserAzureServer/destroy');

// 管理员
Route::get('/admin',                              'AdminDashboard/index');
Route::resource('/admin/ann',                     'AdminAnn');
Route::resource('/admin/user',                    'AdminUser');
Route::get('/admin/user/report',                  'AdminUser/userReport');
Route::get('/admin/user/assets/:id',              'AdminUser/userAssets');
Route::patch('/admin/user/remark/:id',            'AdminUser/remark');

// 设置
Route::get('/admin/setting',                      'AdminSetting/baseIndex');
Route::put('/admin/setting',                      'AdminSetting/baseSave');

// 邮件
Route::get('/admin/setting/email',                'AdminSetting/emailIndex');
Route::put('/admin/setting/email',                'AdminSetting/emailSave');
Route::post('/admin/setting/email/test',          'AdminSetting/emailPushTest');

// 网站
Route::get('/admin/setting/custom',               'AdminSetting/customIndex');
Route::put('/admin/setting/custom',               'AdminSetting/customSave');

// 日志
Route::get('/admin/log/login',                    'AdminLog/login');

// 任务进度
Route::get('/user/progress/:uuid',                'UserTask/ajaxQuery')->json();
