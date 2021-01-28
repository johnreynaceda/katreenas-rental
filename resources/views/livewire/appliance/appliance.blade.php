<div class="container-fluid">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    @if ($updateMode)
                    @include('livewire.appliance.appliance-update')
                    @else
                    @include('livewire.appliance.appliance-create')
                    @endif
                </div>
                <div class="col-lg-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h3 class="card-title">List of Appliances</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th width="10">#</th>
                              <th>APPLIANCES</th>
                              <th>PAYMENT/Monthly</th>
                              <th width="150">ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1?>
                           @forelse ($appliances as $appliance)
                           <tr >
                            <td>{{ $i++ }}</td>
                            <td>{{ $appliance->appliance }}</td>
                            <td>&#8369;{{ number_format($appliance->payment,2) }}</td>
                            <td>
                                <div class="row space-x-2">
                                    <button wire:click.prevent="edit({{ $appliance->id }})" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                    <button wire:click.prevent="delete({{ $appliance->id }})" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            
                          </tr>
                           @empty
                           <td colspan="4 text-center"> No data!</td>
                           @endforelse
                            </tbody>
                          
                          </table>
                         <div class="mt-3">
                            {{$appliances->links() }}
                         </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                </div>
       
            </div>
        </div>
      </section>
</div>
