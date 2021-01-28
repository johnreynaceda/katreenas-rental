<div>
    <div class="col-lg" x-data="{ show: @entangle('addModal') }">
        <button class="btn btn-primary " wire:click.prevent="add" >Add Boarder</button>
        <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
            <div class="text-left bg-white h-auto mx-72  mt-20" @click.away="show = false">
                <div class="flex bg-nav text-side">
                    <div class=" px-3 py-2 font-medium text-lg w-11/12">
                     <h4>Add Boarder</h4>
                 </div>
                    <div class=" flex justify-center items-center w-1/12">
                     <div @click="show = false" class="hover:text-red-600 p-1 cursor-pointer  flex justify-center items-center"><i class="fa fa-window-close text-lg"></i></div>
                 </div>
                </div>
                <div class="body bg-white text-side ">
                    <form class="flex space-x-7 py-2 px-4" action="">
                        <div class="w-6/12">
                            <div class="mb-2 text-side">
                                <label for="">Firstname:</label>
                                <input wire:model="fname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Firstname">
                                @error('firstname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2 text-side">
                                <label for="">Middlename:</label>
                                <input wire:model="mname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Middlename">
                                @error('middlename') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2 text-side">
                                <label for="">Lastname:</label>
                                <input wire:model="lname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                                @error('lastname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2 text-side">
                                <label for="">Birthdate:</label>
                                <input wire:model="bdate" type="date" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                                @error('lastname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2 text-side">
                                <label for="">Address:</label>
                                <input wire:model="address" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Address">
                                @error('lastname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                           
                        </div>
                        <div class=" w-6/12">
                           
                            <div class="mb-2 text-side">
                                <label for="">Phone Number:</label>
                                <input wire:model="contact" type="mail" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Phone Number">
                                @error('email') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                           
                            <div class="mb-2 text-side">
                                <label for="">Email:</label>
                                <input wire:model="email" type="email" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Email">
                                @error('password') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-2 text-side">
                                <label for="">Room</label>
                                <select wire:model="room_id" type="text"
                                    class="h-10 w-full outline-none focus:border-green-400 text-sm px-3  focus:shadow-md rounded-sm border"
                                    placeholder="Enter Campus Name">
                                    <option selected hidden disabled value="null">Select Room</option>
                                    @forelse ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->room }}</option>
                                    @empty
                                    <option disabled value="">No Room Available</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="mb-2 text-side">
                                <label for="">Appliances:</label>
                                <div class="border mt-1 rounded-sm h-24 overflow-y-auto">
                                    <div class=" grid mt-1  px-3 rounded-sm grid-cols-3 gap-2">
                                        @forelse ($appliances as $appliance)
                                        <label class="inline-flex items-center">
                                            <input wire:model="appliance_id" type="checkbox" value="{{ $appliance->id }}" class="form-checkbox">
                                            <span class="ml-2">{{ $appliance->appliance }}</span>
                                          </label>
                                        @empty
                                            <label for="">No Appliances Data!</label>
                                        @endforelse
                                        
                                      </div>
                                </div>
                            </div>
                            
                            <div class="mb-2 flex justify-end">
                                
                               <button wire:click.prevent="save" class="bg-green-600 focus:outline-none flex rounded-md shadow-md text-white hover:bg-green-600 cursor-pointer p-2">
                                 
                                   <h5 class="">SAVE</h5>
                               </button>
                               
                             </div>
                        </div>
                    </form>
                   </div>
               </div>
            </div>
       </div>
</div>