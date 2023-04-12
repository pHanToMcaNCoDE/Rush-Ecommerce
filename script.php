<script src="js/script.min.js"></script>

<?php

    if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
        ?>
<script>
Swal.fire({
    icon: '<?php echo $_SESSION['success']; ?>',
    text: '<?php echo $_SESSION['text']; ?>',
    title: '<?php echo $_SESSION['status']; ?>',
    button: 'Ok'
})
</script>
<?php

    unset($_SESSION['status']);
    }

?>

<!-- <script>
Swal.fire({
    icon: 'success',
    title: 'Oops...',
    text: 'Something went wrong!',
    footer: '<a href="">Why do I have this issue?</a>'
})
</script> -->