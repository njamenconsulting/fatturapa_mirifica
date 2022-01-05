<?php
namespace App\Services;

use \Taocomp\Einvoicing\FatturaElettronica;
use App\Services\XmlGeneratorService as XmlInvoice;

class InvoiceDownloadingService
{
    public static function downloadInvoice($array)
    {
        //Launch downloading
        $filepath =  storage_path('app/public/').''.$array['filename'];

        if ( file_exists($filepath) ) {
           
            fopen ($filepath, 'w') or die ("Unable to open file");
            //touch( $filepath ) ;
            $xmlContents=(new XmlInvoice()) -> XmlGenerator($array);         
            file_put_contents($filepath,$xmlContents);
            
            $headers = array(
                'Content-Type' => 'application/xml', //mime_content_type( $file )
            );
            $name = pathinfo($filepath,PATHINFO_FILENAME);
            
            return response()->download($filepath, $name, $headers);
        }
    }
}