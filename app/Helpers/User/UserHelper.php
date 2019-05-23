<?php
namespace App\Helpers\User;

use App\User;
use App\Helpers\AuditTrail\AuditTrailHelper;

class UserHelper{

    protected $audittrailhelper;

    public function __construct(AuditTrailHelper $audittrailhelper)
    {
        $this->audittrailhelper = $audittrailhelper;
    }

    public function saveUser($request)
    {
        $user = new User;
        $user->name = $request->get('name');
        $user->phone_number = $request->get('phone_number');
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->profile_picture = $filename;
        $user->save();

        $user->roles()->attach($request->get('role'));

        $action = 'Save User Account';
        $details = 'Account name '.$user->name;
        $this->audittrailhelper->saveAuditTrail($action, $details);
    }

    public function updateUser($request, $id)
    {
        $decrypted_id = \Crypt::decrypt($id);
        $user = User::find($decrypted_id);
        $user->name = $request->get('name');
        $user->phone_number = $request->get('phone_number');
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->password = bcrypt($request->get('password'));
        $user->profile_picture = $filename;
        $user->save();

        $action = 'Update User Account';
        $details = 'Account name '.$user->name;
        $this->audittrailhelper->saveAuditTrail($action, $details);

    }

}
