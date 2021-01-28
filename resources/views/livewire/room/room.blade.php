<div class="container-fluid">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    @if ($updateMode)
                    @include('livewire.room.room-update')
                    @else
                    @include('livewire.room.room-create')
                    @endif
                </div>
                <div class="col-lg-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h3 class="card-title">List of Rooms</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th width="10">#</th>
                              <th>ROOM</th>
                              <th>PAYMENT/Monthly</th>
                              <th width="150">ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1?>
                           @forelse ($rooms as $room)
                           <tr >
                            <td>{{ $i++ }}</td>
                            <td>{{ $room->room }}</td>
                            <td>&#8369;{{ $room->amount }}</td>
                            <td>
                                <div class="row space-x-2">
                                    <button wire:click.prevent="edit({{ $room->id }})" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                    <button wire:click.prevent="delete({{ $room->id }})" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            
                          </tr>
                           @empty
                           <td colspan="4 text-center"> No data!</td>
                           @endforelse
                            </tbody>
                          
                          </table>
                         <div class="mt-3">
                            {{$rooms->links() }}
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
