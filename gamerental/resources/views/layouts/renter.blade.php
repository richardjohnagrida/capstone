<div class="recent-renter">
    <h2>Recent Rentals</h2>
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Game Name</th>
                <th>Rented Date</th>
                <th>Due</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($rentals as $rental)
                <tr>
                    <td>{{ $rental->first_name }} . {{ $rental->last_name }}</td>
                    <td>{{ $rental->name }}</td>
                    <td>{{ $rental->created_at }}</td>
                    <td>{{ $rental->due_dates }}</td>


                    <td class="success">Active</td>
                    <td class="primary"><a href="">Details</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="showall">
        <a href="member.html">Show All</a>
    </div>
</div>
