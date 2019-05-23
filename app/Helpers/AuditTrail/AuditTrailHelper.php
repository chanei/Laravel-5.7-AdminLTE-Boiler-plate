<?php
namespace App\Helpers\AuditTrail;

use App\AuditTrail;

class AuditTrailHelper{

    public function saveAuditTrail($action, $details)
    {
        $user_id = \Auth::user()->id;

        $audittrail = new AuditTrail;
        $audittrail->user_id = $user_id;
        $audittrail->action = $action;
        $audittrail->details = $details;
        $audittrail->save();
    }

}
