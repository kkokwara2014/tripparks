<footer>
    <div class="container">
        <p>
            &copy; <script>
                document.write(new Date().getFullYear());
            </script> tripparks.com | All rights reserved
        </p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Terms</a>
            </li>
            <li class="list-inline-item">
                <a href="#">FAQ</a>
            </li>
        </ul>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('bootstrap_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('bootstrap_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('bootstrap_assets/js/new-age.min.js')}}"></script>

<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>

<script>
 
$(document).ready(function() {

$('select[name="state"]').on('change', function() {
    var stateID = $(this).val();
    if(stateID) {
        $.ajax({
            url: '/myform/ajax/'+stateID,
            type: "GET",
            dataType: "json",
            success:function(data) {
                $('select[name="lga"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="lga"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                });
            }
        });
    }else{
        $('select[name="lga"]').empty();
    }
});

});
</script>

</body>

</html>