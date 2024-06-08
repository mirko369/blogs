<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index()
    {
        $description = Description::find(1);

        return view("description.description",[
            "description" => $description
        ]);
    }

    public function edit()
    {
        $description = Description::find(1);

        return view("description.editdescription",[
            "description" => $description->opis
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
                "description" => "required|string"
            ]);
        $table = Description::find(1);
        $table->opis = $request->description;
        $table->save();

        return redirect("/description");
    }
}
