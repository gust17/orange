@extends('padrao.padrao')
@section('content')
<div class="container">
    <div class="row">
        @forelse($planos as $plano)
        <div class="col-md-3">
        <div class="card">
            <div class="card-title">
                <br>
                <center><h3>{{$plano->name}}</h3></center>

            </div>
            <div class="card-body">
                <center>
                <label class="fw-bolder" for="">Valor</label>
                <br>
                R$ {{$plano->valor}}
                <br>
                <label class="fw-bolder" for="">Nivel de Bonificação</label>
                <br>
                Ate {{$plano->qtd_nivel}} nivel <br>
                    <button class="btn btn-success btn-block">Selecionar</button>
                </center>
            </div>
        </div>
        </div>
        @empty

        @endforelse

    </div>
    <br>
    <div class="row">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header">
                <h3 class="card-title">Link de Indicaçao</h3>
            </div>
            <div class="card feed-card">
                <div class="card-body">

                        <span class="text-danger f-w-400">
                            <input type="text" class="form-control" id="linkIndicacao"
                                   value="{{url('indicacao',Auth::user()->link)}}" disabled/>
                        </span>
                    <br>
                    <button class="btn btn-success btn-block text-uppercase copiarLink"><i
                            data-feather="file"></i> COPIAR LINK
                    </button>
                    </p>
                </div>
            </div>

        </div>


    </div>
</div>




@endsection
@section('js')

    <script>
        $(document).on('click', '.copiarLink', function(){

            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($('#linkIndicacao').val()).select();
            document.execCommand("copy");
            $temp.remove();

            // Swal.fire('Copiado!', 'Link de indicação copiado com sucesso!', 'success');

            createNotification('Link Copiado com Sucesso', 'Link Copiado com Sucesso', '', 'success');

        });
    </script>

@endsection
