<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LEGO készleteim</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <h1>LEGO készleteim</h1>
  <form action="" method="post">
    <div>
      <label for="category">Kategória:</label>
      <div class="ib">
        <select id="category" name="category" size="5" required>
          <option>City</option>
          <option>Technic</option>
          <option>Duplo</option>
          <option>Friends</option>
          <option>Other</option>
        </select>
      </div>
    </div>
    <div>
      <label for="set_number">Készlet azonosítója:</label>
      <input type="number" id="set_number" name="set_number" required>
    </div>
    <div>
      <label for="name">Készlet neve:</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="image_url">Kép link:</label>
      <input type="text" id="image_url" name="image_url">
    </div>
    <div>
      <label for="condition">Állapot:</label>
      <div class="ib">
        <input type="radio" name="condition" id="condition-1" value="Új" required> <label for="condition-1">Új</label> <br>
        <input type="radio" name="condition" id="condition-2" value="Jó állapot" required> <label for="condition-2">Jó állapot</label> <br>
        <input type="radio" name="condition" id="condition-3" value="Hiányos" required> <label for="condition-3">Hiányos</label>
      </div>
    </div>
    <div>
      <button type="submit">Hozzáadás</button>
    </div>
  </form>

  <ul>
    <li>
      <img src="https://images.brickset.com/sets/large/42083-1.jpg?201806020310">
      Bugatti Chiron
      (42083)
      (Technic)
      (Új)
      <a href="#">archivál</a>
    </li>
  </ul>
</body>
</html>