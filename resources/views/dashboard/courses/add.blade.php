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
            <form action="{{route('allcourses.store')}}" enctype="multipart/form-data" method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties )
                        <div class="form-group">
                            <label>{{ $localeCode . '.title'}}</label>
                            <input name="{{ $localeCode }}[title]" value="{{ old($localeCode . '.title') }}" required class="form-control">
                        
                          </div>
                    @endforeach
                        

                </div>
                    <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                         
                          </div> 
                            
                        
                        <div class="form-group">
                           <label>Levels</label>
                            <input type="number" name="levels" required class="form-control">
                           
                          </div>
                          
                          <div class="form-group">
                           <label>Ordering</label>
                            <input type="number" name="order" required class="form-control">
                          
                          </div>

                        <div class="form-group">
                           <label>Duration</label>
                            <input type="text"  name="duration" required class="form-control">
                          </div>

                      

                          <div class="form-group">
                           <label>View</label>
                           <select name="view" >
                             <option value="true">true</option>
                             <option value="false">false</option>
                           </select>                         
                         </div>



                           <div class="form-group">
                          <label for="language">Language</label>
                           <select  class="testselect2" required name="name[]" id="language" multiple="multiple">
                              @foreach($languages as $language)
                           <option value="{{$language->id}}">{{$language->name}}</option>
                              @endforeach
                           </select>
                           </div>

                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ِAdd</button>
                </div>
            </form>
        </div>
    </div>
</div>
