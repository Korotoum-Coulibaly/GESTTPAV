@include('vues.partials._header')
@include('vues.partials._navbar')

<div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->


  
<div style="margin-bottom: 10px;" class="content-wrapper" >
      

    <div class="card-body">

      <div class="col-lg-12 py-4">
            <a class="btn btn-primary" href="{{ route('Groups.create') }}">Ajouter un groupe</a>
        </div>
        <div class="card-header">
            Liste des groupes
        </div>
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>ID</th>
                        <th>Libelle</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($groups as $key =>$group)

                        <tr data-entry-id="">
                            <td>

                            </td>
                            <td>
                            {{$group["IdGroup"]}}
                            </td>
                            <td>
                            {{$group["Libelle"]}}
                            </td>
            
                            
                            <!-- <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('Groups.show', 1) }}">Voir</a>

                                <a class="btn btn-xs btn-info" href="{{ route('Groups.edit',1) }}">Modifier</a>

                                <form action="{{ route('Groups.index') }}" method="GET" onsubmit="return confirm('{{ trans('Voulez-vous vraiment supprimer ?') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Supprimer">
                                </form>
                            </td> -->
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('groups.index') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('Voulez-vous vraiment supprimer ?') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
@include('vues.partials._footer')