<!-- Modal -->
<div class="modal fade" id="edit{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('allteam.update',$team->id)}}" enctype="multipart/form-data" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                        <div class="form-group">
                            <label>{{ $localeCode . '.name'}}</label>
                            <input name="{{ $localeCode }}[name]" value="{{$team->translateOrNew($localeCode)->name }}" class="form-control">
                        </div>
                         @endforeach
                        </div> 

                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                        <div class="form-group">
                            <label>{{ $localeCode . '.position'}}</label>
                            <input name="{{ $localeCode }}[position]" value="{{$team->translateOrNew($localeCode)->position }}" class="form-control">
                        </div>
                         @endforeach
                        </div> 

                    <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image"   class="form-control">
                         
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
