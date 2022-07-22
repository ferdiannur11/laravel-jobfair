<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
class CompanyController extends Controller
{
   
    public function index()
    {
        $company = DB::table('company')->get();

        return view('company.index', ['company' => $company]);
       
    }

    public function store(Request $request)
    {
        // $authUser = auth()->user();
        // dd($authUser);
        // $Pria->nama         = $request->nama;
        // $Pria->pesan        = $request->pesan;
        // $Pria->facebook     = $request->facebook;
        // $Pria->instagram    = $request->instagram;
        // $Pria->twitter      = $request->twitter;
        // $Pria->created_by   = Auth::user()->id;
        // if($request->hasFile('gambar')){
        //     $file = $request->file('gambar');
        //     $name = $file->getClientOriginalName();
        //     $file_name = Str::random(30) . '_' . $name;
        //     $file->move(base_path() . '/public/assets/gambar', $file_name);

        //     $Pria->gambar = '/assets/gambar/' . $file_name;
        // }
        // // $Pria = Pria::create($req);
        // $Pria->save();
        $company = Company::create([
            'name_company' => $request->name_company,
            'location_company' => $request->location_company,
            'phone_company' => $request->phone_company,
            'picture_company' => $request->picture_company,
            'company_description' => $request->company_description,
            'link_youtube' => $request->link_youtube,
            'status' => 1,
            'created_by' => Auth::user()->id
        ]);

        return redirect()->route('company.index')
            ->with('success', 'berhasil yeeeyyyyy');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }
    public function update(Request $req, barang $barang)
    {
        $validator = Validator::make($req->all(),[
            'id_barang'    => 'required',
            'nama_barang'     => 'required',
            'harga' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' =>'error',
                'message' => $validator->messages()
            ]);
        }
        $req = $req->all();
        $barang->update($req);
        return redirect()->route('barang.index')
            ->with('success', 'Barang updated successfully');
    }
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        if ($barang) {
            return redirect()
                ->route('barang.index')
                ->with([
                    'success' => 'Barang has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('barang.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

}
