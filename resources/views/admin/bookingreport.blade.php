<html>
<body>
<h3 class="w3l_header">BOOKING REPORT</h3> <br>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <form action="/admin/bookingreport" method= "post">
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <th>NAME</th>
                <th>CUSTOMER</th>
                <th>EMAIL</th>
                <th>BOOKING DATE</th>
                <th>BOOKING TIME</th>			
            </tr>
            @foreach($bookings as $booking)
            <tr>
                <td> {{ optional($booking->service)->sname }} </td>
                <td> {{ optional($booking->customer)->cname }} </td>
                <td> {{ optional($booking->customer)->cemail }} </td>
                <td> {{ $booking->date }} </td>
                <td> {{ $booking->time  }} </td>
            </tr>
            @endforeach
        </table>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>

        <br>
        <input type="button" value="Download" onclick="window.print();">
        </form>
        </div>
    </div>
 </div>
</body>
</html>


