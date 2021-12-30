<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use File;

class InvoiceFileController extends Controller
{
    public function index()
    {
        //$path = base_path('storage\\app\\public\\');
        $path = '/app/storage\\app`\\public\\';
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
    //
    public function delete($filename)
    {
      
        $filename = $dirs = base_path('storage\\app\\public\\').''.$filename;
        unlink($filename);

        return redirect()->route('file-list');
        //$dirs = base_path('storage\\app\\public');

        //File::cleanDirectory( $dirs);//Delete all file in directory

        //$fs = new \Illuminate\Filesystem\Filesystem;
        //$fs->cleanDirectory($dirs); 

        //array_map('unlink', glob("caminho/completo/*.JPG"));

        /*The glob will return an array with all possible paths (referring to .JPG files within the given folder).
        array_map will apply the unlink function to each element of the array.
        unlink will remove the file corresponding to the path. */
    }
    //
    public function download($filename)
    {
        $filename = $dirs = base_path('storage\\app\\public\\').''.$filename;
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
