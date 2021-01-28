<div>
    <div class="flex">
        <img src="{{ 'images/icon.jpg' }}" class="h-20" alt="">
        <div class="flex items-center ">
            <h1 class="">KATREENA'S RENTAL </h1>
        </div>
    </div>
    <div class="mt-5 text-center ">
        <h2 class="text-bold">DAILY LOGS</h2>
    </div>
    <div class="mt-5 flex justify-center ">
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
    </div>
</div>
