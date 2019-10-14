<form action="" method="POST" enctype="multipart/form-data">
    <h4>Upload</h4>
    <label for="brojUnosa">Unesite koliko datoteka želite učitati</label>
    <select name="brojUnosa" id="brojUnosa">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <br>
    <input type="submit" name="potvrdi" value="Potvrdi">
    <br>
    <br>
<?php

    if (isset($_REQUEST['potvrdi'])) {
        
        $brojUnosa = $_REQUEST['brojUnosa'];

        for ($i=1; $i <= $brojUnosa; $i++) { 
            echo "<input type=file name=datoteka-$i><br><br>";
        }
        echo '<input type="submit" name="upload" value="Učitaj">';
    }
?>
</form>

<?php

    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

if (isset($_REQUEST['upload'])) {
    
    $upload_path = 'uploads';

    if (!is_dir($upload_path)) {
        mkdir($upload_path);
    }

    foreach ($_FILES as $key => $value) {
    
        $filename = $value['name'];
        $tmpname = $value['tmp_name'];
        $error = $value['error'];
        $size = $value['size'];

        if ($error == UPLOAD_ERR_OK && $size != 0) {
            
            $path = pathinfo($filename);
            $ext = $path['extension'];
            $new_name = time().rand(10000, 10000000) .'.'. $ext;
            $destfile = $upload_path.'/'.$new_name;

            if(move_uploaded_file($tmpname, $destfile)){
                echo 'Upload je uspješan! <br>';
                echo "<a href=$destfile>Prikaži originalnu sliku</a>";
                echo "<p><img src=$destfile width=200></p>";
            }else{
                echo 'Došlo je do pogreške prilikom prijenosa datoteke!';
            }

        }else{
            echo 'Došlo je do pogreške prilikom Upload-a!';
        }
    }
}