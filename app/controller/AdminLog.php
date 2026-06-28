<?php

namespace app\controller;

use app\model\LoginLog;
use think\facade\View;

class AdminLog extends AdminBase
{
    public function login()
    {
        $logs = LoginLog::order('id', 'desc')->paginate(30);
        $page = $logs->render();

        View::assign('page', $page);
        View::assign('logs', $logs);
        return View::fetch('../app/view/admin/log/login.html');
    }
}
