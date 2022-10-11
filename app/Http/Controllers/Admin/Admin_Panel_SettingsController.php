<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminPanelSetting;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_Panel_SettingsController extends Controller
{
    public function index(){
        $data = AdminPanelSetting::where('company_code', Auth::user()->company_code)->first();

        if (!empty($data)){
            if ($data['updated_by'] > 0 && $data['updated_by'] != null){
                $data['updated_by_admin'] = Admin::where('id', $data['updated_by'])->value('name');
            }
        }
        return view('admin.admin_panel_settings.index',compact('data',$data));
    }

    public function edit(){
        $data = AdminPanelSetting::where('company_code', Auth::user()->company_code)->first();
        return view('admin.admin_panel_settings.edit',compact('data',$data));
        
    }
}
