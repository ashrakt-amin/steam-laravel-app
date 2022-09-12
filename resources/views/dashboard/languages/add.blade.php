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
            <form action="{{route('language.store')}}"  method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">
                  
                    <div class="form-group">
                            <label>Language</label>
                            <input type="text" name="name" class="form-control" >
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
