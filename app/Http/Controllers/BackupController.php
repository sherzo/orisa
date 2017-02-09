<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Alert;
use Artisan;
use Log;
use Storage;
use Laracasts\Flash\Flash;
use Response;

class BackupController extends Controller
{
    function index(){

        $disk = Storage::disk('backup');
        $files = Storage::disk('backup')->allFiles();

        $backups = [];

        foreach ($files as $k => $f) {

            if (substr($f, -4) == '.zip' && $disk->exists($f)) {

                $e = explode('/', $f);
        
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => $e[1],
                    'file_size' => $disk->size($f),
                    'last_modified' => $disk->lastModified($f),
                ];
            }
        }

        $backups = array_reverse($backups);

        return view('admin.backups.index', compact('backups'));
    }

    function create(){

        try {

            Artisan::call("backup:run");

            $output = Artisan::output();

            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);

            Flash::success('<strong> Éxito </strong> se ha creado un nuevo respaldo correctamente.');

            return redirect()->back();

        } catch (Exception $e) {

            Flash::warning('<strong> Alerta </strong> error al procesar la solicitud <strong>'. $e .'</strong> vuelva a intentarlo.');

            return redirect()->back();
        }

    }

    function download($file_name){
     
        if ($disk =  Storage::disk('backup')->exists('http---localhost/' . $file_name)) {

            $fs = "../storage/laravel-backups/http---localhost/" . $file_name;
    
            return response()->download($fs);

        } else {

            abort(404, "The backup file doesn't exist.");
        }

    }
}
