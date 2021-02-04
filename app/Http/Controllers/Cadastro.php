<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class Cadastro extends Controller
{
    /*public function cadastro(Request $request)
    {
        $validate = $request->validate(
            [
                'nome'     => ['required', 'max:255'],
                'email'    => ['required', 'max:60'],
                'senha'    => ['required', 'max:255'],
                'endereco' => ['required', 'max:255'],
                'telefone' => ['required', 'max:255'],
                'curriculo'=> ['required', 'max:500']
            ]);
    
        $user = new User();
        $stats = $this->takeaCv($request);
        if($stats == false)
        {
            return redirect()->back()->withErrors('A extensão não é suportados e tambem o arquivo pode estar vazio');
        }else if(!is_bool($stats))
        {
            $user->nome = $request->get('nome');
            $user->email = $request->get('email');
            $user->senha = bcrypt($request->get('senha'));
            $user->ip = $this->ipClient($request);
            $user->endereco = $request->endereco;
            $user->telefone = $request->telefone;
            $user->curriculo = $stats;
    
            $status = $user->save();
        }
        
      

        if($status)
        {
            return redirect()->route('inicial')->with('sucesso', 'Usuario cadastrado com sucesso !');
        }
        return redirect()->back()->withErrors('Erro ao cadastrar novo usuario !');

    }

    private function ipClient(Request $request)
    {
        $ip_cliente = $request->ip();
        return $ip_cliente;
    }

    private function takeaCv(Request $request)
    {
        $file = $request->file()['curriculo'];
        $name = uniqid(date('HisYmd'));
        $extension = $request->curriculo->extension();
        $nameFile = "{$name}.{$extension}";

            $input = [
            'file' => $file
            ];

            $arq = $file->getMimeType();

            if($arq == "application/pdf" 
            || $arq == "text/plain" 
            || $arq == "inode/x-empty" 
            || $arq == "application/msword"
            || $arq == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            )
            {
            
                $path = $file->store('curriculos');
                
                $upload = $file->storeAs('curriculos', $nameFile, 'novoCaminho');
                return $path;    
            }

            return false;
    }
*/

}
