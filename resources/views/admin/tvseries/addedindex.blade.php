@extends('layouts.admin')
@section('title','Added Tv Series')
@section('content')
  <div class="content-main-block mrg-t-40">
    <div class="admin-create-btn-block">
      <a href="{{route('tvseries.create')}}" class="btn btn-danger btn-md"><i class="material-icons left">add</i> Create TvSeries</a>
      <!-- Delete Modal -->
      <a type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#bulk_delete"><i class="material-icons left">delete</i> Delete Selected</a>   
      @if (Session::has('changed_language'))
        <a href="{{ route('tmdb_tv_translate') }}" class="btn btn-danger btn-md"><i class="material-icons left">translate</i> Translate all to {{Session::get('changed_language')}}</a>   
      @endif
      <!-- Modal -->
      <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="delete-icon"></div>
            </div>
            <div class="modal-body text-center">
              <h4 class="modal-heading">Are You Sure ?</h4>
              <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
              {!! Form::open(['method' => 'POST', 'action' => 'TvSeriesController@bulk_delete', 'id' => 'bulk_delete_form']) !!}
                <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-block box-body">
      <table id="tvTable" class="table table-hover">
        <thead>
          <tr class="table-heading-row">
            <th>
              <div class="inline">
                <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" id="checkboxAll">
                <label for="checkboxAll" class="material-checkbox"></label>
              </div>
              #
            </th>
            <th>Thumbnail</th>
            <th>Tv Series Title</th>
            <th>Rating</th>
            <th>By TMDB</th>
            <th>Featured</th>
            <th>Status</th>
            <th>Added by</th>
            <th>Actions</th>
          </tr>
        </thead>
        @if ($tv_serieses)
          <tbody>
           
          </tbody>
        @endif
      </table>
    </div>
  </div>
@endsection
@section('custom-script')
<script>
    $(function(){
      $('#checkboxAll').on('change', function(){
        if($(this).prop("checked") == true){
          $('.material-checkbox-input').attr('checked', true);
        }
        else if($(this).prop("checked") == false){
          $('.material-checkbox-input').attr('checked', false);
        }
      });
    });
  </script>

  <script>
    $(function () {
      
      var table = $('#tvTable').DataTable({
          processing: true,
          serverSide: true,
         responsive: true,
         autoWidth: false,
         scrollCollapse: true,
       
         
          ajax: "{{ route('addedTvSeries') }}",
          columns: [
              
              {data: 'checkbox', name: 'checkbox',orderable: false, searchable: false},
              {data: 'thumbnail', name: 'thumbnail'},
              {data: 'title', name: 'title'},
              {data: 'rating', name: 'rating',searchable: false},
              {data: 'tmdb', name: 'tmdb',searchable: false},
              {data: 'featured', name: 'featured',searchable: false},
              {data: 'status', name: 'status',searchable: false},
              {data: 'addedby', name: 'addedby',searchable: false},
              {data: 'action', name: 'action',searchable: false}
             
          ],
          dom : 'lBfrtip',
          buttons : [
            'csv','excel','pdf','print'
          ],
          order : [[0,'desc']]
      });
      
    });
  </script>
  <script>
    $(function(){
      $('#checkboxAll').on('change', function(){
        if($(this).prop("checked") == true){
          $('.material-checkbox-input').attr('checked', true);
        }
        else if($(this).prop("checked") == false){
          $('.material-checkbox-input').attr('checked', false);
        }
      });
    });
  </script>
@endsection