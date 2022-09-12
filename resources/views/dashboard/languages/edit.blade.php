<!-- Modal -->
<div class="modal fade" id="edit{{$language->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('language.update',$language->id)}}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label>Language</label>
                            <input type="text" name="name" class="form-control" value="{{old($language->name)}}">
                        </div>
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
