<div class="card card-primary card-outline" >
    <div class="card-header">
      <h3 class="card-title">Update Room</h3>
    </div>
    <!-- /.card-header -->
    <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Room #:</label>
            <input wire:model="room" type="text" class="form-control" id="exampleInputEmail1" placeholder="#0">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Payment/Monthly:</label>
            <input wire:model="payment" type="text" class="form-control" id="exampleInputEmail1" placeholder="&#8369;600.00">
          </div>
          
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button wire:click.prevent="saveedit" type="submit" class="btn btn-success">Save</button>
          <button wire:click.prevent="canceledit" type="submit" class="btn btn-danger">Cancel</button>
        </div>
      </form>
</div>