<!-- Modal -->
<div class="modal fade" id="addContent{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('content.store')}}"  method="POST" autocomplete="off">
                @csrf
                <input type="hidden" name="course_id" value="{{$course->id}}">

                <div class="modal-body">
                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                        <div class="form-group">
                            <label>{{ $localeCode . '.content'}}</label>
                            <textarea name="{{ $localeCode }}[content]" class="form-control">{{ old($localeCode . '.objective') }}</textarea>
                        </div>
                    @endforeach
                        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ِAdd</button>
                </div>
            </form>
        </div>
    </div>
</div>