<!DOCTYPE html>

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file[]" accept="image/png, image/gif, image/jpeg" multiple>
        <input type="submit" value="อัพโหลด">
    </form>

    <?php
        isset( $_FILES['file'] ) ? $file = $_FILES['file'] : $file = "";

        if( !empty( $file ) ) {
            for( $i=0; $i<count( $file['name'] ); $i++ ) {
                $file_name = $file['name'][$i];
                $file_tmp_name = $file['tmp_name'][$i];
                if( move_uploaded_file( $file_tmp_name, $file_name )) {
                    echo "<img src='{$file_name}' /><br/>";
                }
            }
        }
    ?>
</html>