<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          

          <legend>Search date wise user</legend>

          <form action="{{ route('filter') }}" method="get">
            
            <div class="col-md-3">
              <div class="form-group">
              <label for="">Start Date</label>
              <input type="date" class="form-control" name="start_date">
            </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
              <label for="">End Date</label>
              <input type="date" class="form-control" name="end_date">
            </div>
            </div>

            <div class="col-md-2" style="margin-top: 24px;">
               <div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
