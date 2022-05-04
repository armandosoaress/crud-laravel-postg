<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bd;
use App\Models\bdempresa;

class funcoes extends Controller
{
    public function cadastrarempresa()
    {

       return view('cadastrarempresa',
           [
            
            ]);
    }
    

    public function cadastrarusuario()
    {

       return view('cadastrarusuario',
           [
            
            ]);
    }
    public function enviarusuarios(request $request)
    {
        $bd=new bd;
           $bd->name=$request->nome;
           $bd->login=$request->login;
           $bd->senha=$request->senha;
           $bd->save();
           return redirect('/')->with('msg','cadastrado com susseso');
   
        }  
        public function enviarempresas(request $request)
        {
               $bdempresa=new bdempresa;
               $bdempresa->nomef=$request->nomef;
               $bdempresa->cnpj=$request->cnpj;
               $bdempresa->dataf=$request->dataf;
               $bdempresa->emailc=$request->emailc;
               $bdempresa->telefone=$request->telefone;
               $bdempresa->cep=$request->cep;
               $bdempresa->endereco=$request->endereco;
               
                if (
                $request->emailc
                !='lucas.ferreira@suportegerencial.com.br'
                &&
                $request->emailc
                !='douglas.santos@suportegerencial.com.br'
                &&
                $request->emailc
                !='jonathas.almeida@suportegerencial.com.br'

                ) 
                {
                     $bdempresa->save();
                    return redirect('/listarempresa')->with('msg','cadastrado com susseso');
                }else {
                    return redirect('/cadastrarempresa')->with('msg','E-mail ---'. $request->emailc.'---- Bloqueado para cadastro');
       
                }
               
               


        
            }  

           public function listar()
    {
        $alunos = bd::all();
        return view('listar',
         [
              'alunos'=> $alunos
          ]);
      
    }

    public function listarempresa()
    {
        $empresas = bdempresa::all();
        return view('listarempresa',
         [
              'empresas'=> $empresas
          ]);
      
    }
    public function editar($id)
    {
        $id=$id;
      
        $alunos = bd::findOrFail($id);
        return view('editar',
         [
              'alunos'=> $alunos,
             
          ]);
      
    }

    public function updateempresa(Request $request){
        $data=$request->all();
        bdempresa::findOrFail( $request->id)->update($data);
        return redirect('/listarempresa')->with('msg','evento editado com susseso');
    }  

    public function editarempresa($id)
    {
        $id=$id;
      
        $empresa = bdempresa::findOrFail($id);
        return view('editarempresa',
         [
              'empresa'=> $empresa,
             
          ]);
      
    }
    public function sobre($id)
    {
  
      
        $empresa = bdempresa::findOrFail($id);
        return view('sobre',
         [
              'empresa'=> $empresa,
             
          ]);
      
    }

    public function update(Request $request){
        $data=$request->all();
        bd::findOrFail( $request->id)->update($data);
        return redirect('/')->with('msg','evento editado com susseso');
    }  

    public function destroy($id){

        bd::findOrFail($id)->delete();
    
        return redirect('/')->with('msg','evento deletado com susseso');
    }
    public function destroyempresa($id){

        bdempresa::findOrFail($id)->delete();
    
        return redirect('/listarempresa')->with('msg','evento deletado com susseso');
    }
}


  