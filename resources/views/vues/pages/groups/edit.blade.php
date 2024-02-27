@include('vues.partials._header')
@include('vues.partials._navbar')

<div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->



<div class="card content-wrapper" >
    <div class="card-header">
        Modifier un groupe
    </div>

    <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('groups.index') }}">
                    Retour
                </a>
            </div>
            <div class="form-group">
                <label class="required" for="name">Libelle</label>
                <input class="form-control " required>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Renseignez le groupe</span>
            </div>
          
         
          
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Modifier
                </button>
            </div>
        </form>
    </div>
</div>



@include('vues.partials._footer')