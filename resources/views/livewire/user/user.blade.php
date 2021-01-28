<div>
    <div class="container-fluid">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        {{-- @if ($updateMode)
                        @include('livewire.room.room-update')
                        @else
                        @include('livewire.room.room-create')
                        @endif --}}
                        <div class="card card-primary card-outline" >
                            <div class="card-header">
                              <h3 class="card-title">Add User</h3>
                            </div>
                            <!-- /.card-header -->
                            <form>
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Name:</label>
                                    <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="JUAN DELA CRUZ">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email:</label>
                                    <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input wire:model="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                                  </div>
                                  
                                </div>
                                <!-- /.card-body -->
                        
                                <div class="card-footer">
                                  <button wire:click.prevent="save" type="submit" class="btn btn-success">Save</button>
                                </div>
                              </form>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h3 class="card-title">List of Users</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th width="10">#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th width="150">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1?>
                               @forelse ($users as $user)
                               <tr >
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="row space-x-2">
                                        <button wire:click.prevent="edit({{ $user->id }})" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                        <button wire:click.prevent="delete({{ $user->id }})" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                                
                              </tr>
                               @empty
                               <td colspan="4 text-center"> No data!</td>
                               @endforelse
                                </tbody>
                              
                              </table>
                             <div class="mt-3">
                                {{$users->links() }}
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
    
</div>
