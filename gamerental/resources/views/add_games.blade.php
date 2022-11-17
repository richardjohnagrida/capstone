<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="add_games" method="POST" enctype="multipart/form-data">
        @csrf


        <label>Game name</label>
        <input type="text" name="name"><br>
        <label>Genre</label>
        {{-- <input type="text" name="genre"><br> --}}

        <select name="genre">
            <option value="RPG">RPG</option>
            <option value="MMORPG">MMORPG</option>
            <option value="Strategy">Strategy</option>
            <option value="Sports">Sports</option>
            <option value="Sports">Simulation</option>
            <option value="Adventure">Adventure</option>
            <option value="Adventure">Puzzle</option>

        </select>
        <br>
        <label>Console</label>
        <select name="console">
            @foreach ($platforms as $platform)
                <option value="{{ $platform->console_id }}">{{ $platform->console_name }}</option>
            @endforeach
        </select>
        <br>
        <label>Price per week</label>
        <input type="number" name="week"><br>
        <label>Price per month</label>
        <input type="number" name="month"><br>
        <label>Total Quantity</label>
        <input type="number" name="qty"><br>
        <label>Description</label>
        <input type="text" name="description"><br>
        <label>Cover</label>
        <input type="file" name="cover">
        <button type="submit">Submit</button>


    </form>
</body>

</html>
