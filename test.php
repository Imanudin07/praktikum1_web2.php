<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <div class="container">
  <body>
  <form method="GET" action="test.php">
  <div class="form-group row">
    <label class="col-4">Pilih Hobi :</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_0" type="checkbox" class="custom-control-input" 
        value="renang"> 
        <label for="hobi[]_0" class="custom-control-label">Renang</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_1" type="checkbox" class="custom-control-input" 
        value="futsal"> 
        <label for="hobi[]_1" class="custom-control-label">Futsal</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_2" type="checkbox" class="custom-control-input" 
        value="badminton"> 
        <label for="hobi[]_2" class="custom-control-label">Badminton</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <?php
    // menangkap nilai metode hobi dari checkbox
    $hobi = $_GET['hobi'];
    if (isset($_GET['hobi'])) {
    foreach ($hobi as $hobai) {
        switch ($hobai) {
            case 'renang':
                echo "Hobi saya renang.</br>";
                break;
            case 'futsal':
                echo "Hobi saya futsal.</br>";
                break;
            case 'badminton':
                echo "Hobi saya badminton.</br>";
                break;
            
            default:
                echo "ga punya hobi nolep lu";
                break;
        }
    }
}else{
    echo "Mohon Pilih Hobi Anda. ";
}

    // tampilkan semua data hobi dengan foreach
    // echo "Hobi : ";
    // foreach ($hobi as $hoby ) {
    //     echo $hoby . ", ";
    // }



    ?>
  </body>
  </div>
</html>