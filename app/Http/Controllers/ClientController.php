<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entry;
use App\Models\Project;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('client', compact('clients'));
    }

    public function create(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Successfully Created');
    }

    public function projectDetails($id)
    {
        $client = Client::find($id);
        if ($client->count() > 0) {
            $projects = Project::where('client_id', $client->id)->get();
            return view('project-details', compact('projects', 'client'));
        } else {
            return redirect()->back()->with('error', 'No client found');
        }
    }

    public function entryList($id)
    {
        $project = Project::find($id);
        if ($project->count() > 0) {
            $client = Client::where('id', $project->client_id)->first();
            if ($client->count() > 0) {
                $entries = Entry::where('project_id', $id)->get();
                return view('entry-list', compact('entries', 'client', 'project'));
            } else {
                return redirect()->back()->with('error', 'No client found');
            }
        } else {
            return redirect()->back()->with('error', 'No project found');
        }
    }


    public function projectCreate(Request $request)
    {
        Project::create([
            'client_id' => $request->client_id,
            'project_name' => $request->project_name,
            'starting_date' => $request->starting_date,
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Successfully Created');
    }


    public function createEntry(Request $request)
    {
        Entry::create([
            'project_id' => $request->project_id,
            'entry_date' => $request->entry_date,
            'voucher_number' => $request->voucher,
            'lot' => $request->lot,
            'bag' => $request->bag,
            'payment_method' => $request->payment_method,
            'category' => $request->category,
            'qty' => $request->received_qty,
            'rate' => $request->rate,
            'bill_amount' => $request->bill_amount,
            'advance' => $request->advance,
            'due' => $request->due,
            'total' => $request->total
        ]);

        return redirect()->back()->with('success', 'Successfully Created');
    }


    public function projectStatusUpdate($id)
    {
        Project::where('id', $id)->update([
            'status' => 0,
            'closing_date' => date('Y-m-d')
        ]);

        return redirect()->back()->with('success', 'Project closed successfully');
    }
}