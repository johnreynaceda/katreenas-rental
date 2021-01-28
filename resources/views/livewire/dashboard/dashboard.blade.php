<div>
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          {{-- <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
    
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
    
                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
    
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
    
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div> --}}
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    LOGS
                  </h3>
                 
                </div><!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>BOARDER</th>
                            <th>DATE AND TIME</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;?>
                         @forelse ($logss as $logs)
                         <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $logs->boarder->lastname.", ".$logs->boarder->firstname." ".$logs->boarder->middlename[0]."." }}</td>
                          <td>01-28-2020 05:30pm</td>
                        
                        </tr>
                         @empty
                             
                         @endforelse
                        </tbody>
                      </table>
                      <div class="mt-3">
                        {{$logss->links() }}
                     </div>
                </div><!-- /.card-body -->
              </div>
             
              
              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>{{ $boarder }}</h3>
            
                            <p>BOARDERS</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-person"></i>
                          </div>
                          <a href="{{ route('boarder') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>{{ $room }}</h3>
            
                            <p>ROOMS</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-home"></i>
                          </div>
                          <a href="{{ route('room') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>{{ $appliances }}</h3>
            
                            <p>APPLIANCES</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-bag"></i>
                          </div>
                          <a href="{{ route('appliance') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    </div>
                </div>
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
</div>
