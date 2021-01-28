<div>
    <div class="container-fluid">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-primary card-outline" >
                            <div class="card-header">
                              <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <form>
                                <div class="card-body">
                                  <div class="flex justify-center">
                                      <img src="{{ asset('images/scan.gif') }}" alt="">
                                  </div>
                                  <div class="form-group mt-2">
                                    <label for="exampleInputEmail1">Payment/Monthly:</label>
                                    <input wire:model="qr" type="text" class="form-control" id="exampleInputEmail1" placeholder="qr" autofocus>
                                  </div>
                                  
                                </div>
                                <!-- /.card-body -->
                        
                              </form>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h3 class="card-title">Logs List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              
                                <a href="{{ route('print') }}" type="button" class="btn btn-warning mb-2">PRINT</a>
                             
                              <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th width="10">#</th>
                                  <th>BOARDER</th>
                                  <th>ROOM</th>
                                  <th>DATE & TIME</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1?>
                               @forelse ($logss as $logs)
                               <tr >
                                <td>{{ $i++ }}</td>
                                <td>{{ $logs->boarder->lastname.", ".$logs->boarder->firstname." ".$logs->boarder->middlename[0]."." }}</td>
                                <td>{{ $logs->boarder->room->room}}</td>
                                <td>{{ $logs->created_at }}</td>
                               
                                
                              </tr>
                               @empty
                               <td colspan="4 text-center"> No data!</td>
                               @endforelse
                                </tbody>
                              
                              </table>
                             <div class="mt-3">
                                {{$logss->links() }}
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
