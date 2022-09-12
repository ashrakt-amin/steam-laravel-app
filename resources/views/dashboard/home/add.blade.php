<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('data.store')}}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                        <div class="form-group">

                          @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                            <div class="form-group">
                            <label>{{ $localeCode . '.way Of Learning'}}</label>
                            <textarea name="{{ $localeCode }}[wayOfLearning]" class="form-control">{{old('wayOfLearning')}}</textarea>
                            </div>

                            <div class="form-group">
                            <label>{{ $localeCode . '.who We Are'}}</label>
                            <textarea name="{{ $localeCode }}[whoWeAre]" class="form-control">{{$data->translateOrNew($localeCode)->whoWeAre }}</textarea>
                            </div>

                            <div class="form-group">
                            <label>{{ $localeCode . '.accomplishments'}}</label>
                            <textarea name="{{ $localeCode }}[accomplishments]" class="form-control">{{$data->translateOrNew($localeCode)->accomplishments }}</textarea>
                            </div>

                            <div class="form-group">
                            <label>{{ $localeCode . '.vision'}}</label>
                            <textarea name="{{ $localeCode }}[vision]" class="form-control">{{$data->translateOrNew($localeCode)->vision }}</textarea>
                            </div>

                            <div class="form-group">
                            <label>{{ $localeCode . '.mission'}}</label>
                            <textarea name="{{ $localeCode }}[mission]" class="form-control">{{$data->translateOrNew($localeCode)->mission }}</textarea>
                            </div>
                        @endforeach
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
