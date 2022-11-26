<?php

namespace App\Http\Controllers;

use App\Models\Severity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SeverityController extends Controller
{
    
    public function index(){
        return view('admin.severity.index', [
                 'severities' => Severity::all()
                ]);
    }


    public function show(Severity $severity){
        return view('admin.severity.show',[
            'severity' => $severity
        ]);
    }

    public function create(){
        return view('admin.severity.create');
    }

    public function store(){
        
        Severity::create(array_merge($this->validateSeverity(), []));
        return redirect('/admin/severities')->with('success', 'Schweregrad anlegen');
    }

    public function edit(Severity $severity){
        return view('admin.severity.edit', [
            'severity' => $severity
        ]);
    }

    public function update(Severity $severity){
        $attributes = $this->validateSeverity($severity);
        $severity->update($attributes);
        return redirect('/admin/severities')->with('success', 'Schweregrad aktualisieren');
    }

    protected function validateSeverity(?Severity $severity = null): array{

        $severity ??= new Severity();
        return request()->validate([
            'level' => ['required', 'numeric', Rule::unique('severities', 'level')->ignore($severity)],
            'label' => 'required'
        ]);
    }
}
