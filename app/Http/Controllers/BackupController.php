<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use BackupManager\Filesystems\Destination;
use Carbon\Carbon;

use Alert;
use Artisan;
use Log;
use Storage;
use Response;

class BackupController extends Controller
{
    public function index(){

        $files = Storage::disk('backup')->allFiles();
        $storage = Storage::disk('backup');

        $backups = [];

        foreach ($files as $k => $f) {
            if (substr($f, -3) == '.gz' && $storage->exists($f)) {

                $e = explode('/', $f);
                
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => $e[0],
                    'file_size' => $storage->size($f),
                    'last_modified' => $storage->lastModified($f),
                ];
            }
        }

        $backups = array_reverse($backups);

        return view('admin.backups.index', compact('backups'));
    }

    public function create(){

        $date = Carbon::now()->toW3cString();
        $environment = env('APP_ENV');

        try {

            Artisan::call("db:backup", [
                "--database"        => "mysql",
                "--destination"     => "local",
                "--destinationPath" => "/{$environment}/sefardi_{$environment}_{$date}",
                "--compression"     => "gzip"
 
            ]);

            $output = Artisan::output();

            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);

            Flash::success('Se ha creado un nuevo respaldo correctamente.');

            return redirect()->back();

        } catch (Exception $e) {

            Flash::warning('Error al crear nuevo respaldo.');

            return redirect()->back();
        }

    }

    public function download($file_name){
     
        if ($disk =  Storage::disk('backup')->exists($file_name)) {

            $fs = "../storage/local/" . $file_name;
    
            return response()->download($fs);

        } else {

            abort(404, "The backup file doesn't exist.");
        }

    }

    public function destroy(Request $request)
    {       
        if($disk =  Storage::disk('backup')->exists($request->file_name))
        {
            $delete = Storage::disk('backup')->delete($request->file_name);

            if($delete){

                Flash::success('Se ha eliminado el respaldo correctamente.');

                return redirect()->back();  

            } else {

                Flash::warning('Error al eliminar el respaldo el archivo seleccionado no se encuentra.');

                return redirect()->back();
                
            }

        } else {

            Flash::warning('message', 'Error al eliminar el respaldo el archivo seleccionado no se encuentra.');

            return redirect()->back();
            
        }
    }

    public function restore($file_name){

        if($disk = Storage::disk('backup')->exists($file_name)){

            Artisan::call("db:restore", [
                "--source"      => "s3",
                "--sourcePath"  => $file_name,
                "--database"    => "mysql",
                "--compression" => "gzip"
            ]);

            Flash::success('Se ha restaurado la base de datos correctamente.');

            return redirect()->back();

        } else {

            Flash::warning('message', 'Disculpe ha ocurrido un error al restaurar la base de datos, archivo corrupto intentelo nuevamente.');

            return redirect()->back();
        }
        
    }
}
