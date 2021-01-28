<div class="container-fluid">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h3 class="card-title">BOARDERS</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="bg-blue-400 ">
                              <input type="text" class="h-10 w-full " placeholder="Search Boarder">
                          </div>
                          <div class=" mt-2 border border-gray-600 h-80 overflow-y-auto">
                              @forelse ($boarders as $boarder)
                              <div class=" border-b border-gray-600 p-1">
                                <div wire:click="get({{ $boarder->id }})" class="flex justify-center hover:bg-gray-600 cursor-pointer hover:text-white space-x-8 items-center">
                                    <span class="text-lg">{{ $boarder->lastname.", ".$boarder->firstname." ".$boarder->middlename[0]."." }}</span>
                                </div>
                            </div>
                              @empty
                                  
                              @endforelse
                              
                              
                          </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                </div>
                <div class="col">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h3 class="card-title">TRANSACTION</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <div class="flex ">
                                  <div class="w-6/12"><div class=" flex flex-col  ">
                                    <div class="flex ">
                                       <span>Boarders name: </span> <span class="ml-2 text-bold">{{$boarder_name  }}</span>   
                                   </div> 
                                    <div class="flex">
                                       <span>Room #: </span><span class="ml-2 text-bold">{{$room  }}</span>  
                                    </div>
                                     <div class="flex">
                                       <span>Monthly Payment: </span><span class="ml-2 text-bold">&#8369;{{number_format($monthly,2)  }}</span>  
                                     </div>
                                 </div></div>
                                  <div class="w-6/12">
                                <div class="">
                                    <div class="mb-2 text-side">
                                        <label for="">Payment:</label>
                                        <input wire:model="amount" type="number" class="h-10 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="&#8369;0.00">
                                        @error('firstname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="flex justify-end">
                                        <button wire:click.prevent="add" class="bg-green-500 p-1 px-4 text-white shadow-sm hover:bg-green-800 focus:outline-none">PAY</button>
                                    </div>
                                </div>
                                </div>
                              </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                    </div>
                    <div class="col-lg-12" x-data="{ show: @entangle('showpayment') }">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h3 class="card-title">PAYMENT RECORDS </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                      <th >#</th>
                                      <th>AMOUNT</th>
                                      <th>PAYMENT DATE</th>
                                     
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                    @forelse ($payments as $payment)
                                    <tr>
                                        <td>{{ $i++ }} </td>
                                        <td class="uppercase">&#8369;{{number_format($payment->amount,2)}} </td>
                                        <td>{{ $payment->created_at}}</td>
                                        
                                        
                                      </tr>
                                    @empty
                                        <td colspan="3">No data!</td>
                                    @endforelse
                                    </tbody>
                                    
                                  </table>
                                 <div class="mt-2">
                                  {{ $payments->links() }}
                                 </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
      </section>
</div>
