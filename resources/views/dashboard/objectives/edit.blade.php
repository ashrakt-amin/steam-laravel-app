<!-- Modal -->
<div class="modal fade" id="editObjective{{$objective->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('objective.update',$objective->id )}}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                            <div class="form-group">
                            <label>{{ $localeCode . '.objective'}}</label>
                            <textarea name="{{ $localeCode }}[objective]" class="form-control">{{$objective->translateOrNew($localeCode)->objective }}</textarea>
                            </div>
                        @endforeach


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"></button>
                    <button type="submit" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
    </div>
</div>
