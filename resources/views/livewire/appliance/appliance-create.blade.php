<div class="card card-primary card-outline" >
    <div class="card-header">
      <h3 class="card-title">Add Appliances</h3>
    </div>
    <!-- /.card-header -->
    <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Appliance:</label>
            <input wire:model="appliance" type="text" class="form-control" id="exampleInputEmail1" placeholder="appliance name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Payment/Monthly:</label>
            <input wire:model="payment" type="text" class="form-control" id="exampleInputEmail1" placeholder="&#8369;600.00">
          </div>
          
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button wire:click.prevent="save" type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
</div>