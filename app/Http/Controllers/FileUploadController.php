<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesfileUpload(Request $request)
    {
        // dump($request->berkas);
        // return "Pemrosesan file upload di sini";
        // if ($request->hasFile('berkas')) {
        //     echo "path(): " . $request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): " . $request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getClientMimeType(): " . $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): " . $request->berkas->getSize();
        // } else {
        //     echo "Tidak ada berkas yang diupload";
        // }
        // $request->validate([
        //     'berkas' => 'required|file|image|max:500',
        // ]);
        // $path = $request->berkas->store('uploads');
        // echo "proses upload berhasil, file berada di : $path";
        $request->validate([
            'berkas' => 'required|file|image|max:500',
        ]);
        $namaFile = $request->berkas->getClientOriginalName();
        $path = $request->berkas->storeAs('uploads', $namaFile);
        echo "proses upload berhasil, data tersimpan pada:$path";
    }
}
