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
            <form action="{{route('message.store',$contact->id)}}" method="post">
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label> name </label>
                            <input type ="text" name="name" required value="{{old('name')}}" class="form-control">
                        
                          </div>
                        

                          <div class="form-group">
                            <label> email </label>
                            <input name="name" type ="email" required value="{{old('email')}}" class="form-control">
                         </div>
                            
                        
                         <div class="form-group">
                            <label> subject </label>
                            <input name="subject" type ="text" required value="{{old('subject')}}" class="form-control">
                         </div>
                          
                         <div class="form-group">
                            <label> subject </label>
                            <input name="subject" type ="text" required value="{{old('subject')}}" class="form-control">
                         </div>

                        <div class="form-group">
                           <label>Duration</label>
                            <textarea name="message"  required class="form-control">{{ old('duration') }} </textarea>
                          </div>

                      
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
