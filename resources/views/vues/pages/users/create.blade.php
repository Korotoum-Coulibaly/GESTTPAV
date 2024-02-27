@include('vues.partials._header')
@include('vues.partials._navbar')

<div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->


<div class="card content-wrapper">
    <div class="card-header">
        Créer un utilisateur
    </div>

    <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <a class="btn btn-primary" href=" {{ route('users.index') }}">Back</a>
            </div>
            <div class="form-group">
                <label class="required" for="name">Nom</label>
                <input class="form-control " required>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Entrez le nom</span>
            </div>
           
            <div class="form-group">
                <label class="required" for="groupe">Groupe</label>
                {{-- <input class="form-control " required> --}}
                <select name="groupe" class="form-control" aria-label="Default select example">
                    <option selected>Choisissez le groupe</option>
                    
                        <option></option>
                    
                </select>
                    <div class="invalid-feedback">
                    </div>

                <span class="help-block">Renseignez le groupe</span>
            </div>
            <div class="form-group">
                <label class="required" for="fonction">Fonction</label>
                <input class="form-control " required>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Renseignez la fonction</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">Mot de passe</label>
                <input class="form-control " required>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Entrez le mot de passe</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">Roles</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">select all</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">deselect all</span>
                </div>
                <select class="form-control select2 " name="roles[]" id="roles" multiple required>
                        <option value=""></option>
                </select>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Selectionnez des rôles</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>




@include('vues.partials._footer')