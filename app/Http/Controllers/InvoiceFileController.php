<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use File;

class InvoiceFileController extends Controller
{
    /**
     * Display all XML file presents in a specific folder
     */
    public function index()
    {
        $path = storage_path('app/public/');
       
        //Get all XML file from folder $path
        $xml_files = glob($path . '*.' . 'xml');
        $xml_files_metadata = [];

        for($i = 0; $i < count($xml_files); $i++) {

            $xml_files_metadata[$i] = array(
                "filepath" =>$xml_files[$i],
                "filename" => pathinfo($xml_files[$i],PATHINFO_FILENAME).'.'.pathinfo($xml_files[$i],PATHINFO_EXTENSION),
                "filesize" => filesize($xml_files[$i]), //. ' bytes' returns size in bytes
                "lastModified" => date("F d Y H:i:s.", fileatime($xml_files[$i]))
            );
        }

        return view('files.file_index', ["data" => $xml_files_metadata]); 
    }
    /**
     * Delete a XML file from a disk
     * 
     * @param 
     */
    public function delete($filename)
    {
      
        $filename = $dirs = storage_path('app/public/').''.$filename;
        unlink($filename);

        return redirect()->route('fileList');
    }
    //
    public function download($filename)
    {
        $filename = storage_path('app/public/').''.$filename;
        $headers = array(
            'Content-Type' => 'application/xml', //mime_content_type( $file )
          );
        $name = pathinfo($filename,PATHINFO_FILENAME);
        return response()->download($filename, $name, $headers);
    }
    //
    public function show($filename)
    {
        $file = Storage::disk('public')->get($filename);

        $content_file=(new Response($file, 200))->header('Content-Type', 'application/xml');

        return view('files.file_show')->with('filename',$filename)
                                            ->with('content',$content_file);
    }
}
