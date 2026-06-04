<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class CertificateController extends Controller
{
    public function show($uuid)
{
     $certificate = Certificate::where(
        'uuid',
        $uuid
    )->firstOrFail();

    return view(
        'certificate',
        compact('certificate')
    );
}
}