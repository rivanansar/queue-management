<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if ($request->tipe) {
            $query->where('tipe_layanan', $request->tipe);
        }

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_proyek', 'like', "%{$request->search}%")
                  ->orWhere('nama_alat', 'like', "%{$request->search}%");
            });
        }

        $projects = $query->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nama_proyek'  => 'required|string|max:255',
            'tipe_layanan' => 'required|string|max:100',
            'status'       => 'required|string|max:50',
            'nama_alat'    => 'required|string|max:255',
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')
                         ->with('success', 'Project berhasil ditambahkan');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'nama_proyek'  => 'required|string|max:255',
            'tipe_layanan' => 'required|string|max:100',
            'status'       => 'required|string|max:50',
            'nama_alat'    => 'required|string|max:255',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')
                         ->with('success', 'Project berhasil diperbarui');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
                         ->with('success', 'Project berhasil dihapus');
    }
}
