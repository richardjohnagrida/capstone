<div class="member search">
    <h1>Member</h1>
    <form action="" class="search-bar">
        <input type="text" placeholder="Search" name="search">
        <button type="submit"><span class="material-icons-sharp">
                search
            </span></button>
    </form>
</div>

<div class="recent-renter member">
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <img src="{{ url('images/' . $member->img_profile) }}" alt="profile">
                    <td>{{ $member->last_name }}.{{ $member->first_name }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->contact_number }}</td>
                    <td>{{ $member->emaiml }}</td>
                    <td class="success">Active</td>


                    <td class="primary"> <a href="#update/{{ $member->member_id }}" class="link-1"
                            id="modal-closed">Update</a></td>
                </tr>
            @endforeach
            <div class="modal-container" id="modal-opened">
                <div class="modal">
                    <form action="" class="modal-info">
                        <h1 class="member-info" style="margin:10px 0px 20px 0px;">Member Info</h1>
                        <label for="" placeholder="CustomerName">Customer Name</label>
                        <input type="text">
                        <label for="">Active rentals</label>
                        <input type="text" disabled>
                        <label for="">Contact info</label>
                        <input type="text">
                        <label for="">Address</label>
                        <input type="text">
                        <label for="">Status</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="active">Active
                                </option>
                                <option value="deactive">Deactive</option>
                            </select><br><br>
                            <button type="submit" class="modal__btn archive-btn">Archive</button>
                            <button type="submit" class="modal__btn update-btn">Update &rarr;</button>
                        </div>
                    </form>
                    <a href="#modal-closed" class="link-2"></a>
                </div>
            </div>
        </tbody>
    </table>
</div>
<div class="page-container">
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
</div>
