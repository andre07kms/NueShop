@extends('admin.layout')
@section('titulo', 'Produtos')
@section('conteudo')


<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
      <i class="large material-icons">add</i>
    </a>   
  </div>

  @include('admin.produtos.create')

    
   

    <div class="row container crud">
        
            <div class="row titulo ">              
              <h1 class="left">Produtos</h1>
              <span class="right chip">234 produtos cadastrados</span>  
            </div>

           <nav class="bg-gradient-blue">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input placeholder="Pesquisar..." id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </nav>     

            <div class="card z-depth-4 registros" >
            <table class="striped ">
                <thead>
                  <tr>
                    <th></th>
                    <th>ID</th>  
                    <th>Produto</th>
                      
                      <th>Preço</th>
                      <th>Categoria</th>
                      <th></th>
                  </tr>
                </thead>
        
                <tbody>
                  <tr>
                    <td><img src="{{asset('img/balanca.jpg')}}" class="circle "></td>
                    <td>#123</td>
                    <td>Balança</td>                    
                    <td>R$ 90.00</td>
                    <td>Eletrônicos</td>
                    <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                     
                        <a href="delete" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.produtos.delete')
                    </tr>
                  <tr>
                    <td><img src="img/adipometro.jpg" class="circle"></td>
                    <td>#123</td>
                    <td>Adipometro</td>                    
                    <td>R$ 50.00</td>
                    <td>Medida</td>
                    <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                      
                        <a href="delete" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.produtos.delete')
                    </tr>
                  <tr>
                    <td><img src="img/paquimetro.jpg" class="circle"></td>
                    <td>#123</td>
                    <td>Paquimetro</td>                    
                    <td>R$ 80.00</td>
                    <td>Eletrônicos</td>
                    <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                      
                        <a href="delete" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.produtos.delete')
                    </tr>
                  <tr>
                    <td><img src="img/bioimpedancia.jpg" class="circle"></td>
                    <td>#123</td>
                    <td>Bioimpedancia</td>                    
                    <td>R$ 100.00</td>
                    <td>Eletrônicos</td>
                    <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                      
                        <a href="delete" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.produtos.delete')
                    </tr>
                </tbody>
              </table>
            </div> 

            <ul class="pagination center">
              <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>               
    </div>

 @endsection