<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Alert;
use Artisan;
use Log;
use Storage;
use Laracasts\Flash\Flash;

class BackupController extends Controller
{
    function index(){

        $disk = Storage::disk(config(''));
        $files = $disk->allfiles(config('http---localhost'));

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

        $file = storage_path() . '/app/http---localhost/' . $file_name;

        if ($disk =  Storage::disk('local')->exists('/http---localhost/' . $file_name)) {

            $fs = Storage::disk('local')->getDriver();
            dd($fs->readStream($file));
            $stream = $fs->readStream($file);
            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);

        } else {

            abort(404, "The backup file doesn't exist.");
        }

    }
}
