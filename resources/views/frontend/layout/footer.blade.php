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
    $(function () { 
        var _token=$('input[name=_token]').val();
        $.ajax({
            url:"{{ route('get.states') }}",
            method:"POST",
            data:{'id':id,' _token':_token},
            success:function(data) {
                $('#states').html(data);
            }
        });
     });
</script>

</body>

</html>