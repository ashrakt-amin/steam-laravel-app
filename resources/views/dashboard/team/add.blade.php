<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('allteam.store')}}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                        <div class="form-group">
                            <label>{{ $localeCode . '.name'}}</label>
                            <input name="{{ $localeCode }}[name]"  class="form-control">
                        </div>
                         @endforeach
                        </div> 

                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                        <div class="form-group">
                            <label>{{ $localeCode . '.position'}}</label>
                            <input name="{{ $localeCode }}[position]"  class="form-control">
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
                    <button type="submit" class="btn btn-primary">add</button>
                </div>
            </form>
        </div>
    </div>
</div>
