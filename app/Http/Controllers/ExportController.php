<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export()
    {
        File::put(public_path('output.html'), view('pages.contact.index')->render());
        return response()->download(public_path('output.html'));
    }
}
