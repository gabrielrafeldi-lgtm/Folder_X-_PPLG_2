<?php

include 'proses.php';

function hapus($data){
    $query = "DELETE FROM sayur WHERE id_sayur = '$data'";
    mysqli_query(db(), $query);
}

hapus(cek_data("id"));
?>
<script>
    alert("data Telah Dihapus!");
    location.href = "index.php";
</script>
<?php

?>