<?php




use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GebruikerController extends Controller
{
    public function store(Request $request)
    {
        DB::table('gebruikers')->insert([
            'naam' => $request->naam,
            'email' => $request->email
        ]);

        return "Opgeslagen!";
    }
}
