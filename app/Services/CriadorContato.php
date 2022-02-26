<?PHP
namespace App\Services;

use App\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CriadorContato{
    // public $timestamps = false;
    // protected $fillable = [
    //     'name', 'email', 'telefone', 'usuario_gh','user_id'
    // ];
    public function criarContato(Request $request){
        
        DB::beginTransaction();
        $contato = Contato::create([
            'name' => $request->name, 
            'email'=>$request->email, 
            'telefone'=>$request->telefone, 
            'usuario_gh'=>$request->usuario_gh,
            'user_id'=>Auth::id()
        ]);
        DB::commit();
        return redirect('/');
    }
}
