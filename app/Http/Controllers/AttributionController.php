<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribution;
class AttributionController extends Controller
{
    public function index()
    {  return view('attributions.index');
    }

    public function create()
    {
        return view('attributions.create');
    }

    public function edit(Attribution $attribution)
    {
        return view('attributions.edit', compact('attribution'));
    }
}
