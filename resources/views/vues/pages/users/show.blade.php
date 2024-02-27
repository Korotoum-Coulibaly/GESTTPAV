@include('vues.partials._header')
@include('vues.partials._navbar')

<div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->


<div class="card content-wrapper">
    <div class="card-header">
        Détails de 
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('users.index') }}">
                    Back
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <th>Groupe</th>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>
                                <span class="label label-info"></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('users.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>



@include('vues.partials._footer')