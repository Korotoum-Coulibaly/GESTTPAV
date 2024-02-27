@include('vues.partials._header')
@include('vues.partials._navbar')

<div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->



<div class="card content-wrapper" >
    <div class="card-header">
        Modifier une permission
    </div>

    <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('permissions.index') }}">
                    Retour
                </a>
            </div>
            <div class="form-group">
                <label class="required" for="name">Titre</label>
                <input class="form-control " required>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Entrez un titre</span>
            </div>
         
            <div class="form-group">
                <label class="required" for="roles">Permissions</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect all</span>
                </div>
                <select class="form-control select2 " name="roles[]" id="roles" multiple required>
                        <option value=""></option>
                </select>
                    <div class="invalid-feedback">
                    </div>
                <span class="help-block">Choisissez une permission</span>
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