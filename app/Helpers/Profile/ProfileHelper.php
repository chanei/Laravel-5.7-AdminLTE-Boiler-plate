<?php
namespace App\Helpers\Profile;

use App\User;
use App\Helpers\AuditTrail\AuditTrailHelper;

class ProfileHelper{

    protected $audittrailhelper;

    public function __construct(AuditTrailHelper $audittrailhelper)
    {
        $this->audittrailhelper = $audittrailhelper;
    }

    public function updatePassword($request)
    {
        $user_id = \Auth::user()->id;
        $user = User::find($user_id);
        $user->password = bcrypt($request->get('password'));
        $user->save();

        $action = 'Updated Password';
        $details = $user->name. ' Updated the password';
        $this->audittrailhelper->saveAuditTrail($action, $details);
    }

    public function updateProfile($request)
    {
        $user_id = \Auth::user()->id;
        $user = User::find($user_id);
        $user->name = $request->get('name');
        $user->phone_number = $request->get('phone_number');
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->save();

        $action = 'Updated Profile';
        $details = $user->name. ' Updated their Profile';
        $this->audittrailhelper->saveAuditTrail($action, $details);
    }

}
